<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities;

use MonoPage\Languages\Entities\Interfaces\LanguageInterface;
use MonoPage\Languages\Entities\Interfaces\LanguagePackageInterface;

class LanguagePackage implements LanguagePackageInterface
{
    protected string $id;
    protected array $languages = [];
    protected LanguageInterface $default;

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function getDefaultLanguage(): LanguageInterface
    {
        return $this->default;
    }

    public function getLanguageCount(): int
    {
        return count($this->languages);
    }
}
