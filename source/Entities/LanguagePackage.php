<?php declare(strict_types=1);

namespace Monopage\Languages\Entities;

use Monopage\Contracts\EntityInterface;
use Monopage\Domain\Attributes\AliasValue;
use Monopage\Domain\Attributes\DateTimeValue;
use Monopage\Domain\Attributes\StringValue;
use Monopage\Domain\Attributes\UUIDValue;
use Monopage\Domain\Exceptions\DomainException;

class LanguagePackage implements EntityInterface
{
    protected UUIDValue $uuid;
    protected StringValue $title;
    protected AliasValue $alias;
    protected StringValue $locale;
    protected array $languages = [];
    protected Language $default;
    protected DateTimeValue $dateTimeCreated;
    protected DateTimeValue $dateTimeEdited;

    public function __construct(AliasValue $alias, StringValue $title, Language $language)
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

    public function getId(): UUIDValue
    {
        return $this->uuid;
    }

    public function getTitle(): StringValue
    {
        return $this->title;
    }

    public function setTitle(StringValue $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAlias(): AliasValue
    {
        return $this->alias;
    }

    public function setAlias(AliasValue $alias): self
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

    public function getDateTimeCreated(): DateTimeValue
    {
        return $this->dateTimeCreated;
    }

    public function setDateTimeCreated(DateTimeValue $created): self
    {
        $this->dateTimeCreated = $created;

        return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getDateTimeEdited(): DateTimeValue
    {
        return $this->dateTimeEdited;
    }

    public function setDateTimeEdited(DateTimeValue $edited = null): self
    {
        $this->dateTimeEdited = $edited;

        return $this;
    }
}
