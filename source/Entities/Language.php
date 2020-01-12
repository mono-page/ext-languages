<?php declare(strict_types=1);

namespace Monopage\Languages\Entities;

use Monopage\Contracts\EntityInterface;
use Monopage\Properties\AliasProperty;
use Monopage\Properties\LocaleProperty;
use Monopage\Properties\StringProperty;
use Monopage\Properties\UuidProperty;

class Language implements EntityInterface
{
    protected UuidProperty $uuid;
    protected StringProperty $title;
    protected AliasProperty $alias;
    protected LocaleProperty $locale;
    //protected DateTimeValue $dateTimeCreated;
    //protected DateTimeValue $dateTimeEdited;

    public function __construct(LocaleProperty $locale, AliasProperty $alias, StringProperty $title)
    {
        $this->setLocale($locale);
        $this->setAlias($alias);
        $this->setTitle($title);
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

    public function getLocale(): LocaleProperty
    {
        return $this->locale;
    }

    public function setLocale(LocaleProperty $locale): self
    {
        $this->locale = $locale;

        return $this;
    }
}
