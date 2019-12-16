<?php declare(strict_types=1);

namespace Monopage\Languages\Services;

use Monopage\Domain\Attributes\AliasValue;
use Monopage\Domain\Attributes\StringValue;
use Monopage\Languages\Attributes\LocaleValue;
use Monopage\Languages\Entities\Language;
use Monopage\Languages\Entities\LanguagePackage;
use Monopage\Languages\Repositories\Interfaces\LanguagePackageRepositoryInterface;
use Monopage\Languages\Repositories\Interfaces\LanguageRepositoryInterface;
use Monopage\Languages\Services\Interfaces\LanguageServiceInterface;

class LanguageService implements LanguageServiceInterface # todo грубо, первая реализация
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

    public function createLanguage(LocaleValue $locale, AliasValue $alias, StringValue $title): ?Language
    {
        $language = new Language($locale, $alias, $title);
        $this->languages->add($language);

        return $language;
    }

    public function updateLanguage(Language $language): void
    {
        $this->languages->update($language);
    }

    public function deleteLanguage(Language $language): void
    {
        $this->languages->remove($language);
    }

    public function createPackage(AliasValue $alias, StringValue $title, Language $language): ?LanguagePackage
    {
        $package = new LanguagePackage($alias, $title, $language);
        $this->packages->add($package);

        return $package;
    }

    public function updatePackage(LanguagePackage $package): void
    {
        $this->packages->update($package);
    }

    public function deletePackage(LanguagePackage $package): void
    {
        $this->packages->remove($package);
    }
}
