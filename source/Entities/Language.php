<?php declare(strict_types=1);

namespace Monopage\Languages\Entities;

use Monopage\Contracts\EntityInterface;
use Monopage\Domain\Attributes\AliasValue;
use Monopage\Domain\Attributes\DateTimeValue;
use Monopage\Domain\Attributes\StringValue;
use Monopage\Domain\Attributes\UUIDValue;
use Monopage\Languages\Attributes\LocaleValue;

class Language implements EntityInterface
{
    protected UUIDValue $uuid;
    protected StringValue $title;
    protected AliasValue $alias;
    protected LocaleValue $locale;
    protected DateTimeValue $dateTimeCreated;
    protected DateTimeValue $dateTimeEdited;

    public function __construct(LocaleValue $locale, AliasValue $alias, StringValue $title)
    {
        $this->setLocale($locale);
        $this->setAlias($alias);
        $this->setTitle($title);
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

    public function getLocale(): LocaleValue
    {
        return $this->locale;
    }

    public function setLocale(LocaleValue $locale): self
    {
        $this->locale = $locale;

        return $this;
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
