<?php declare(strict_types=1);

namespace MonoPage\Languages\Services\Interfaces;

use MonoPage\Core\Interfaces\ServiceInterface;
use MonoPage\Languages\Entities\Interfaces\LanguageInterface;
use MonoPage\Languages\Entities\Interfaces\LanguagePackageInterface;

interface LanguageServiceInterface extends ServiceInterface
{
    public function createLanguage(string $selfTitle, string $locale): LanguageInterface;

    public function deleteLanguage(LanguageInterface $language): bool;

    public function createPackage(LanguagePackageInterface $package): LanguagePackageInterface;

    public function deletePackage(LanguagePackageInterface $package): bool;

    public function addLanguageToPackage(LanguagePackageInterface $package, LanguageInterface $language): bool;

    public function removeLanguageFromPackage(LanguagePackageInterface $package, LanguageInterface $language): bool;

    public function setPackageDefaultLanguage(LanguagePackageInterface $package, LanguageInterface $language): bool;
}
