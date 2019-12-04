<?php declare(strict_types=1);

use Doctrine\ORM\EntityManager;
use MonoPage\Languages\Entities\Language;

/** @var EntityManager $em */
$em = require __DIR__ . '/bootstrap.php';
$repo = $em->getRepository(Language::class);


$language = new Language('1', 'russian', 'Русский');
$em->persist($language);
$language = new Language('2', 'english', 'English');
$em->persist($language);
$em->flush();

# Реализовать IdValue
# Реализовать репозиторий
# Решить проблнему хранения LocaleValue
