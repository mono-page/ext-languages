<?php declare(strict_types=1);

namespace MonoPage\Languages\Values;

use LogicException;
use MonoPage\Domain\Interfaces\ValueObject;

/**
 * Class LocaleValue
 *
 * @see https://en.wikipedia.org/wiki/Locale_(computer_software)
 */
class LocaleValue implements ValueObject
{
    /**
     * @var string
     */
    protected string $language;
    /**
     * @var string
     */
    protected string $territory;

    /**
     * @param string $language
     * @param string $territory
     */
    public function __construct(string $language, string $territory)
    {
        if (strlen($language) !== 2) {
            throw new LogicException('The $language segment must have two characters');
        }
        if (strlen($territory) !== 2) {
            throw new LogicException('The $territory segment must have two characters');
        }

        $this->language = strtolower($language);
        $this->territory = strtoupper($territory);
    }

    /**
     * @return string
     */
    public function getLanguageSegment(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getTerritorySegment(): string
    {
        return $this->territory;
    }

    /**
     * @return string
     */
    public function getLocaleString(): string
    {
        return sprintf('%s_%s', $this->language, $this->territory);
    }
}
