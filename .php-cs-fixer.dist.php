<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = new Finder()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

return (new Config())
    ->setRiskyAllowed(true)
    ->setCacheFile(__DIR__ . '/var/cache/php-cs-fixer/.php-cs-fixer.cache')
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true,

        // Short arrays []
        'array_syntax' => ['syntax' => 'short'],
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],

        // Strict types oben in jeder Datei
        'declare_strict_types' => true,

        // Importe optimieren
        'no_unused_imports' => true,
        'ordered_imports' => true,

        // Sauberer Code
        'single_quote' => true,
        'no_extra_blank_lines' => true,
        'no_trailing_whitespace' => true,
        'blank_line_after_opening_tag' => true,
        'no_empty_statement' => true,
        'no_useless_return' => true,
        'no_useless_else' => true,

        // Methoden u. Klassen sortieren
        'ordered_class_elements' => true,

        // Klassische Defaults
        'binary_operator_spaces' => ['default' => 'single_space'],

        // Strikte Vergleiche
        'strict_param' => true,
        'strict_comparison' => true,
    ])
;
