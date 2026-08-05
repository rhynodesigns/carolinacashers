<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\SafeDeclareStrictTypesRector;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/database',
        __DIR__.'/tests',
        __DIR__.'/routes',
        __DIR__.'/config',
    ])
    ->withSkipPath(__DIR__.'/resources/views')
    // strict_types is never added retroactively (CLAUDE.md); adoption is a manual per-file decision
    ->withSkip([
        SafeDeclareStrictTypesRector::class,
    ])
    ->withPhpSets(php83: true)
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
    )
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_130,
    ]);
