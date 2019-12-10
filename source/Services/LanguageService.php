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

    public function deleteLanguage(LanguageInterface $language): bool
    {
        $this->languages->remove($language);
    }

    public function createPackage(LanguagePackageInterface $language): LanguagePackageInterface
    {
        // TODO: Implement createPackage() method.
    }

    public function deletePackage(LanguagePackageInterface $package): bool
    {
        $this->packages->remove($package);
    }

    public function addLanguageToPackage(LanguagePackageInterface $package, LanguageInterface $language): bool
    {
        $package->addLanguage($language);

        $this->packages->update($package);
    }

    public function removeLanguageFromPackage(LanguagePackageInterface $package, LanguageInterface $language): bool
    {
        $package->removeLanguage($language);

        $this->packages->update($package);
    }

    public function setPackageDefaultLanguage(LanguagePackageInterface $package, LanguageInterface $language): bool
    {
        $package->addLanguage($language);
        $package->setDefaultLanguage($language);

        $this->packages->update($package);
    }
}
