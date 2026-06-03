<?php declare(strict_types = 1);

// odsl-C:\Users\ekaga\OneDrive\Documents\Code\K-3Repo\supply-service-be\app\Models\SupplyMaterial.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\SupplyMaterial
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.5.4-6d8087bb09a886882e9bf2a35304526db9a3d4ed7fbcd8513272ea9537513a2a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\SupplyMaterial',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/app/Models/SupplyMaterial.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\SupplyMaterial',
    'shortName' => 'SupplyMaterial',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\'material_name\', \'cement_name\', \'sand_name\', \'cat_name\', \'nat_name\', \'photo\', \'brand\', \'type\', \'sub_brand\', \'color\', \'color_code\', \'color_name\', \'code\', \'form\', \'package_unit\', \'package_weight_gross\', \'package_weight_net\', \'package_weight\', \'package_content\', \'package_volume\', \'package_type\', \'packaging\', \'pieces_per_package\', \'coverage_per_package\', \'volume\', \'volume_unit\', \'dimension_length\', \'dimension_length_mm\', \'dimension_width\', \'dimension_height\', \'dimension_thickness\', \'dimension_body_diameter\', \'dimension_head_diameter\', \'surface\', \'quality\', \'term\', \'store\', \'address\', \'short_address\', \'price_per_piece\', \'price_per_package\', \'package_price\', \'purchase_price\', \'price_unit\', \'comparison_price_per_kg\', \'comparison_price_per_m2\', \'comparison_price_per_m\', \'comparison_price\', \'comparison_price_per_m3\', \'material_kind\', \'mesiu_code\', \'mesiu_size\', \'mesiu_content\', \'paku_code\', \'paku_size\', \'paku_content\', \'store_location_id\', \'deleted_by\']',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 73,
              'startTokenPos' => 50,
              'startFilePos' => 447,
              'endTokenPos' => 226,
              'endFilePos' => 1640,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 14,
    'endLine' => 125,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
      2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      3 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'casts' => 
      array (
        'name' => 'casts',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SupplyMaterial',
        'implementingClassName' => 'App\\Models\\SupplyMaterial',
        'currentClassName' => 'App\\Models\\SupplyMaterial',
        'aliasName' => NULL,
      ),
      'storeLocation' => 
      array (
        'name' => 'storeLocation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 111,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SupplyMaterial',
        'implementingClassName' => 'App\\Models\\SupplyMaterial',
        'currentClassName' => 'App\\Models\\SupplyMaterial',
        'aliasName' => NULL,
      ),
      'deletedBy' => 
      array (
        'name' => 'deletedBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 116,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SupplyMaterial',
        'implementingClassName' => 'App\\Models\\SupplyMaterial',
        'currentClassName' => 'App\\Models\\SupplyMaterial',
        'aliasName' => NULL,
      ),
      'materialAvailabilities' => 
      array (
        'name' => 'materialAvailabilities',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 121,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SupplyMaterial',
        'implementingClassName' => 'App\\Models\\SupplyMaterial',
        'currentClassName' => 'App\\Models\\SupplyMaterial',
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