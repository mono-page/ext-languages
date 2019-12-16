<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

use Monopage\Domain\Attributes\AliasValue;
use Monopage\Languages\Entities\Language;

//use Doctrine\Common\Collections\Criteria;
//use Doctrine\ORM\EntityManager;
//use Monopage\Languages\Entities\Language;

///** @var EntityManager $em */
//$em = require __DIR__ . '/bootstrap.php';
//$repo = $em->getRepository(Language::class);


//$language = new Language('1', 'russian', 'Русский');
//$em->persist($language);
//$language = new Language('2', 'english', 'English');
//$em->persist($language);
//$em->flush();

# Реализовать IdValue
# Реализовать репозиторий
# Решить проблнему хранения LocaleValue

//$criteria = Criteria::create()
//    ->where(Criteria::expr()->eq("birthday", "1982-02-17"))
//    ->orderBy(array("username" => Criteria::ASC))
//    ->setFirstResult(0)
//    ->setMaxResults(20);


(new Language())->setTitle(new AliasValue('alias'))->getTitle();
