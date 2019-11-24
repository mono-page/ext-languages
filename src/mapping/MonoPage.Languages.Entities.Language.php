<?php declare(strict_types=1);

use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;
use Doctrine\ORM\Mapping\ClassMetadata;
use MonoPage\Languages\Entities\Language;

/**
 * @var ClassMetadata $metadata
 *
 * @see Language
 */

$builder = new ClassMetadataBuilder($metadata);
$builder->createField('id', 'integer')
    ->makePrimaryKey()
    ->generatedValue()
    ->nullable(false)
    ->build();
$builder->createField('alias', 'string')
    ->nullable(false)
    ->unique(true)
    ->length(50)
    ->build();
$builder->createField('selfTitle', 'string')
    ->nullable(false)
    ->length(50)
    ->build();
