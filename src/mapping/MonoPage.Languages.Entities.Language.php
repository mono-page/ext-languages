<?php /** @noinspection PhpUnhandledExceptionInspection */

use Doctrine\ORM\Mapping\ClassMetadata;

/**
 * @var ClassMetadata $metadata
 */

$metadata->mapField(array(
    'id' => true,
    'fieldName' => 'alias',
    'type' => 'integer'
));

$metadata->mapField(array(
    'fieldName' => 'selfTitle',
    'type' => 'string',
    'options' => array(
        'fixed' => true,
        'comment' => "User's login name"
    )
));

//$metadata->mapField(array(
//    'fieldName' => 'login_count',
//    'type' => 'integer',
//    'nullable' => false,
//    'options' => array(
//        'unsigned' => true,
//        'default' => 0
//    )
//));
