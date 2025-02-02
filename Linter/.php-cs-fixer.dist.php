<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
->in(__DIR__)
->name('*.php');

return (new Config())
->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_unused_imports' => true,
    'single_quote' => true,
])
->setFinder($finder);
