<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities\Interfaces;

use MonoPage\Core\Interfaces\EntityObjectInterface;

interface LanguageInterface extends EntityObjectInterface
{
    public function getId(): string;

    public function getSelfTitle(): string;

    public function getLocale(): string;
}
