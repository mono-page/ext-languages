<?php declare(strict_types=1);

namespace Monopage\Languages\Repositories\Interfaces;

use Doctrine\Common\Collections\Criteria;
use Generator;
use Monopage\Contracts\RepositoryInterface;
use Monopage\Languages\Entities\LanguagePackage;

interface LanguagePackageRepositoryInterface extends RepositoryInterface
{
    public function get($id): ?LanguagePackage;

    public function add(LanguagePackage $package): void;

    public function update(LanguagePackage $package): void;

    public function remove(LanguagePackage $package): void;

    /**
     * @param Criteria $criteria
     *
     * @return Generator|LanguagePackage[]
     */
    public function match(Criteria $criteria): Generator;
}
