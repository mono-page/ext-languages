<?php declare(strict_types=1);

namespace MonoPage\Languages\Interfaces;

use MonoPage\Domain\Interfaces\EntityObject;

/**
 * Class PackageOfLanguagesInterface
 */
interface PackageOfLanguagesInterface extends EntityObject
{
    /**
     * @return string
     */
    public function getAlias(): string;

    /**
     * @return array
     */
    public function getLanguages(): array;

    /**
     * @return int
     */
    public function getLanguageCount(): int;

    /**
     * @return LanguageInterface
     */
    public function getDefaultLanguage(): LanguageInterface;
}
