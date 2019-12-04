<?php declare(strict_types=1);

namespace MonoPage\Languages\Interfaces;

use MonoPage\Core\Domain\Interfaces\EntityObject;
use MonoPage\Languages\Values\LocaleValue;

interface LanguageInterface extends EntityObject
{
    public function getId(): string;

    public function getAlias(): string;

    public function getSelfTitle(): string;

    //public function getLocale(): LocaleValue;
}
