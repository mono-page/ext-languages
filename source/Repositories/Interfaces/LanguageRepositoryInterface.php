<?php declare(strict_types=1);

namespace Monopage\Languages\Repositories\Interfaces;

use Doctrine\Common\Collections\Criteria;
use Iterator;
use Monopage\Contracts\RepositoryInterface;
use Monopage\Languages\Entities\Language;

interface LanguageRepositoryInterface extends RepositoryInterface
{
    public function get($id): ?Language;

    public function add(Language $language): void;

    public function update(Language $language): void;

    public function remove(Language $language): void;

    /**
     * @param Criteria $criteria
     *
     * @return Iterator|Language[]
     */
    public function match(Criteria $criteria): Iterator;
}
