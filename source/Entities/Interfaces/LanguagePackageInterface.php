<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities\Interfaces;

use MonoPage\Core\Interfaces\EntityObjectInterface;

interface LanguagePackageInterface extends EntityObjectInterface
{
    public function getId(): string;

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages(): array;

    public function getDefaultLanguage(): LanguageInterface;

    public function getLanguageCount(): int;
}
