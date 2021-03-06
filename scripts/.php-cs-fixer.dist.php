<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
	->setUsingCache(false)
	->setRules([
        '@Symfony' => true,
        '@PSR2' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'mb_str_functions' => true,
        'no_php4_constructor' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'not_operator_with_successor_space' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => ['sort_algorithm' => 'length'],
        'php_unit_strict' => true,
        'phpdoc_order' => true,
        'strict_comparison' => true,
        'strict_param' => true,
		'is_null' => false,
        'global_namespace_import' => [
          // 'import_classes' => true,
          'import_constants' => true,
          'import_functions' => true
        ]	
	]);
