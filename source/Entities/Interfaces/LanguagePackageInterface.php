<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities\Interfaces;

use MonoPage\Core\Interfaces\EntityInterface;

interface LanguagePackageInterface extends EntityInterface
{
    public function getId(): string;

    /**
     * @return LanguageInterface[]
     */
    public function getLanguages(): array;

    public function getDefaultLanguage(): LanguageInterface;

    public function getLanguageCount(): int;
}
