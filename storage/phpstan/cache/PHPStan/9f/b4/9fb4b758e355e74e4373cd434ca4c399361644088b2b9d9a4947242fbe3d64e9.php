<?php declare(strict_types = 1);

// odsl-C:\Users\ekaga\OneDrive\Documents\Code\K-3Repo\supply-service-be\app\Console\Commands\ResyncStoreLocationMaterialAddressesCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\ResyncStoreLocationMaterialAddressesCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.31-3e2ff127b5f8affe8edcb2be9cedcf94cf305d2d1487b6e1293b14ddafa13410',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/app/Console/Commands/ResyncStoreLocationMaterialAddressesCommand.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
    'shortName' => 'ResyncStoreLocationMaterialAddressesCommand',
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
    'endLine' => 122,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'signature' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'implementingClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'stores:resync-material-addresses
        {--dry-run : Show what would be updated without saving}
        {--material= : Limit to one material type}
        {--store-location-id= : Limit sync to one store location id}\'',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 15,
            'startTokenPos' => 43,
            'startFilePos' => 285,
            'endTokenPos' => 43,
            'endFilePos' => 502,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 70,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'implementingClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Resync material store/address snapshots from linked store locations.\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 52,
            'startFilePos' => 535,
            'endTokenPos' => 52,
            'endFilePos' => 604,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 100,
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
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'implementingClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'currentClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'aliasName' => NULL,
      ),
      'resyncForModel' => 
      array (
        'name' => 'resyncForModel',
        'parameters' => 
        array (
          'modelClass' => 
          array (
            'name' => 'modelClass',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 37,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dryRun' => 
          array (
            'name' => 'dryRun',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'storeLocationId' => 
          array (
            'name' => 'storeLocationId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 71,
            'endColumn' => 90,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  class-string<Model>  $modelClass
 * @return array<string,int>
 */',
        'startLine' => 71,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'implementingClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
        'currentClassName' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
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