<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities;

use MonoPage\Languages\Entities\Interfaces\LanguageInterface;

class Language implements LanguageInterface
{
    protected string $id;
    protected string $selfTitle;
    protected string $locale;

    public function getId(): string
    {
        return $this->id;
    }

    public function getSelfTitle(): string
    {
        return $this->selfTitle;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }
}
