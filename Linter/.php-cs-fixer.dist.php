<?php

$finder = PhpCsFixer\Finder::create()
->in(__DIR__) // Change this to match your project directories
->name('*.php');

return (new PhpCsFixer\Config())
->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_unused_imports' => true,
    'single_quote' => true,
])
->setFinder($finder);
