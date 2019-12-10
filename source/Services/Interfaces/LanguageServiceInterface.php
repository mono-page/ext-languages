<?php declare(strict_types=1);

namespace MonoPage\Languages\Services\Interfaces;

use MonoPage\Core\Interfaces\ServiceInterface;
use MonoPage\Languages\Entities\Interfaces\LanguageInterface;
use MonoPage\Languages\Entities\Interfaces\LanguagePackageInterface;

interface LanguageServiceInterface extends ServiceInterface
{
    public function createLanguage(string $selfTitle, string $locale): LanguageInterface;

    public function deleteLanguage(LanguageInterface $language): void;

    public function createPackage(LanguageInterface $language): LanguagePackageInterface;

    public function deletePackage(LanguagePackageInterface $package): void;

    public function addLanguageToPackage(LanguagePackageInterface $package, LanguageInterface $language): void;

    public function removeLanguageFromPackage(LanguagePackageInterface $package, LanguageInterface $language): void;

    public function setDefaultLanguage(LanguagePackageInterface $package, LanguageInterface $language): void;
}
