<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities;

use MonoPage\Languages\Interfaces\LanguageInterface;
use MonoPage\Languages\Values\LocaleValue;

class Language implements LanguageInterface
{
    protected string $id;

    protected string $alias;

    protected string $selfTitle;

    //protected LocaleValue $locale;

    private function __construct(string $id, string $alias, string $selfTitle)
    {
        $this->id = $id;
        $this->alias = $alias;
        $this->selfTitle = $selfTitle;
        // todo $localeValue
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    public function getSelfTitle(): string
    {
        return $this->selfTitle;
    }

    //public function getLocale(): LocaleValue
    //{
    //    return $this->locale;
    //}
}
