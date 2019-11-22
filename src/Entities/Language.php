<?php declare(strict_types=1);

namespace MonoPage\Languages\Entities;

use MonoPage\Languages\Interfaces\LanguageInterface;
use MonoPage\Languages\Values\LocaleValue;

use Doctrine\ORM\Mapping as ORM;

class Language implements LanguageInterface
{
    protected string $alias;
    protected string $selfTitle;
    //protected LocaleValue $locale;

    /**
     * @param string $alias
     * @param string $selfTitle
     * @param LocaleValue $locale
     */
    public function __construct(string $alias, string $selfTitle/*, LocaleValue $locale*/)
    {
        $this->alias = $alias;
        $this->selfTitle = $selfTitle;
        //$this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getSelfTitle(): string
    {
        return $this->selfTitle;
    }

//    /**
//     * @return LocaleValue
//     */
//    public function getLocale(): LocaleValue
//    {
//        return $this->locale;
//    }
//
//    /**
//     * @return string
//     */
//    public function getLocaleString(): string
//    {
//        return $this->locale->getLocaleString();
//    }
}
