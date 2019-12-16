<?php declare(strict_types=1);

namespace Monopage\Languages\Services\Interfaces;

use Monopage\Contracts\ServiceInterface;
use Monopage\Domain\Attributes\AliasValue;
use Monopage\Domain\Attributes\StringValue;
use Monopage\Languages\Attributes\LocaleValue;
use Monopage\Languages\Entities\Language;
use Monopage\Languages\Entities\LanguagePackage;

interface LanguageServiceInterface extends ServiceInterface
{
    public function createLanguage(LocaleValue $locale, AliasValue $alias, StringValue $title): ?Language;

    public function updateLanguage(Language $language): void;

    public function deleteLanguage(Language $language): void;

    public function createPackage(AliasValue $alias, StringValue $title, Language $language): ?LanguagePackage;

    public function updatePackage(LanguagePackage $package): void;

    public function deletePackage(LanguagePackage $package): void;
}
