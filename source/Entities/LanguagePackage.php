<?php declare(strict_types=1);

namespace Monopage\Languages\Entities;

use Monopage\Contracts\EntityInterface;
use Monopage\Contracts\Exceptions\DomainException;
use Monopage\Properties\AliasProperty;
use Monopage\Properties\StringProperty;
use Monopage\Properties\UuidProperty;

class LanguagePackage implements EntityInterface
{
    protected UuidProperty $uuid;
    protected StringProperty $title;
    protected AliasProperty $alias;
    protected StringProperty $locale;
    protected array $languages = [];
    protected Language $default;
    //protected DateTimeValue $dateTimeCreated;
    //protected DateTimeValue $dateTimeEdited;

    public function __construct(AliasProperty $alias, StringProperty $title, Language $language)
    {
        $this->setAlias($alias);
        $this->setTitle($title);
        $this->setDefaultLanguage($language);
    }

    public function setDefaultLanguage(Language $language): self
    {
        if (!$this->containsLanguage($language)) {
            $this->addLanguage($language);
        }
        $this->default = $language;

        return $this;
    }

    public function containsLanguage(Language $language): bool
    {
        return in_array($language, $this->languages, true);
    }

    public function addLanguage(Language $language): self
    {
        if (!$this->containsLanguage($language)) {
            $this->languages[] = $language;
        }

        return $this;
    }

    public function getId(): UuidProperty
    {
        return $this->uuid;
    }

    public function getTitle(): StringProperty
    {
        return $this->title;
    }

    public function setTitle(StringProperty $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAlias(): AliasProperty
    {
        return $this->alias;
    }

    public function setAlias(AliasProperty $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return Language[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param Language[] $languages
     *
     * @return $this
     */
    public function setLanguages(array $languages): self
    {
        foreach ($languages as $language) {
            $this->addLanguage($language);
        }

        return $this;
    }

    public function removeLanguage(Language $language): self
    {
        if ($this->isDefaultLanguage($language)) {
            throw new DomainException( // @todo создать особое исключение
                'Unable to remove default language from package'
            );
        }

        foreach ($this->languages as $i => $current) {
            if ($current === $language) {

                if ($this->getLanguageCount() === 1) {
                    throw new DomainException( // @todo создать особое исключение
                        'Language must contain at least one language'
                    );
                }

                unset($this->languages[$i]);

                break;
            }
        }

        return $this;
    }

    public function isDefaultLanguage(Language $language): bool
    {
        return $this->default === $language;
    }

    public function getLanguageCount(): int
    {
        return count($this->languages);
    }

    public function getDefaultLanguage(): Language
    {
        return $this->default;
    }
}
