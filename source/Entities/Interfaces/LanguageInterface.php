<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities\Interfaces;

use MonoPage\Core\Interfaces\EntityInterface;

interface LanguageInterface extends EntityInterface
{
    public function getId(): string;

    public function getSelfTitle(): string;

    public function getLocale(): string;
}
