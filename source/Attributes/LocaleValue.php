<?php declare(strict_types=1);

namespace Monopage\Languages\Attributes;

use Monopage\Contracts\StringableInterface;
use Monopage\Contracts\ValueObjectInterface;
use Monopage\Domain\Attributes\Exceptions\InvalidAttributeValueException;

class LocaleValue implements ValueObjectInterface, StringableInterface
{
    protected string $languageSegment;
    protected string $territorySegment;

    public function __construct(string $language, string $territory = '')
    {
        $this->setLanguageSegment($language);
        $this->setTerritorySegment($territory);
    }

    public function __toString(): string
    {
        return $this->getLocaleString();
    }

    public function getLocaleString(): string
    {
        return sprintf(
            '%s%s',
            $this->languageSegment,
            $this->territorySegment ? "-{$this->territorySegment}" : ''
        );
    }

    public function getLanguageSegment(): string
    {
        return $this->languageSegment;
    }

    public function setLanguageSegment(string $language): self
    {
        if (!preg_match('/^[a-z]{2}$/', $language)) {
            throw new InvalidAttributeValueException(sprintf(
                'Segment "%s" in "%s" attribute can only consist of two lowercase Latin letters',
                'language',
                self::class
            ));
        }

        $this->languageSegment = $language;

        return $this;
    }

    public function getTerritorySegment(): string
    {
        return $this->territorySegment;
    }

    public function setTerritorySegment(string $territory): self
    {
        if ('' === $territory) {
            $this->territorySegment = $territory;

            return $this;
        }

        if (!preg_match('/^[A-Z]{2}$/', $territory)) {
            throw new InvalidAttributeValueException(sprintf(
                'Segment "%s" in "%s" attribute can only consist of two capital Latin letters',
                'territory',
                self::class
            ));
        }

        $this->territorySegment = $territory;

        return $this;
    }
}
