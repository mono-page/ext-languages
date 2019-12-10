<?php declare(strict_types=1);

namespace MonoPage\Languages\Services;

use MonoPage\Languages\Entities\Interfaces\LanguageInterface;
use MonoPage\Languages\Entities\Interfaces\LanguagePackageInterface;
use MonoPage\Languages\Repositories\Interfaces\LanguagePackageRepositoryInterface;
use MonoPage\Languages\Repositories\Interfaces\LanguageRepositoryInterface;
use MonoPage\Languages\Services\Interfaces\LanguageServiceInterface;

class LanguageService implements LanguageServiceInterface
{
    protected LanguageRepositoryInterface $languages;
    protected LanguagePackageRepositoryInterface $packages;

    public function __construct(
        LanguageRepositoryInterface $languages,
        LanguagePackageRepositoryInterface $packages
    ) {
        $this->languages = $languages;
        $this->packages = $packages;
    }

    public function createLanguage(string $selfTitle, string $locale): LanguageInterface
    {
        // TODO: Implement createLanguage() method.
    }

    public function deleteLanguage(LanguageInterface $language): void
    {
        // TODO: Implement deleteLanguage() method.
    }

    public function createPackage(LanguageInterface $language): LanguagePackageInterface
    {
        // TODO: Implement createPackage() method.
    }

    public function deletePackage(LanguagePackageInterface $package): void
    {
        // TODO: Implement deletePackage() method.
    }

    public function addLanguageToPackage(LanguagePackageInterface $package, LanguageInterface $language): void
    {
        // TODO: Implement addLanguageToPackage() method.
    }

    public function removeLanguageFromPackage(LanguagePackageInterface $package, LanguageInterface $language): void
    {
        // TODO: Implement removeLanguageFromPackage() method.
    }

    public function setDefaultLanguage(LanguagePackageInterface $package, LanguageInterface $language): void
    {
        // TODO: Implement setDefaultLanguage() method.
    }
}
