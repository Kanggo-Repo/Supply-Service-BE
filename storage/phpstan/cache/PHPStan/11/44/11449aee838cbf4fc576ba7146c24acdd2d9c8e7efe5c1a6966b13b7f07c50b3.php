<?php declare(strict_types = 1);

// odsl-C:\Users\ekaga\OneDrive\Documents\Code\K-3Repo\supply-service-be\app\Models\Sand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Sand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.31-b0de2b48d0369159d29f0988d864349aeee584ee5b59d2a4ec6bef0bd52269d5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Sand',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/app/Models/Sand.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\Sand',
    'shortName' => 'Sand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Models\\SupplyMaterial',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'COMPARISON_DECIMALS' => 
      array (
        'declaringClassName' => 'App\\Models\\Sand',
        'implementingClassName' => 'App\\Models\\Sand',
        'name' => 'COMPARISON_DECIMALS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 32,
            'startFilePos' => 231,
            'endTokenPos' => 32,
            'endFilePos' => 231,
          ),
        ),
        'docComment' => '/**
 * Stored decimals for comparison_price_per_m3 (column is decimal(15, 2)).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'App\\Models\\Sand',
        'implementingClassName' => 'App\\Models\\Sand',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'sands\'',
          'attributes' => 
          array (
            'startLine' => 14,
            'endLine' => 14,
            'startTokenPos' => 41,
            'startFilePos' => 258,
            'endTokenPos' => 41,
            'endFilePos' => 264,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'booted' => 
      array (
        'name' => 'booted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 16,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Sand',
        'implementingClassName' => 'App\\Models\\Sand',
        'currentClassName' => 'App\\Models\\Sand',
        'aliasName' => NULL,
      ),
      'recomputeComparison' => 
      array (
        'name' => 'recomputeComparison',
        'parameters' => 
        array (
          'price' => 
          array (
            'name' => 'price',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'volume' => 
          array (
            'name' => 'volume',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 62,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Comparison price per m3 is, by definition, package price divided by
 * package volume. Returns null when it cannot be derived (no price or
 * non-positive volume) so callers leave the existing value untouched.
 */',
        'startLine' => 35,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Sand',
        'implementingClassName' => 'App\\Models\\Sand',
        'currentClassName' => 'App\\Models\\Sand',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));