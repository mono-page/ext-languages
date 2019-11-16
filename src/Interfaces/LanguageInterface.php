<?php declare(strict_types=1);

namespace MonoPage\Languages\Interfaces;

use MonoPage\Domain\Interfaces\EntityObject;
use MonoPage\Languages\Values\LocaleValue;

/**
* Interface LanguageInterface
 */
interface LanguageInterface extends EntityObject
{
    /**
     * @return string
     */
    public function getSelfTitle(): string;

    /**
     * @return string
     */
    public function getAlias(): string;

    /**
     * @return LocaleValue
     */
    public function getLocale(): LocaleValue;

    /**
     * @return string
     */
    public function getLocaleString(): string;
}
