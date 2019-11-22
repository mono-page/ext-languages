<?php

use Doctrine\Common\Persistence\Mapping\Driver\PHPDriver;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
//$isDevMode = true;
//$proxyDir = null;
//$cache = null;
//$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . '/src/Entities'],
    true,
    null,
    null,
    false
);
$driver = new PHPDriver(__DIR__ . '/src/mapping');

$config->setMetadataDriverImpl($driver);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
// database configuration parameters
$connection = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
];

// obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);
