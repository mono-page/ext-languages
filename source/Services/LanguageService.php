<?php declare(strict_types=1);

namespace Monopage\Languages\Services;

use Monopage\Languages\Repositories\Interfaces\LanguagePackageRepositoryInterface;
use Monopage\Languages\Repositories\Interfaces\LanguageRepositoryInterface;
use Monopage\Languages\Services\Interfaces\LanguageServiceInterface;

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

    # todo
}
