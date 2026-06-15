<?php declare(strict_types = 1);

// osfsl-C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../spatie/laravel-health/src/ResultStores/InMemoryHealthResultStore.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\Health\ResultStores\InMemoryHealthResultStore
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4ad39edfda4fb0489acff9719c460c0029e32ce8cb587193e7f50f98054e87ba-8.3.31-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../spatie/laravel-health/src/ResultStores/InMemoryHealthResultStore.php',
      ),
    ),
    'namespace' => 'Spatie\\Health\\ResultStores',
    'name' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
    'shortName' => 'InMemoryHealthResultStore',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 38,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Spatie\\Health\\ResultStores\\ResultStore',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'storedCheckResults' => 
      array (
        'declaringClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'implementingClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'name' => 'storedCheckResults',
        'modifiers' => 18,
        'type' => 
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
                  'name' => 'Spatie\\Health\\ResultStores\\StoredCheckResults\\StoredCheckResults',
                  'isIdentifier' => false,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 48,
            'startFilePos' => 374,
            'endTokenPos' => 48,
            'endFilePos' => 377,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 68,
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
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
          'checkResults' => 
          array (
            'name' => 'checkResults',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 14,
            'endLine' => 14,
            'startColumn' => 26,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
        'startLine' => 14,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Health\\ResultStores',
        'declaringClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'implementingClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'currentClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'aliasName' => NULL,
      ),
      'latestResults' => 
      array (
        'name' => 'latestResults',
        'parameters' => 
        array (
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
                  'name' => 'Spatie\\Health\\ResultStores\\StoredCheckResults\\StoredCheckResults',
                  'isIdentifier' => false,
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
        'docComment' => NULL,
        'startLine' => 34,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\Health\\ResultStores',
        'declaringClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'implementingClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
        'currentClassName' => 'Spatie\\Health\\ResultStores\\InMemoryHealthResultStore',
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