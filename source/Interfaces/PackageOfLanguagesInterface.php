<?php declare(strict_types=1);

namespace MonoPage\Languages\Interfaces;

use MonoPage\Core\Domain\Interfaces\EntityObject;

interface PackageOfLanguagesInterface extends EntityObject
{
    public function getId(): string;

    public function getAlias(): string;

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages(): array;

    public function getLanguageCount(): int;

    public function getLanguageDefault(): LanguageInterface;
}
