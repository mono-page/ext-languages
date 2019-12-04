<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities;

use LogicException;
use MonoPage\Languages\Interfaces\LanguageInterface;
use MonoPage\Languages\Interfaces\PackageOfLanguagesInterface;

/**
 * Class PackageOfLanguages
 */
class PackageOfLanguages implements PackageOfLanguagesInterface
{
    /**
     * @var string
     */
    protected string $alias;
    /**
     * @var array
     */
    protected array $languages;
    /**
     * @var LanguageInterface
     */
    protected LanguageInterface $default;

    /**
     * @param string $alias
     * @param array $languages
     * @param LanguageInterface|null $default
     */
    public function __construct(string $alias, array $languages, LanguageInterface $default = null)
    {
        $this->alias = $alias;
        if (empty($languages)) {
            throw new LogicException('A language package must contain at least one language');
        }
        foreach ($languages as $language) {
            if (!$language instanceof LanguageInterface) {
                throw new LogicException('The $languages must implement LanguageInterface');
            }
            $this->languages[] = $language;
        }
        if (null === $default) {
            $this->default = $this->languages[0];
        } else {
            if (!in_array($default, $this->languages, true)) {
                throw new LogicException('The $default language must be one of $languages');
            }
            $this->default = $default;
        }
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @return int
     */
    public function getLanguageCount(): int
    {
        return count($this->getLanguages());
    }

    /**
     * @return LanguageInterface
     */
    public function getDefaultLanguage(): LanguageInterface
    {
        return $this->default;
    }
}
