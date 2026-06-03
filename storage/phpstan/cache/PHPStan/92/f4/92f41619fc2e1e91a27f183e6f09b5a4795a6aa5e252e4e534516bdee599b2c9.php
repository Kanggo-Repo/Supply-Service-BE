<?php declare(strict_types = 1);

// osfsl-C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Query\Builder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-28bf0f1aaf15a954beb4576b80f4a6c1fefbfa98df407c4117be211e5aa7d15d-8.5.4-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Query\\Builder',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Builder.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Query',
    'name' => 'Illuminate\\Database\\Query\\Builder',
    'shortName' => 'Builder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 4944,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Database\\Query\\Builder',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
      1 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
      2 => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
      3 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
      4 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connection' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'connection',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database connection instance.
 *
 * @var \\Illuminate\\Database\\ConnectionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'grammar' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'grammar',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database query grammar instance.
 *
 * @var \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'processor' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'processor',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database query post processor instance.
 *
 * @var \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bindings' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'bindings',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'select\' => [], \'from\' => [], \'join\' => [], \'where\' => [], \'groupBy\' => [], \'having\' => [], \'order\' => [], \'union\' => [], \'unionOrder\' => []]',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 90,
            'startTokenPos' => 239,
            'startFilePos' => 2309,
            'endTokenPos' => 313,
            'endFilePos' => 2529,
          ),
        ),
        'docComment' => '/**
 * The current query value bindings.
 *
 * @var array{
 *     select: list<mixed>,
 *     from: list<mixed>,
 *     join: list<mixed>,
 *     where: list<mixed>,
 *     groupBy: list<mixed>,
 *     having: list<mixed>,
 *     order: list<mixed>,
 *     union: list<mixed>,
 *     unionOrder: list<mixed>,
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'aggregate' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'aggregate',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An aggregate function and column to be run.
 *
 * @var array{
 *     function: string,
 *     columns: array<\\Illuminate\\Contracts\\Database\\Query\\Expression|string>
 * }|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'columns' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'columns',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The columns that should be returned.
 *
 * @var array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'distinct' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'distinct',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 116,
            'endLine' => 116,
            'startTokenPos' => 338,
            'startFilePos' => 3141,
            'endTokenPos' => 338,
            'endFilePos' => 3145,
          ),
        ),
        'docComment' => '/**
 * Indicates if the query returns distinct results.
 *
 * Occasionally contains the columns that should be distinct.
 *
 * @var bool|array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'from' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'from',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table which the query is targeting.
 *
 * @var \\Illuminate\\Database\\Query\\Expression|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'indexHint' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'indexHint',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The index hint for the query.
 *
 * @var \\Illuminate\\Database\\Query\\IndexHint|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 130,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'joins' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'joins',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table joins for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wheres' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'wheres',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 144,
            'endLine' => 144,
            'startTokenPos' => 370,
            'startFilePos' => 3643,
            'endTokenPos' => 371,
            'endFilePos' => 3644,
          ),
        ),
        'docComment' => '/**
 * The where constraints for the query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groups' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'groups',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The groupings for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'havings' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'havings',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The having constraints for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'orders' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'orders',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The orderings for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 165,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'limit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'limit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of records to return.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groupLimit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'groupLimit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of records to return per group.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'offset' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'offset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of records to skip.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 186,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unions' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unions',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query union statements.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 193,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionLimit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionLimit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of union records to return.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionOffset' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionOffset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of union records to skip.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionOrders' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionOrders',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The orderings for the union query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 214,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lock' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'lock',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates whether row locking is being used.
 *
 * @var string|bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 221,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeout' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'timeout',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query execution timeout in seconds.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 228,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeQueryCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'beforeQueryCallbacks',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 235,
            'endLine' => 235,
            'startTokenPos' => 466,
            'startFilePos' => 5150,
            'endTokenPos' => 467,
            'endFilePos' => 5151,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be invoked before the query is executed.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 235,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterQueryCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'afterQueryCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 242,
            'endLine' => 242,
            'startTokenPos' => 478,
            'startFilePos' => 5318,
            'endTokenPos' => 479,
            'endFilePos' => 5319,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be invoked after retrieving data from the database.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 242,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'operators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'operators',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'=\', \'<\', \'>\', \'<=\', \'>=\', \'<>\', \'!=\', \'<=>\', \'like\', \'like binary\', \'not like\', \'ilike\', \'&\', \'|\', \'^\', \'<<\', \'>>\', \'&~\', \'is\', \'is not\', \'rlike\', \'not rlike\', \'regexp\', \'not regexp\', \'~\', \'~*\', \'!~\', \'!~*\', \'similar to\', \'not similar to\', \'not ilike\', \'~~*\', \'!~~*\']',
          'attributes' => 
          array (
            'startLine' => 249,
            'endLine' => 256,
            'startTokenPos' => 490,
            'startFilePos' => 5437,
            'endTokenPos' => 591,
            'endFilePos' => 5760,
          ),
        ),
        'docComment' => '/**
 * All of the available clause operators.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 249,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bitwiseOperators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'bitwiseOperators',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'&\', \'|\', \'^\', \'<<\', \'>>\', \'&~\']',
          'attributes' => 
          array (
            'startLine' => 263,
            'endLine' => 265,
            'startTokenPos' => 602,
            'startFilePos' => 5886,
            'endTokenPos' => 622,
            'endFilePos' => 5933,
          ),
        ),
        'docComment' => '/**
 * All of the available bitwise operators.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 263,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useWritePdo' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'useWritePdo',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 272,
            'endLine' => 272,
            'startTokenPos' => 633,
            'startFilePos' => 6051,
            'endTokenPos' => 633,
            'endFilePos' => 6055,
          ),
        ),
        'docComment' => '/**
 * Whether to use write pdo for the select.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 272,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fetchUsing' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'fetchUsing',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 279,
            'endLine' => 279,
            'startTokenPos' => 646,
            'startFilePos' => 6209,
            'endTokenPos' => 647,
            'endFilePos' => 6210,
          ),
        ),
        'docComment' => '/**
 * The custom arguments for the PDOStatement::fetchAll / fetch functions.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 279,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 34,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\ConnectionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 9,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'grammar' => 
          array (
            'name' => 'grammar',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 286,
                'endLine' => 286,
                'startTokenPos' => 671,
                'startFilePos' => 6376,
                'endTokenPos' => 671,
                'endFilePos' => 6379,
              ),
            ),
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
                      'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'processor' => 
          array (
            'name' => 'processor',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 287,
                'endLine' => 287,
                'startTokenPos' => 681,
                'startFilePos' => 6414,
                'endTokenPos' => 681,
                'endFilePos' => 6417,
              ),
            ),
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
                      'name' => 'Illuminate\\Database\\Query\\Processors\\Processor',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 9,
            'endColumn' => 36,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query builder instance.
 */',
        'startLine' => 284,
        'endLine' => 292,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'select' => 
      array (
        'name' => 'select',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 300,
                'endLine' => 300,
                'startTokenPos' => 747,
                'startFilePos' => 6771,
                'endTokenPos' => 749,
                'endFilePos' => 6775,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 300,
            'endLine' => 300,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the columns to be selected.
 *
 * @param  mixed  $columns
 * @return $this
 */',
        'startLine' => 300,
        'endLine' => 316,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectSub' => 
      array (
        'name' => 'selectSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 39,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subselect expression to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 327,
        'endLine' => 334,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectExpression' => 
      array (
        'name' => 'selectExpression',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 38,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 51,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a select expression to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|literal-string  $expression
 * @param  string  $as
 * @return $this
 */',
        'startLine' => 343,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectRaw' => 
      array (
        'name' => 'selectRaw',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 356,
                'endLine' => 356,
                'startTokenPos' => 1002,
                'startFilePos' => 8319,
                'endTokenPos' => 1003,
                'endFilePos' => 8320,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 44,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a new "raw" select expression to the query.
 *
 * @param  literal-string  $expression
 * @return $this
 */',
        'startLine' => 356,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'fromSub' => 
      array (
        'name' => 'fromSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 37,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Makes "from" fetch from a subquery.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 376,
        'endLine' => 381,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'fromRaw' => 
      array (
        'name' => 'fromRaw',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 29,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 390,
                'endLine' => 390,
                'startTokenPos' => 1125,
                'startFilePos' => 9200,
                'endTokenPos' => 1126,
                'endFilePos' => 9201,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "from" clause to the query.
 *
 * @param  literal-string  $expression
 * @param  mixed  $bindings
 * @return $this
 */',
        'startLine' => 390,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'createSub' => 
      array (
        'name' => 'createSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 405,
            'endLine' => 405,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a subquery and parse it.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return array
 */',
        'startLine' => 405,
        'endLine' => 417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'parseSub' => 
      array (
        'name' => 'parseSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 427,
            'endLine' => 427,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse the subquery into SQL and bindings.
 *
 * @param  mixed  $query
 * @return array
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 427,
        'endLine' => 440,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'prependDatabaseNameIfCrossDatabaseQuery' => 
      array (
        'name' => 'prependDatabaseNameIfCrossDatabaseQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 448,
            'endLine' => 448,
            'startColumn' => 64,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepend the database name if the given query is on another database.
 *
 * @param  mixed  $query
 * @return mixed
 */',
        'startLine' => 448,
        'endLine' => 460,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addSelect' => 
      array (
        'name' => 'addSelect',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 468,
            'endLine' => 468,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a new select column to the query.
 *
 * @param  mixed  $column
 * @return $this
 */',
        'startLine' => 468,
        'endLine' => 489,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectVectorDistance' => 
      array (
        'name' => 'selectVectorDistance',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 499,
            'endLine' => 499,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 499,
            'endLine' => 499,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 499,
                'endLine' => 499,
                'startTokenPos' => 1645,
                'startFilePos' => 12547,
                'endTokenPos' => 1645,
                'endFilePos' => 12550,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 499,
            'endLine' => 499,
            'startColumn' => 60,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector-similarity selection to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  string|null  $as
 * @return $this
 */',
        'startLine' => 499,
        'endLine' => 522,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'distinct' => 
      array (
        'name' => 'distinct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force the query to only return distinct results.
 *
 * @return $this
 */',
        'startLine' => 529,
        'endLine' => 540,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 549,
                'endLine' => 549,
                'startTokenPos' => 1899,
                'startFilePos' => 13917,
                'endTokenPos' => 1899,
                'endFilePos' => 13920,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the table which the query is targeting.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  string|null  $as
 * @return $this
 */',
        'startLine' => 549,
        'endLine' => 558,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'useIndex' => 
      array (
        'name' => 'useIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to suggest a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 566,
        'endLine' => 571,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forceIndex' => 
      array (
        'name' => 'forceIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 579,
            'endLine' => 579,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to force a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 579,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ignoreIndex' => 
      array (
        'name' => 'ignoreIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 592,
            'endLine' => 592,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to ignore a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 592,
        'endLine' => 597,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 610,
                'endLine' => 610,
                'startTokenPos' => 2093,
                'startFilePos' => 15373,
                'endTokenPos' => 2093,
                'endFilePos' => 15376,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 610,
                'endLine' => 610,
                'startTokenPos' => 2100,
                'startFilePos' => 15389,
                'endTokenPos' => 2100,
                'endFilePos' => 15392,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 60,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 610,
                'endLine' => 610,
                'startTokenPos' => 2107,
                'startFilePos' => 15403,
                'endTokenPos' => 2107,
                'endFilePos' => 15409,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 76,
            'endColumn' => 90,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 610,
                'endLine' => 610,
                'startTokenPos' => 2114,
                'startFilePos' => 15421,
                'endTokenPos' => 2114,
                'endFilePos' => 15425,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 93,
            'endColumn' => 106,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @param  string  $type
 * @param  bool  $where
 * @return $this
 */',
        'startLine' => 610,
        'endLine' => 637,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinWhere' => 
      array (
        'name' => 'joinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 47,
            'endColumn' => 55,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 649,
                'endLine' => 649,
                'startTokenPos' => 2284,
                'startFilePos' => 16891,
                'endTokenPos' => 2284,
                'endFilePos' => 16897,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 649,
            'endLine' => 649,
            'startColumn' => 67,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $second
 * @param  string  $type
 * @return $this
 */',
        'startLine' => 649,
        'endLine' => 652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinSub' => 
      array (
        'name' => 'joinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 37,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2337,
                'startFilePos' => 17601,
                'endTokenPos' => 2337,
                'endFilePos' => 17604,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2344,
                'startFilePos' => 17617,
                'endTokenPos' => 2344,
                'endFilePos' => 17620,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 68,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2351,
                'startFilePos' => 17631,
                'endTokenPos' => 2351,
                'endFilePos' => 17637,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 84,
            'endColumn' => 98,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2358,
                'startFilePos' => 17649,
                'endTokenPos' => 2358,
                'endFilePos' => 17653,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 101,
            'endColumn' => 114,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "subquery join" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @param  string  $type
 * @param  bool  $where
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 668,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinLateral' => 
      array (
        'name' => 'joinLateral',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
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
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 685,
                'endLine' => 685,
                'startTokenPos' => 2465,
                'startFilePos' => 18222,
                'endTokenPos' => 2465,
                'endFilePos' => 18228,
              ),
            ),
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
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 53,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "lateral join" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return $this
 */',
        'startLine' => 685,
        'endLine' => 696,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinLateral' => 
      array (
        'name' => 'leftJoinLateral',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
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
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a lateral left join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return $this
 */',
        'startLine' => 704,
        'endLine' => 707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoin' => 
      array (
        'name' => 'leftJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 718,
                'endLine' => 718,
                'startTokenPos' => 2606,
                'startFilePos' => 19296,
                'endTokenPos' => 2606,
                'endFilePos' => 19299,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 718,
                'endLine' => 718,
                'startTokenPos' => 2613,
                'startFilePos' => 19312,
                'endTokenPos' => 2613,
                'endFilePos' => 19315,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a left join to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 718,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinWhere' => 
      array (
        'name' => 'leftJoinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 51,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 62,
            'endColumn' => 68,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 732,
        'endLine' => 735,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinSub' => 
      array (
        'name' => 'leftJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 747,
            'endLine' => 747,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 747,
            'endLine' => 747,
            'startColumn' => 41,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 747,
            'endLine' => 747,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 747,
                'endLine' => 747,
                'startTokenPos' => 2709,
                'startFilePos' => 20442,
                'endTokenPos' => 2709,
                'endFilePos' => 20445,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 747,
            'endLine' => 747,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 747,
                'endLine' => 747,
                'startTokenPos' => 2716,
                'startFilePos' => 20458,
                'endTokenPos' => 2716,
                'endFilePos' => 20461,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 747,
            'endLine' => 747,
            'startColumn' => 72,
            'endColumn' => 85,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery left join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 747,
        'endLine' => 750,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoin' => 
      array (
        'name' => 'rightJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 761,
                'endLine' => 761,
                'startTokenPos' => 2766,
                'startFilePos' => 20936,
                'endTokenPos' => 2766,
                'endFilePos' => 20939,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 761,
                'endLine' => 761,
                'startTokenPos' => 2773,
                'startFilePos' => 20952,
                'endTokenPos' => 2773,
                'endFilePos' => 20955,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 65,
            'endColumn' => 78,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a right join to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 761,
        'endLine' => 764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoinWhere' => 
      array (
        'name' => 'rightJoinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 52,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 63,
            'endColumn' => 69,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "right join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $second
 * @return $this
 */',
        'startLine' => 775,
        'endLine' => 778,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoinSub' => 
      array (
        'name' => 'rightJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 42,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 2869,
                'startFilePos' => 22088,
                'endTokenPos' => 2869,
                'endFilePos' => 22091,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 55,
            'endColumn' => 70,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 2876,
                'startFilePos' => 22104,
                'endTokenPos' => 2876,
                'endFilePos' => 22107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 73,
            'endColumn' => 86,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery right join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 790,
        'endLine' => 793,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'crossJoin' => 
      array (
        'name' => 'crossJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 804,
                'endLine' => 804,
                'startTokenPos' => 2923,
                'startFilePos' => 22634,
                'endTokenPos' => 2923,
                'endFilePos' => 22637,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 804,
                'endLine' => 804,
                'startTokenPos' => 2930,
                'startFilePos' => 22652,
                'endTokenPos' => 2930,
                'endFilePos' => 22655,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 804,
                'endLine' => 804,
                'startTokenPos' => 2937,
                'startFilePos' => 22668,
                'endTokenPos' => 2937,
                'endFilePos' => 22671,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 72,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "cross join" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 804,
        'endLine' => 813,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'crossJoinSub' => 
      array (
        'name' => 'crossJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 42,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery cross join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 */',
        'startLine' => 822,
        'endLine' => 833,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'straightJoin' => 
      array (
        'name' => 'straightJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 844,
            'endLine' => 844,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 844,
            'endLine' => 844,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 844,
                'endLine' => 844,
                'startTokenPos' => 3119,
                'startFilePos' => 23861,
                'endTokenPos' => 3119,
                'endFilePos' => 23864,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 844,
            'endLine' => 844,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 844,
                'endLine' => 844,
                'startTokenPos' => 3126,
                'startFilePos' => 23877,
                'endTokenPos' => 3126,
                'endFilePos' => 23880,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 844,
            'endLine' => 844,
            'startColumn' => 68,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a straight join to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 844,
        'endLine' => 847,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'straightJoinWhere' => 
      array (
        'name' => 'straightJoinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 55,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 858,
            'endLine' => 858,
            'startColumn' => 66,
            'endColumn' => 72,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "straight join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $second
 * @return $this
 */',
        'startLine' => 858,
        'endLine' => 861,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'straightJoinSub' => 
      array (
        'name' => 'straightJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 45,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 873,
                'endLine' => 873,
                'startTokenPos' => 3222,
                'startFilePos' => 25041,
                'endTokenPos' => 3222,
                'endFilePos' => 25044,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 58,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 873,
                'endLine' => 873,
                'startTokenPos' => 3229,
                'startFilePos' => 25057,
                'endTokenPos' => 3229,
                'endFilePos' => 25060,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 873,
            'endLine' => 873,
            'startColumn' => 76,
            'endColumn' => 89,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery straight join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 873,
        'endLine' => 876,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newJoinClause' => 
      array (
        'name' => 'newJoinClause',
        'parameters' => 
        array (
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 885,
            'endLine' => 885,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 885,
            'endLine' => 885,
            'startColumn' => 57,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 885,
            'endLine' => 885,
            'startColumn' => 64,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new "join" clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @return \\Illuminate\\Database\\Query\\JoinClause
 */',
        'startLine' => 885,
        'endLine' => 888,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newJoinLateralClause' => 
      array (
        'name' => 'newJoinLateralClause',
        'parameters' => 
        array (
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 45,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 64,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 71,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new "join lateral" clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @return \\Illuminate\\Database\\Query\\JoinLateralClause
 */',
        'startLine' => 897,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'mergeWheres' => 
      array (
        'name' => 'mergeWheres',
        'parameters' => 
        array (
          'wheres' => 
          array (
            'name' => 'wheres',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 909,
            'endLine' => 909,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 909,
            'endLine' => 909,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge an array of "where" clauses and bindings.
 *
 * @param  array  $wheres
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 909,
        'endLine' => 918,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 929,
            'endLine' => 929,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 929,
                'endLine' => 929,
                'startTokenPos' => 3426,
                'startFilePos' => 26686,
                'endTokenPos' => 3426,
                'endFilePos' => 26689,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 929,
            'endLine' => 929,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 929,
                'endLine' => 929,
                'startTokenPos' => 3433,
                'startFilePos' => 26701,
                'endTokenPos' => 3433,
                'endFilePos' => 26704,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 929,
            'endLine' => 929,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 929,
                'endLine' => 929,
                'startTokenPos' => 3440,
                'startFilePos' => 26718,
                'endTokenPos' => 3440,
                'endFilePos' => 26722,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 929,
            'endLine' => 929,
            'startColumn' => 69,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a basic "where" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 929,
        'endLine' => 1028,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addArrayOfWheres' => 
      array (
        'name' => 'addArrayOfWheres',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1038,
            'endLine' => 1038,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1038,
            'endLine' => 1038,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 1038,
                'endLine' => 1038,
                'startTokenPos' => 4051,
                'startFilePos' => 31287,
                'endTokenPos' => 4051,
                'endFilePos' => 31293,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1038,
            'endLine' => 1038,
            'startColumn' => 60,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an array of "where" clauses to the query.
 *
 * @param  array  $column
 * @param  string  $boolean
 * @param  string  $method
 * @return $this
 */',
        'startLine' => 1038,
        'endLine' => 1049,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'prepareValueAndOperator' => 
      array (
        'name' => 'prepareValueAndOperator',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'useDefault' => 
          array (
            'name' => 'useDefault',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1061,
                'endLine' => 1061,
                'startTokenPos' => 4192,
                'startFilePos' => 32059,
                'endTokenPos' => 4192,
                'endFilePos' => 32063,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 64,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepare the value and operator for a where clause.
 *
 * @param  string  $value
 * @param  string  $operator
 * @param  bool  $useDefault
 * @return array
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 1061,
        'endLine' => 1070,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'invalidOperatorAndValue' => 
      array (
        'name' => 'invalidOperatorAndValue',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1081,
            'endLine' => 1081,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1081,
            'endLine' => 1081,
            'startColumn' => 59,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the given operator and value combination is legal.
 *
 * Prevents using Null values with invalid operators.
 *
 * @param  string  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 1081,
        'endLine' => 1085,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'invalidOperator' => 
      array (
        'name' => 'invalidOperator',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1093,
            'endLine' => 1093,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the given operator is supported.
 *
 * @param  string  $operator
 * @return bool
 */',
        'startLine' => 1093,
        'endLine' => 1097,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'isBitwiseOperator' => 
      array (
        'name' => 'isBitwiseOperator',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1105,
            'endLine' => 1105,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the operator is a bitwise operator.
 *
 * @param  string  $operator
 * @return bool
 */',
        'startLine' => 1105,
        'endLine' => 1109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhere' => 
      array (
        'name' => 'orWhere',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1119,
            'endLine' => 1119,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1119,
                'endLine' => 1119,
                'startTokenPos' => 4460,
                'startFilePos' => 33858,
                'endTokenPos' => 4460,
                'endFilePos' => 33861,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1119,
            'endLine' => 1119,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1119,
                'endLine' => 1119,
                'startTokenPos' => 4467,
                'startFilePos' => 33873,
                'endTokenPos' => 4467,
                'endFilePos' => 33876,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1119,
            'endLine' => 1119,
            'startColumn' => 56,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1119,
        'endLine' => 1126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNot' => 
      array (
        'name' => 'whereNot',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1137,
            'endLine' => 1137,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1137,
                'endLine' => 1137,
                'startTokenPos' => 4539,
                'startFilePos' => 34415,
                'endTokenPos' => 4539,
                'endFilePos' => 34418,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1137,
            'endLine' => 1137,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1137,
                'endLine' => 1137,
                'startTokenPos' => 4546,
                'startFilePos' => 34430,
                'endTokenPos' => 4546,
                'endFilePos' => 34433,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1137,
            'endLine' => 1137,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1137,
                'endLine' => 1137,
                'startTokenPos' => 4553,
                'startFilePos' => 34447,
                'endTokenPos' => 4553,
                'endFilePos' => 34451,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1137,
            'endLine' => 1137,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a basic "where not" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1137,
        'endLine' => 1146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNot' => 
      array (
        'name' => 'orWhereNot',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1156,
                'endLine' => 1156,
                'startTokenPos' => 4664,
                'startFilePos' => 35089,
                'endTokenPos' => 4664,
                'endFilePos' => 35092,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1156,
                'endLine' => 1156,
                'startTokenPos' => 4671,
                'startFilePos' => 35104,
                'endTokenPos' => 4671,
                'endFilePos' => 35107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1156,
            'endLine' => 1156,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1156,
        'endLine' => 1159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereColumn' => 
      array (
        'name' => 'whereColumn',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1170,
            'endLine' => 1170,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1170,
                'endLine' => 1170,
                'startTokenPos' => 4712,
                'startFilePos' => 35544,
                'endTokenPos' => 4712,
                'endFilePos' => 35547,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1170,
            'endLine' => 1170,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1170,
                'endLine' => 1170,
                'startTokenPos' => 4719,
                'startFilePos' => 35560,
                'endTokenPos' => 4719,
                'endFilePos' => 35563,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1170,
            'endLine' => 1170,
            'startColumn' => 59,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1170,
                'endLine' => 1170,
                'startTokenPos' => 4726,
                'startFilePos' => 35577,
                'endTokenPos' => 4726,
                'endFilePos' => 35581,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1170,
            'endLine' => 1170,
            'startColumn' => 75,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause comparing two columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @param  string|null  $boolean
 * @return $this
 */',
        'startLine' => 1170,
        'endLine' => 1196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereColumn' => 
      array (
        'name' => 'orWhereColumn',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1206,
                'endLine' => 1206,
                'startTokenPos' => 4867,
                'startFilePos' => 37055,
                'endTokenPos' => 4867,
                'endFilePos' => 37058,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1206,
                'endLine' => 1206,
                'startTokenPos' => 4874,
                'startFilePos' => 37071,
                'endTokenPos' => 4874,
                'endFilePos' => 37074,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 61,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause comparing two columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return $this
 */',
        'startLine' => 1206,
        'endLine' => 1209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereVectorSimilarTo' => 
      array (
        'name' => 'whereVectorSimilarTo',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'minSimilarity' => 
          array (
            'name' => 'minSimilarity',
            'default' => 
            array (
              'code' => '0.6',
              'attributes' => 
              array (
                'startLine' => 1220,
                'endLine' => 1220,
                'startTokenPos' => 4918,
                'startFilePos' => 37721,
                'endTokenPos' => 4918,
                'endFilePos' => 37723,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 60,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'order' => 
          array (
            'name' => 'order',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1220,
                'endLine' => 1220,
                'startTokenPos' => 4925,
                'startFilePos' => 37735,
                'endTokenPos' => 4925,
                'endFilePos' => 37738,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 82,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector similarity clause to the query, filtering by minimum similarity and ordering by similarity.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $minSimilarity  A value between 0.0 and 1.0, where 1.0 is identical.
 * @param  bool  $order
 * @return $this
 */',
        'startLine' => 1220,
        'endLine' => 1233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereVectorDistanceLessThan' => 
      array (
        'name' => 'whereVectorDistanceLessThan',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'maxDistance' => 
          array (
            'name' => 'maxDistance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 67,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1244,
                'endLine' => 1244,
                'startTokenPos' => 5030,
                'startFilePos' => 38535,
                'endTokenPos' => 5030,
                'endFilePos' => 38539,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1244,
            'endLine' => 1244,
            'startColumn' => 81,
            'endColumn' => 96,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector distance "where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $maxDistance
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1244,
        'endLine' => 1265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereVectorDistanceLessThan' => 
      array (
        'name' => 'orWhereVectorDistanceLessThan',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1275,
            'endLine' => 1275,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1275,
            'endLine' => 1275,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'maxDistance' => 
          array (
            'name' => 'maxDistance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1275,
            'endLine' => 1275,
            'startColumn' => 69,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector distance "or where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $maxDistance
 * @return $this
 */',
        'startLine' => 1275,
        'endLine' => 1278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereRaw' => 
      array (
        'name' => 'whereRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1288,
            'endLine' => 1288,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1288,
                'endLine' => 1288,
                'startTokenPos' => 5200,
                'startFilePos' => 39950,
                'endTokenPos' => 5201,
                'endFilePos' => 39951,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1288,
            'endLine' => 1288,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1288,
                'endLine' => 1288,
                'startTokenPos' => 5208,
                'startFilePos' => 39965,
                'endTokenPos' => 5208,
                'endFilePos' => 39969,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1288,
            'endLine' => 1288,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|literal-string  $sql
 * @param  mixed  $bindings
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1288,
        'endLine' => 1295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereRaw' => 
      array (
        'name' => 'orWhereRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1304,
            'endLine' => 1304,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1304,
                'endLine' => 1304,
                'startTokenPos' => 5279,
                'startFilePos' => 40357,
                'endTokenPos' => 5280,
                'endFilePos' => 40358,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1304,
            'endLine' => 1304,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "or where" clause to the query.
 *
 * @param  literal-string  $sql
 * @param  mixed  $bindings
 * @return $this
 */',
        'startLine' => 1304,
        'endLine' => 1307,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereLike' => 
      array (
        'name' => 'whereLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1319,
                'endLine' => 1319,
                'startTokenPos' => 5321,
                'startFilePos' => 40787,
                'endTokenPos' => 5321,
                'endFilePos' => 40791,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 48,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1319,
                'endLine' => 1319,
                'startTokenPos' => 5328,
                'startFilePos' => 40805,
                'endTokenPos' => 5328,
                'endFilePos' => 40809,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1319,
                'endLine' => 1319,
                'startTokenPos' => 5335,
                'startFilePos' => 40819,
                'endTokenPos' => 5335,
                'endFilePos' => 40823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 90,
            'endColumn' => 101,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1319,
        'endLine' => 1332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereLike' => 
      array (
        'name' => 'orWhereLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1342,
            'endLine' => 1342,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1342,
            'endLine' => 1342,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1342,
                'endLine' => 1342,
                'startTokenPos' => 5444,
                'startFilePos' => 41495,
                'endTokenPos' => 5444,
                'endFilePos' => 41499,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1342,
            'endLine' => 1342,
            'startColumn' => 50,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @return $this
 */',
        'startLine' => 1342,
        'endLine' => 1345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotLike' => 
      array (
        'name' => 'whereNotLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1356,
                'endLine' => 1356,
                'startTokenPos' => 5491,
                'startFilePos' => 41933,
                'endTokenPos' => 5491,
                'endFilePos' => 41937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 51,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1356,
                'endLine' => 1356,
                'startTokenPos' => 5498,
                'startFilePos' => 41951,
                'endTokenPos' => 5498,
                'endFilePos' => 41955,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1356,
            'endLine' => 1356,
            'startColumn' => 75,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1356,
        'endLine' => 1359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotLike' => 
      array (
        'name' => 'orWhereNotLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1369,
            'endLine' => 1369,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1369,
            'endLine' => 1369,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1369,
                'endLine' => 1369,
                'startTokenPos' => 5545,
                'startFilePos' => 42366,
                'endTokenPos' => 5545,
                'endFilePos' => 42370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1369,
            'endLine' => 1369,
            'startColumn' => 53,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @return $this
 */',
        'startLine' => 1369,
        'endLine' => 1372,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNullSafeEquals' => 
      array (
        'name' => 'whereNullSafeEquals',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1382,
            'endLine' => 1382,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1382,
            'endLine' => 1382,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1382,
                'endLine' => 1382,
                'startTokenPos' => 5589,
                'startFilePos' => 42772,
                'endTokenPos' => 5589,
                'endFilePos' => 42776,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1382,
            'endLine' => 1382,
            'startColumn' => 58,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where null safe equals" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1382,
        'endLine' => 1393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNullSafeEquals' => 
      array (
        'name' => 'orWhereNullSafeEquals',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1402,
            'endLine' => 1402,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1402,
            'endLine' => 1402,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where null safe equals" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1402,
        'endLine' => 1405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1418,
                'endLine' => 1418,
                'startTokenPos' => 5715,
                'startFilePos' => 43771,
                'endTokenPos' => 5715,
                'endFilePos' => 43775,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1418,
                'endLine' => 1418,
                'startTokenPos' => 5722,
                'startFilePos' => 43785,
                'endTokenPos' => 5722,
                'endFilePos' => 43789,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 65,
            'endColumn' => 76,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 1418,
        'endLine' => 1452,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIn' => 
      array (
        'name' => 'orWhereIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1461,
            'endLine' => 1461,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1461,
            'endLine' => 1461,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @return $this
 */',
        'startLine' => 1461,
        'endLine' => 1464,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1474,
                'endLine' => 1474,
                'startTokenPos' => 5978,
                'startFilePos' => 45900,
                'endTokenPos' => 5978,
                'endFilePos' => 45904,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1474,
            'endLine' => 1474,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1474,
        'endLine' => 1477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotIn' => 
      array (
        'name' => 'orWhereNotIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1486,
            'endLine' => 1486,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1486,
            'endLine' => 1486,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @return $this
 */',
        'startLine' => 1486,
        'endLine' => 1489,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIntegerInRaw' => 
      array (
        'name' => 'whereIntegerInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1500,
                'endLine' => 1500,
                'startTokenPos' => 6056,
                'startFilePos' => 46651,
                'endTokenPos' => 6056,
                'endFilePos' => 46655,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 57,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1500,
                'endLine' => 1500,
                'startTokenPos' => 6063,
                'startFilePos' => 46665,
                'endTokenPos' => 6063,
                'endFilePos' => 46669,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 75,
            'endColumn' => 86,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1500,
        'endLine' => 1517,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIntegerInRaw' => 
      array (
        'name' => 'orWhereIntegerInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1526,
            'endLine' => 1526,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1526,
            'endLine' => 1526,
            'startColumn' => 50,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 1526,
        'endLine' => 1529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIntegerNotInRaw' => 
      array (
        'name' => 'whereIntegerNotInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1539,
            'endLine' => 1539,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1539,
            'endLine' => 1539,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1539,
                'endLine' => 1539,
                'startTokenPos' => 6242,
                'startFilePos' => 47773,
                'endTokenPos' => 6242,
                'endFilePos' => 47777,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1539,
            'endLine' => 1539,
            'startColumn' => 60,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1539,
        'endLine' => 1542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIntegerNotInRaw' => 
      array (
        'name' => 'orWhereIntegerNotInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1551,
            'endLine' => 1551,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1551,
            'endLine' => 1551,
            'startColumn' => 53,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 1551,
        'endLine' => 1554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNull' => 
      array (
        'name' => 'whereNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1564,
            'endLine' => 1564,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1564,
                'endLine' => 1564,
                'startTokenPos' => 6317,
                'startFilePos' => 48517,
                'endTokenPos' => 6317,
                'endFilePos' => 48521,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1564,
            'endLine' => 1564,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1564,
                'endLine' => 1564,
                'startTokenPos' => 6324,
                'startFilePos' => 48531,
                'endTokenPos' => 6324,
                'endFilePos' => 48535,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1564,
            'endLine' => 1564,
            'startColumn' => 59,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1564,
        'endLine' => 1573,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNull' => 
      array (
        'name' => 'orWhereNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1581,
            'endLine' => 1581,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
        'startLine' => 1581,
        'endLine' => 1584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotNull' => 
      array (
        'name' => 'whereNotNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1593,
            'endLine' => 1593,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1593,
                'endLine' => 1593,
                'startTokenPos' => 6433,
                'startFilePos' => 49296,
                'endTokenPos' => 6433,
                'endFilePos' => 49300,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1593,
            'endLine' => 1593,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1593,
        'endLine' => 1596,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereBetween' => 
      array (
        'name' => 'whereBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1606,
                'endLine' => 1606,
                'startTokenPos' => 6476,
                'startFilePos' => 49756,
                'endTokenPos' => 6476,
                'endFilePos' => 49760,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1606,
                'endLine' => 1606,
                'startTokenPos' => 6483,
                'startFilePos' => 49770,
                'endTokenPos' => 6483,
                'endFilePos' => 49774,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1606,
            'endLine' => 1606,
            'startColumn' => 79,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1606,
        'endLine' => 1626,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereBetweenColumns' => 
      array (
        'name' => 'whereBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1636,
            'endLine' => 1636,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1636,
            'endLine' => 1636,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1636,
                'endLine' => 1636,
                'startTokenPos' => 6673,
                'startFilePos' => 50723,
                'endTokenPos' => 6673,
                'endFilePos' => 50727,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1636,
            'endLine' => 1636,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1636,
                'endLine' => 1636,
                'startTokenPos' => 6680,
                'startFilePos' => 50737,
                'endTokenPos' => 6680,
                'endFilePos' => 50741,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1636,
            'endLine' => 1636,
            'startColumn' => 83,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1636,
        'endLine' => 1650,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereBetween' => 
      array (
        'name' => 'orWhereBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1658,
            'endLine' => 1658,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1658,
            'endLine' => 1658,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1658,
        'endLine' => 1661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereBetweenColumns' => 
      array (
        'name' => 'orWhereBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1669,
            'endLine' => 1669,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1669,
            'endLine' => 1669,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1669,
        'endLine' => 1672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotBetween' => 
      array (
        'name' => 'whereNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1681,
            'endLine' => 1681,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1681,
            'endLine' => 1681,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1681,
                'endLine' => 1681,
                'startTokenPos' => 6886,
                'startFilePos' => 52254,
                'endTokenPos' => 6886,
                'endFilePos' => 52258,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1681,
            'endLine' => 1681,
            'startColumn' => 64,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1681,
        'endLine' => 1684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotBetweenColumns' => 
      array (
        'name' => 'whereNotBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1693,
            'endLine' => 1693,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1693,
            'endLine' => 1693,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1693,
                'endLine' => 1693,
                'startTokenPos' => 6932,
                'startFilePos' => 52648,
                'endTokenPos' => 6932,
                'endFilePos' => 52652,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1693,
            'endLine' => 1693,
            'startColumn' => 68,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1693,
        'endLine' => 1696,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotBetween' => 
      array (
        'name' => 'orWhereNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1704,
            'endLine' => 1704,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1704,
            'endLine' => 1704,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1704,
        'endLine' => 1707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotBetweenColumns' => 
      array (
        'name' => 'orWhereNotBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1715,
            'endLine' => 1715,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1715,
            'endLine' => 1715,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1715,
        'endLine' => 1718,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereValueBetween' => 
      array (
        'name' => 'whereValueBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1729,
                'endLine' => 1729,
                'startTokenPos' => 7050,
                'startFilePos' => 53918,
                'endTokenPos' => 7050,
                'endFilePos' => 53922,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 63,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1729,
                'endLine' => 1729,
                'startTokenPos' => 7057,
                'startFilePos' => 53932,
                'endTokenPos' => 7057,
                'endFilePos' => 53936,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 81,
            'endColumn' => 92,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1729,
        'endLine' => 1738,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereValueBetween' => 
      array (
        'name' => 'orWhereValueBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1747,
            'endLine' => 1747,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1747,
            'endLine' => 1747,
            'startColumn' => 49,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @return $this
 */',
        'startLine' => 1747,
        'endLine' => 1750,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereValueNotBetween' => 
      array (
        'name' => 'whereValueNotBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1760,
            'endLine' => 1760,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1760,
            'endLine' => 1760,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1760,
                'endLine' => 1760,
                'startTokenPos' => 7169,
                'startFilePos' => 54974,
                'endTokenPos' => 7169,
                'endFilePos' => 54978,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1760,
            'endLine' => 1760,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1760,
        'endLine' => 1763,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereValueNotBetween' => 
      array (
        'name' => 'orWhereValueNotBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1772,
            'endLine' => 1772,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1772,
            'endLine' => 1772,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @return $this
 */',
        'startLine' => 1772,
        'endLine' => 1775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotNull' => 
      array (
        'name' => 'orWhereNotNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1783,
            'endLine' => 1783,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not null" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1783,
        'endLine' => 1786,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereDate' => 
      array (
        'name' => 'whereDate',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1797,
                'endLine' => 1797,
                'startTokenPos' => 7277,
                'startFilePos' => 56177,
                'endTokenPos' => 7277,
                'endFilePos' => 56180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1797,
                'endLine' => 1797,
                'startTokenPos' => 7284,
                'startFilePos' => 56194,
                'endTokenPos' => 7284,
                'endFilePos' => 56198,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1797,
            'endLine' => 1797,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where date" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1797,
        'endLine' => 1817,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereDate' => 
      array (
        'name' => 'orWhereDate',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1827,
                'endLine' => 1827,
                'startTokenPos' => 7438,
                'startFilePos' => 57288,
                'endTokenPos' => 7438,
                'endFilePos' => 57291,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where date" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @return $this
 */',
        'startLine' => 1827,
        'endLine' => 1834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereTime' => 
      array (
        'name' => 'whereTime',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1845,
            'endLine' => 1845,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1845,
            'endLine' => 1845,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1845,
                'endLine' => 1845,
                'startTokenPos' => 7513,
                'startFilePos' => 57876,
                'endTokenPos' => 7513,
                'endFilePos' => 57879,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1845,
            'endLine' => 1845,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1845,
                'endLine' => 1845,
                'startTokenPos' => 7520,
                'startFilePos' => 57893,
                'endTokenPos' => 7520,
                'endFilePos' => 57897,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1845,
            'endLine' => 1845,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where time" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1845,
        'endLine' => 1865,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereTime' => 
      array (
        'name' => 'orWhereTime',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1875,
            'endLine' => 1875,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1875,
            'endLine' => 1875,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1875,
                'endLine' => 1875,
                'startTokenPos' => 7674,
                'startFilePos' => 58987,
                'endTokenPos' => 7674,
                'endFilePos' => 58990,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1875,
            'endLine' => 1875,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where time" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @return $this
 */',
        'startLine' => 1875,
        'endLine' => 1882,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereDay' => 
      array (
        'name' => 'whereDay',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1893,
            'endLine' => 1893,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1893,
            'endLine' => 1893,
            'startColumn' => 39,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1893,
                'endLine' => 1893,
                'startTokenPos' => 7749,
                'startFilePos' => 59581,
                'endTokenPos' => 7749,
                'endFilePos' => 59584,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1893,
            'endLine' => 1893,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1893,
                'endLine' => 1893,
                'startTokenPos' => 7756,
                'startFilePos' => 59598,
                'endTokenPos' => 7756,
                'endFilePos' => 59602,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1893,
            'endLine' => 1893,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where day" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1893,
        'endLine' => 1917,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereDay' => 
      array (
        'name' => 'orWhereDay',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1927,
            'endLine' => 1927,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1927,
            'endLine' => 1927,
            'startColumn' => 41,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1927,
                'endLine' => 1927,
                'startTokenPos' => 7939,
                'startFilePos' => 60804,
                'endTokenPos' => 7939,
                'endFilePos' => 60807,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1927,
            'endLine' => 1927,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where day" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 1927,
        'endLine' => 1934,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereMonth' => 
      array (
        'name' => 'whereMonth',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 41,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1945,
                'endLine' => 1945,
                'startTokenPos' => 8014,
                'startFilePos' => 61401,
                'endTokenPos' => 8014,
                'endFilePos' => 61404,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1945,
                'endLine' => 1945,
                'startTokenPos' => 8021,
                'startFilePos' => 61418,
                'endTokenPos' => 8021,
                'endFilePos' => 61422,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 67,
            'endColumn' => 82,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where month" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1945,
        'endLine' => 1969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereMonth' => 
      array (
        'name' => 'orWhereMonth',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1979,
            'endLine' => 1979,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1979,
            'endLine' => 1979,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1979,
                'endLine' => 1979,
                'startTokenPos' => 8204,
                'startFilePos' => 62630,
                'endTokenPos' => 8204,
                'endFilePos' => 62633,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1979,
            'endLine' => 1979,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where month" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 1979,
        'endLine' => 1986,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereYear' => 
      array (
        'name' => 'whereYear',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1997,
            'endLine' => 1997,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1997,
            'endLine' => 1997,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1997,
                'endLine' => 1997,
                'startTokenPos' => 8279,
                'startFilePos' => 63227,
                'endTokenPos' => 8279,
                'endFilePos' => 63230,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1997,
            'endLine' => 1997,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1997,
                'endLine' => 1997,
                'startTokenPos' => 8286,
                'startFilePos' => 63244,
                'endTokenPos' => 8286,
                'endFilePos' => 63248,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1997,
            'endLine' => 1997,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where year" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1997,
        'endLine' => 2017,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereYear' => 
      array (
        'name' => 'orWhereYear',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2027,
            'endLine' => 2027,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2027,
            'endLine' => 2027,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2027,
                'endLine' => 2027,
                'startTokenPos' => 8440,
                'startFilePos' => 64342,
                'endTokenPos' => 8440,
                'endFilePos' => 64345,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2027,
            'endLine' => 2027,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where year" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 2027,
        'endLine' => 2034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addDateBasedWhere' => 
      array (
        'name' => 'addDateBasedWhere',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 42,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 58,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 69,
            'endColumn' => 74,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2046,
                'endLine' => 2046,
                'startTokenPos' => 8521,
                'startFilePos' => 64961,
                'endTokenPos' => 8521,
                'endFilePos' => 64965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2046,
            'endLine' => 2046,
            'startColumn' => 77,
            'endColumn' => 92,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a date based (year, month, day, time) statement to the query.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2046,
        'endLine' => 2055,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNested' => 
      array (
        'name' => 'whereNested',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2063,
            'endLine' => 2063,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2063,
                'endLine' => 2063,
                'startTokenPos' => 8603,
                'startFilePos' => 65392,
                'endTokenPos' => 8603,
                'endFilePos' => 65396,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2063,
            'endLine' => 2063,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a nested "where" statement to the query.
 *
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2063,
        'endLine' => 2068,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forNestedWhere' => 
      array (
        'name' => 'forNestedWhere',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query instance for nested where condition.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 2075,
        'endLine' => 2078,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addNestedWhereQuery' => 
      array (
        'name' => 'addNestedWhereQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2087,
            'endLine' => 2087,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2087,
                'endLine' => 2087,
                'startTokenPos' => 8682,
                'startFilePos' => 66032,
                'endTokenPos' => 8682,
                'endFilePos' => 66036,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2087,
            'endLine' => 2087,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add another query builder as a nested where to the query builder.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2087,
        'endLine' => 2098,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereSub' => 
      array (
        'name' => 'whereSub',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 64,
            'endColumn' => 71,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a full sub-select to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $operator
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2109,
        'endLine' => 2129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereExists' => 
      array (
        'name' => 'whereExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2139,
            'endLine' => 2139,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2139,
                'endLine' => 2139,
                'startTokenPos' => 8911,
                'startFilePos' => 67727,
                'endTokenPos' => 8911,
                'endFilePos' => 67731,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2139,
            'endLine' => 2139,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2139,
                'endLine' => 2139,
                'startTokenPos' => 8918,
                'startFilePos' => 67741,
                'endTokenPos' => 8918,
                'endFilePos' => 67745,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2139,
            'endLine' => 2139,
            'startColumn' => 62,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2139,
        'endLine' => 2153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereExists' => 
      array (
        'name' => 'orWhereExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2162,
            'endLine' => 2162,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2162,
                'endLine' => 2162,
                'startTokenPos' => 9022,
                'startFilePos' => 68609,
                'endTokenPos' => 9022,
                'endFilePos' => 68613,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2162,
            'endLine' => 2162,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2162,
        'endLine' => 2165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotExists' => 
      array (
        'name' => 'whereNotExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2174,
            'endLine' => 2174,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2174,
                'endLine' => 2174,
                'startTokenPos' => 9060,
                'startFilePos' => 68984,
                'endTokenPos' => 9060,
                'endFilePos' => 68988,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2174,
            'endLine' => 2174,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2174,
        'endLine' => 2177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotExists' => 
      array (
        'name' => 'orWhereNotExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2185,
            'endLine' => 2185,
            'startColumn' => 38,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @return $this
 */',
        'startLine' => 2185,
        'endLine' => 2188,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addWhereExistsQuery' => 
      array (
        'name' => 'addWhereExistsQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2197,
                'endLine' => 2197,
                'startTokenPos' => 9128,
                'startFilePos' => 69603,
                'endTokenPos' => 9128,
                'endFilePos' => 69607,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2197,
                'endLine' => 2197,
                'startTokenPos' => 9135,
                'startFilePos' => 69617,
                'endTokenPos' => 9135,
                'endFilePos' => 69621,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 72,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "exists" clause to the query.
 *
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2197,
        'endLine' => 2206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereRowValues' => 
      array (
        'name' => 'whereRowValues',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2219,
            'endLine' => 2219,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2219,
            'endLine' => 2219,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2219,
            'endLine' => 2219,
            'startColumn' => 57,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2219,
                'endLine' => 2219,
                'startTokenPos' => 9218,
                'startFilePos' => 70173,
                'endTokenPos' => 9218,
                'endFilePos' => 70177,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2219,
            'endLine' => 2219,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a where condition using row values.
 *
 * @param  array  $columns
 * @param  string  $operator
 * @param  array  $values
 * @param  string  $boolean
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 2219,
        'endLine' => 2232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereRowValues' => 
      array (
        'name' => 'orWhereRowValues',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2242,
            'endLine' => 2242,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2242,
            'endLine' => 2242,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2242,
            'endLine' => 2242,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds an or where condition using row values.
 *
 * @param  array  $columns
 * @param  string  $operator
 * @param  array  $values
 * @return $this
 */',
        'startLine' => 2242,
        'endLine' => 2245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonContains' => 
      array (
        'name' => 'whereJsonContains',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2256,
            'endLine' => 2256,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2256,
            'endLine' => 2256,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2256,
                'endLine' => 2256,
                'startTokenPos' => 9364,
                'startFilePos' => 71186,
                'endTokenPos' => 9364,
                'endFilePos' => 71190,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2256,
            'endLine' => 2256,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2256,
                'endLine' => 2256,
                'startTokenPos' => 9371,
                'startFilePos' => 71200,
                'endTokenPos' => 9371,
                'endFilePos' => 71204,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2256,
            'endLine' => 2256,
            'startColumn' => 74,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2256,
        'endLine' => 2267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonContains' => 
      array (
        'name' => 'orWhereJsonContains',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2276,
            'endLine' => 2276,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2276,
            'endLine' => 2276,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2276,
        'endLine' => 2279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntContain' => 
      array (
        'name' => 'whereJsonDoesntContain',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2289,
            'endLine' => 2289,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2289,
            'endLine' => 2289,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2289,
                'endLine' => 2289,
                'startTokenPos' => 9499,
                'startFilePos' => 72072,
                'endTokenPos' => 9499,
                'endFilePos' => 72076,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2289,
            'endLine' => 2289,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2289,
        'endLine' => 2292,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntContain' => 
      array (
        'name' => 'orWhereJsonDoesntContain',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2301,
            'endLine' => 2301,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2301,
            'endLine' => 2301,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2301,
        'endLine' => 2304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonOverlaps' => 
      array (
        'name' => 'whereJsonOverlaps',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2315,
            'endLine' => 2315,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2315,
            'endLine' => 2315,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2315,
                'endLine' => 2315,
                'startTokenPos' => 9577,
                'startFilePos' => 72762,
                'endTokenPos' => 9577,
                'endFilePos' => 72766,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2315,
            'endLine' => 2315,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2315,
                'endLine' => 2315,
                'startTokenPos' => 9584,
                'startFilePos' => 72776,
                'endTokenPos' => 9584,
                'endFilePos' => 72780,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2315,
            'endLine' => 2315,
            'startColumn' => 74,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON overlaps" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2315,
        'endLine' => 2326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonOverlaps' => 
      array (
        'name' => 'orWhereJsonOverlaps',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2335,
            'endLine' => 2335,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2335,
            'endLine' => 2335,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON overlaps" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2335,
        'endLine' => 2338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntOverlap' => 
      array (
        'name' => 'whereJsonDoesntOverlap',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2348,
            'endLine' => 2348,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2348,
            'endLine' => 2348,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2348,
                'endLine' => 2348,
                'startTokenPos' => 9712,
                'startFilePos' => 73647,
                'endTokenPos' => 9712,
                'endFilePos' => 73651,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2348,
            'endLine' => 2348,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON not overlap" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2348,
        'endLine' => 2351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntOverlap' => 
      array (
        'name' => 'orWhereJsonDoesntOverlap',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2360,
            'endLine' => 2360,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2360,
            'endLine' => 2360,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON not overlap" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2360,
        'endLine' => 2363,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonContainsKey' => 
      array (
        'name' => 'whereJsonContainsKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2373,
            'endLine' => 2373,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2373,
                'endLine' => 2373,
                'startTokenPos' => 9787,
                'startFilePos' => 74318,
                'endTokenPos' => 9787,
                'endFilePos' => 74322,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2373,
            'endLine' => 2373,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2373,
                'endLine' => 2373,
                'startTokenPos' => 9794,
                'startFilePos' => 74332,
                'endTokenPos' => 9794,
                'endFilePos' => 74336,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2373,
            'endLine' => 2373,
            'startColumn' => 69,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a clause that determines if a JSON path exists to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2373,
        'endLine' => 2380,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonContainsKey' => 
      array (
        'name' => 'orWhereJsonContainsKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2388,
            'endLine' => 2388,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or" clause that determines if a JSON path exists to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2388,
        'endLine' => 2391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntContainKey' => 
      array (
        'name' => 'whereJsonDoesntContainKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2400,
                'endLine' => 2400,
                'startTokenPos' => 9879,
                'startFilePos' => 75012,
                'endTokenPos' => 9879,
                'endFilePos' => 75016,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a clause that determines if a JSON path does not exist to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2400,
        'endLine' => 2403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntContainKey' => 
      array (
        'name' => 'orWhereJsonDoesntContainKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2411,
            'endLine' => 2411,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or" clause that determines if a JSON path does not exist to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2411,
        'endLine' => 2414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonLength' => 
      array (
        'name' => 'whereJsonLength',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2425,
            'endLine' => 2425,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2425,
            'endLine' => 2425,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2425,
                'endLine' => 2425,
                'startTokenPos' => 9948,
                'startFilePos' => 75683,
                'endTokenPos' => 9948,
                'endFilePos' => 75686,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2425,
            'endLine' => 2425,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2425,
                'endLine' => 2425,
                'startTokenPos' => 9955,
                'startFilePos' => 75700,
                'endTokenPos' => 9955,
                'endFilePos' => 75704,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2425,
            'endLine' => 2425,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2425,
        'endLine' => 2447,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonLength' => 
      array (
        'name' => 'orWhereJsonLength',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2457,
            'endLine' => 2457,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2457,
            'endLine' => 2457,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2457,
                'endLine' => 2457,
                'startTokenPos' => 10118,
                'startFilePos' => 76734,
                'endTokenPos' => 10118,
                'endFilePos' => 76737,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2457,
            'endLine' => 2457,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2457,
        'endLine' => 2464,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dynamicWhere' => 
      array (
        'name' => 'dynamicWhere',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2473,
            'endLine' => 2473,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2473,
            'endLine' => 2473,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles dynamic "where" clauses to the query.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return $this
 */',
        'startLine' => 2473,
        'endLine' => 2507,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addDynamic' => 
      array (
        'name' => 'addDynamic',
        'parameters' => 
        array (
          'segment' => 
          array (
            'name' => 'segment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2518,
            'endLine' => 2518,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'connector' => 
          array (
            'name' => 'connector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2518,
            'endLine' => 2518,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2518,
            'endLine' => 2518,
            'startColumn' => 57,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2518,
            'endLine' => 2518,
            'startColumn' => 70,
            'endColumn' => 75,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a single dynamic "where" clause statement to the query.
 *
 * @param  string  $segment
 * @param  string  $connector
 * @param  array  $parameters
 * @param  int  $index
 * @return void
 */',
        'startLine' => 2518,
        'endLine' => 2526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereFullText' => 
      array (
        'name' => 'whereFullText',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2536,
            'endLine' => 2536,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2536,
            'endLine' => 2536,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2536,
                'endLine' => 2536,
                'startTokenPos' => 10420,
                'startFilePos' => 79475,
                'endTokenPos' => 10421,
                'endFilePos' => 79476,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2536,
            'endLine' => 2536,
            'startColumn' => 53,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2536,
                'endLine' => 2536,
                'startTokenPos' => 10428,
                'startFilePos' => 79490,
                'endTokenPos' => 10428,
                'endFilePos' => 79494,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2536,
            'endLine' => 2536,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where fulltext" clause to the query.
 *
 * @param  string|string[]  $columns
 * @param  string  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2536,
        'endLine' => 2547,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereFullText' => 
      array (
        'name' => 'orWhereFullText',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2556,
            'endLine' => 2556,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2556,
            'endLine' => 2556,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2556,
                'endLine' => 2556,
                'startTokenPos' => 10510,
                'startFilePos' => 79962,
                'endTokenPos' => 10511,
                'endFilePos' => 79963,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2556,
            'endLine' => 2556,
            'startColumn' => 55,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where fulltext" clause to the query.
 *
 * @param  string|string[]  $columns
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 2556,
        'endLine' => 2559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereAll' => 
      array (
        'name' => 'whereAll',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2570,
            'endLine' => 2570,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2570,
                'endLine' => 2570,
                'startTokenPos' => 10552,
                'startFilePos' => 80431,
                'endTokenPos' => 10552,
                'endFilePos' => 80434,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2570,
            'endLine' => 2570,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2570,
                'endLine' => 2570,
                'startTokenPos' => 10559,
                'startFilePos' => 80446,
                'endTokenPos' => 10559,
                'endFilePos' => 80449,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2570,
            'endLine' => 2570,
            'startColumn' => 58,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2570,
                'endLine' => 2570,
                'startTokenPos' => 10566,
                'startFilePos' => 80463,
                'endTokenPos' => 10566,
                'endFilePos' => 80467,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2570,
            'endLine' => 2570,
            'startColumn' => 73,
            'endColumn' => 88,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause to the query for multiple columns with "and" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2570,
        'endLine' => 2583,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereAll' => 
      array (
        'name' => 'orWhereAll',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2593,
            'endLine' => 2593,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2593,
                'endLine' => 2593,
                'startTokenPos' => 10686,
                'startFilePos' => 81215,
                'endTokenPos' => 10686,
                'endFilePos' => 81218,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2593,
            'endLine' => 2593,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2593,
                'endLine' => 2593,
                'startTokenPos' => 10693,
                'startFilePos' => 81230,
                'endTokenPos' => 10693,
                'endFilePos' => 81233,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2593,
            'endLine' => 2593,
            'startColumn' => 60,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query for multiple columns with "and" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2593,
        'endLine' => 2596,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereAny' => 
      array (
        'name' => 'whereAny',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2607,
            'endLine' => 2607,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2607,
                'endLine' => 2607,
                'startTokenPos' => 10734,
                'startFilePos' => 81696,
                'endTokenPos' => 10734,
                'endFilePos' => 81699,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2607,
            'endLine' => 2607,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2607,
                'endLine' => 2607,
                'startTokenPos' => 10741,
                'startFilePos' => 81711,
                'endTokenPos' => 10741,
                'endFilePos' => 81714,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2607,
            'endLine' => 2607,
            'startColumn' => 58,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2607,
                'endLine' => 2607,
                'startTokenPos' => 10748,
                'startFilePos' => 81728,
                'endTokenPos' => 10748,
                'endFilePos' => 81732,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2607,
            'endLine' => 2607,
            'startColumn' => 73,
            'endColumn' => 88,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause to the query for multiple columns with "or" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2607,
        'endLine' => 2620,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereAny' => 
      array (
        'name' => 'orWhereAny',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2630,
            'endLine' => 2630,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2630,
                'endLine' => 2630,
                'startTokenPos' => 10868,
                'startFilePos' => 82478,
                'endTokenPos' => 10868,
                'endFilePos' => 82481,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2630,
            'endLine' => 2630,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2630,
                'endLine' => 2630,
                'startTokenPos' => 10875,
                'startFilePos' => 82493,
                'endTokenPos' => 10875,
                'endFilePos' => 82496,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2630,
            'endLine' => 2630,
            'startColumn' => 60,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query for multiple columns with "or" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2630,
        'endLine' => 2633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNone' => 
      array (
        'name' => 'whereNone',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2644,
            'endLine' => 2644,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2644,
                'endLine' => 2644,
                'startTokenPos' => 10916,
                'startFilePos' => 82974,
                'endTokenPos' => 10916,
                'endFilePos' => 82977,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2644,
            'endLine' => 2644,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2644,
                'endLine' => 2644,
                'startTokenPos' => 10923,
                'startFilePos' => 82989,
                'endTokenPos' => 10923,
                'endFilePos' => 82992,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2644,
            'endLine' => 2644,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2644,
                'endLine' => 2644,
                'startTokenPos' => 10930,
                'startFilePos' => 83006,
                'endTokenPos' => 10930,
                'endFilePos' => 83010,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2644,
            'endLine' => 2644,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not" clause to the query for multiple columns where none of the conditions should be true.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2644,
        'endLine' => 2647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNone' => 
      array (
        'name' => 'orWhereNone',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2657,
            'endLine' => 2657,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2657,
                'endLine' => 2657,
                'startTokenPos' => 10973,
                'startFilePos' => 83473,
                'endTokenPos' => 10973,
                'endFilePos' => 83476,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2657,
            'endLine' => 2657,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2657,
                'endLine' => 2657,
                'startTokenPos' => 10980,
                'startFilePos' => 83488,
                'endTokenPos' => 10980,
                'endFilePos' => 83491,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2657,
            'endLine' => 2657,
            'startColumn' => 61,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not" clause to the query for multiple columns where none of the conditions should be true.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2657,
        'endLine' => 2660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupBy' => 
      array (
        'name' => 'groupBy',
        'parameters' => 
        array (
          'groups' => 
          array (
            'name' => 'groups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2668,
            'endLine' => 2668,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "group by" clause to the query.
 *
 * @param  array|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  ...$groups
 * @return $this
 */',
        'startLine' => 2668,
        'endLine' => 2678,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupByRaw' => 
      array (
        'name' => 'groupByRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2686,
            'endLine' => 2686,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2686,
                'endLine' => 2686,
                'startTokenPos' => 11084,
                'startFilePos' => 84188,
                'endTokenPos' => 11085,
                'endFilePos' => 84189,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2686,
            'endLine' => 2686,
            'startColumn' => 38,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "groupBy" clause to the query.
 *
 * @param  literal-string  $sql
 * @return $this
 */',
        'startLine' => 2686,
        'endLine' => 2693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'having' => 
      array (
        'name' => 'having',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2704,
            'endLine' => 2704,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2704,
                'endLine' => 2704,
                'startTokenPos' => 11139,
                'startFilePos' => 84760,
                'endTokenPos' => 11139,
                'endFilePos' => 84763,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2704,
            'endLine' => 2704,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2704,
                'endLine' => 2704,
                'startTokenPos' => 11146,
                'startFilePos' => 84775,
                'endTokenPos' => 11146,
                'endFilePos' => 84778,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2704,
            'endLine' => 2704,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2704,
                'endLine' => 2704,
                'startTokenPos' => 11153,
                'startFilePos' => 84792,
                'endTokenPos' => 11153,
                'endFilePos' => 84796,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2704,
            'endLine' => 2704,
            'startColumn' => 70,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\Closure|string  $column
 * @param  \\DateTimeInterface|string|int|float|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\DateTimeInterface|string|int|float|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2704,
        'endLine' => 2745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHaving' => 
      array (
        'name' => 'orHaving',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2755,
            'endLine' => 2755,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2755,
                'endLine' => 2755,
                'startTokenPos' => 11422,
                'startFilePos' => 86649,
                'endTokenPos' => 11422,
                'endFilePos' => 86652,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2755,
            'endLine' => 2755,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2755,
                'endLine' => 2755,
                'startTokenPos' => 11429,
                'startFilePos' => 86664,
                'endTokenPos' => 11429,
                'endFilePos' => 86667,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2755,
            'endLine' => 2755,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\Closure|string  $column
 * @param  \\DateTimeInterface|string|int|float|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\DateTimeInterface|string|int|float|null  $value
 * @return $this
 */',
        'startLine' => 2755,
        'endLine' => 2762,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNested' => 
      array (
        'name' => 'havingNested',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2770,
            'endLine' => 2770,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2770,
                'endLine' => 2770,
                'startTokenPos' => 11503,
                'startFilePos' => 87066,
                'endTokenPos' => 11503,
                'endFilePos' => 87070,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2770,
            'endLine' => 2770,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a nested "having" statement to the query.
 *
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2770,
        'endLine' => 2775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addNestedHavingQuery' => 
      array (
        'name' => 'addNestedHavingQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2784,
            'endLine' => 2784,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2784,
                'endLine' => 2784,
                'startTokenPos' => 11552,
                'startFilePos' => 87470,
                'endTokenPos' => 11552,
                'endFilePos' => 87474,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2784,
            'endLine' => 2784,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add another query builder as a nested having to the query builder.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2784,
        'endLine' => 2795,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNull' => 
      array (
        'name' => 'havingNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2805,
            'endLine' => 2805,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2805,
                'endLine' => 2805,
                'startTokenPos' => 11639,
                'startFilePos' => 87978,
                'endTokenPos' => 11639,
                'endFilePos' => 87982,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2805,
            'endLine' => 2805,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2805,
                'endLine' => 2805,
                'startTokenPos' => 11646,
                'startFilePos' => 87992,
                'endTokenPos' => 11646,
                'endFilePos' => 87996,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2805,
            'endLine' => 2805,
            'startColumn' => 60,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having null" clause to the query.
 *
 * @param  array|string  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2805,
        'endLine' => 2814,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNull' => 
      array (
        'name' => 'orHavingNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2822,
            'endLine' => 2822,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having null" clause to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2822,
        'endLine' => 2825,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNotNull' => 
      array (
        'name' => 'havingNotNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2834,
            'endLine' => 2834,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2834,
                'endLine' => 2834,
                'startTokenPos' => 11755,
                'startFilePos' => 88661,
                'endTokenPos' => 11755,
                'endFilePos' => 88665,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2834,
            'endLine' => 2834,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having not null" clause to the query.
 *
 * @param  array|string  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2834,
        'endLine' => 2837,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNotNull' => 
      array (
        'name' => 'orHavingNotNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2845,
            'endLine' => 2845,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having not null" clause to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2845,
        'endLine' => 2848,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingBetween' => 
      array (
        'name' => 'havingBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2858,
            'endLine' => 2858,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2858,
            'endLine' => 2858,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2858,
                'endLine' => 2858,
                'startTokenPos' => 11826,
                'startFilePos' => 89238,
                'endTokenPos' => 11826,
                'endFilePos' => 89242,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2858,
            'endLine' => 2858,
            'startColumn' => 62,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2858,
                'endLine' => 2858,
                'startTokenPos' => 11833,
                'startFilePos' => 89252,
                'endTokenPos' => 11833,
                'endFilePos' => 89256,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2858,
            'endLine' => 2858,
            'startColumn' => 80,
            'endColumn' => 91,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having between" clause to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2858,
        'endLine' => 2871,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNotBetween' => 
      array (
        'name' => 'havingNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2881,
            'endLine' => 2881,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2881,
            'endLine' => 2881,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2881,
                'endLine' => 2881,
                'startTokenPos' => 11954,
                'startFilePos' => 89896,
                'endTokenPos' => 11954,
                'endFilePos' => 89900,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2881,
            'endLine' => 2881,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having not between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2881,
        'endLine' => 2884,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingBetween' => 
      array (
        'name' => 'orHavingBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2893,
            'endLine' => 2893,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2893,
            'endLine' => 2893,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @return $this
 */',
        'startLine' => 2893,
        'endLine' => 2896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNotBetween' => 
      array (
        'name' => 'orHavingNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2905,
            'endLine' => 2905,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2905,
            'endLine' => 2905,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having not between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @return $this
 */',
        'startLine' => 2905,
        'endLine' => 2908,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'resolveDatePeriodBounds' => 
      array (
        'name' => 'resolveDatePeriodBounds',
        'parameters' => 
        array (
          'period' => 
          array (
            'name' => 'period',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DatePeriod',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2916,
            'endLine' => 2916,
            'startColumn' => 48,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve the start and end dates from a DatePeriod.
 *
 * @param  \\DatePeriod  $period
 * @return array{\\DateTimeInterface, \\DateTimeInterface}
 */',
        'startLine' => 2916,
        'endLine' => 2931,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingRaw' => 
      array (
        'name' => 'havingRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2940,
            'endLine' => 2940,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2940,
                'endLine' => 2940,
                'startTokenPos' => 12199,
                'startFilePos' => 91435,
                'endTokenPos' => 12200,
                'endFilePos' => 91436,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2940,
            'endLine' => 2940,
            'startColumn' => 37,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2940,
                'endLine' => 2940,
                'startTokenPos' => 12207,
                'startFilePos' => 91450,
                'endTokenPos' => 12207,
                'endFilePos' => 91454,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2940,
            'endLine' => 2940,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "having" clause to the query.
 *
 * @param  literal-string  $sql
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2940,
        'endLine' => 2949,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingRaw' => 
      array (
        'name' => 'orHavingRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2957,
            'endLine' => 2957,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2957,
                'endLine' => 2957,
                'startTokenPos' => 12274,
                'startFilePos' => 91814,
                'endTokenPos' => 12275,
                'endFilePos' => 91815,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2957,
            'endLine' => 2957,
            'startColumn' => 39,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "or having" clause to the query.
 *
 * @param  literal-string  $sql
 * @return $this
 */',
        'startLine' => 2957,
        'endLine' => 2960,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderBy' => 
      array (
        'name' => 'orderBy',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2971,
            'endLine' => 2971,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\\SortDirection::Ascending',
              'attributes' => 
              array (
                'startLine' => 2971,
                'endLine' => 2971,
                'startTokenPos' => 12313,
                'startFilePos' => 92293,
                'endTokenPos' => 12315,
                'endFilePos' => 92316,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2971,
            'endLine' => 2971,
            'startColumn' => 38,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  SortDirection|\'asc\'|\'desc\'  $direction
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 2971,
        'endLine' => 2997,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByDesc' => 
      array (
        'name' => 'orderByDesc',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3005,
            'endLine' => 3005,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a descending "order by" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 3005,
        'endLine' => 3008,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'latest' => 
      array (
        'name' => 'latest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'created_at\'',
              'attributes' => 
              array (
                'startLine' => 3016,
                'endLine' => 3016,
                'startTokenPos' => 12571,
                'startFilePos' => 93877,
                'endTokenPos' => 12571,
                'endFilePos' => 93888,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3016,
            'endLine' => 3016,
            'startColumn' => 28,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 3016,
        'endLine' => 3019,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'oldest' => 
      array (
        'name' => 'oldest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'created_at\'',
              'attributes' => 
              array (
                'startLine' => 3027,
                'endLine' => 3027,
                'startTokenPos' => 12605,
                'startFilePos' => 94237,
                'endTokenPos' => 12605,
                'endFilePos' => 94248,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3027,
            'endLine' => 3027,
            'startColumn' => 28,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 3027,
        'endLine' => 3030,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByVectorDistance' => 
      array (
        'name' => 'orderByVectorDistance',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3039,
            'endLine' => 3039,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3039,
            'endLine' => 3039,
            'startColumn' => 52,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector-distance "order by" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>  $vector
 * @return $this
 */',
        'startLine' => 3039,
        'endLine' => 3063,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'inRandomOrder' => 
      array (
        'name' => 'inRandomOrder',
        'parameters' => 
        array (
          'seed' => 
          array (
            'name' => 'seed',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 3071,
                'endLine' => 3071,
                'startTokenPos' => 12811,
                'startFilePos' => 95552,
                'endTokenPos' => 12811,
                'endFilePos' => 95553,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3071,
            'endLine' => 3071,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Put the query\'s results in random order.
 *
 * @param  string|int  $seed
 * @return $this
 */',
        'startLine' => 3071,
        'endLine' => 3074,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'inOrderOf' => 
      array (
        'name' => 'inOrderOf',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3083,
            'endLine' => 3083,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3083,
            'endLine' => 3083,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause to order results by a given sequence of values.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 3083,
        'endLine' => 3104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByRaw' => 
      array (
        'name' => 'orderByRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3113,
            'endLine' => 3113,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 3113,
                'endLine' => 3113,
                'startTokenPos' => 12998,
                'startFilePos' => 96689,
                'endTokenPos' => 12999,
                'endFilePos' => 96690,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3113,
            'endLine' => 3113,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "order by" clause to the query.
 *
 * @param  literal-string  $sql
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 3113,
        'endLine' => 3122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'skip' => 
      array (
        'name' => 'skip',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3130,
            'endLine' => 3130,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias to set the "offset" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 3130,
        'endLine' => 3133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'offset' => 
      array (
        'name' => 'offset',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3141,
            'endLine' => 3141,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "offset" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 3141,
        'endLine' => 3148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'take' => 
      array (
        'name' => 'take',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3156,
            'endLine' => 3156,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias to set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 3156,
        'endLine' => 3159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'limit' => 
      array (
        'name' => 'limit',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3167,
            'endLine' => 3167,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 3167,
        'endLine' => 3176,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupLimit' => 
      array (
        'name' => 'groupLimit',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3185,
            'endLine' => 3185,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3185,
            'endLine' => 3185,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "group limit" clause to the query.
 *
 * @param  int  $value
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3185,
        'endLine' => 3192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPage' => 
      array (
        'name' => 'forPage',
        'parameters' => 
        array (
          'page' => 
          array (
            'name' => 'page',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3201,
            'endLine' => 3201,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3201,
                'endLine' => 3201,
                'startTokenPos' => 13314,
                'startFilePos' => 98510,
                'endTokenPos' => 13314,
                'endFilePos' => 98511,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3201,
            'endLine' => 3201,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the limit and offset for a given page.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return $this
 */',
        'startLine' => 3201,
        'endLine' => 3204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPageBeforeId' => 
      array (
        'name' => 'forPageBeforeId',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3214,
                'endLine' => 3214,
                'startTokenPos' => 13358,
                'startFilePos' => 98862,
                'endTokenPos' => 13358,
                'endFilePos' => 98863,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3214,
            'endLine' => 3214,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'lastId' => 
          array (
            'name' => 'lastId',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 3214,
                'endLine' => 3214,
                'startTokenPos' => 13365,
                'startFilePos' => 98876,
                'endTokenPos' => 13365,
                'endFilePos' => 98876,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3214,
            'endLine' => 3214,
            'startColumn' => 52,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 3214,
                'endLine' => 3214,
                'startTokenPos' => 13372,
                'startFilePos' => 98889,
                'endTokenPos' => 13372,
                'endFilePos' => 98892,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3214,
            'endLine' => 3214,
            'startColumn' => 65,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constrain the query to the previous "page" of results before a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3214,
        'endLine' => 3226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPageAfterId' => 
      array (
        'name' => 'forPageAfterId',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3236,
                'endLine' => 3236,
                'startTokenPos' => 13467,
                'startFilePos' => 99480,
                'endTokenPos' => 13467,
                'endFilePos' => 99481,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3236,
            'endLine' => 3236,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'lastId' => 
          array (
            'name' => 'lastId',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 3236,
                'endLine' => 3236,
                'startTokenPos' => 13474,
                'startFilePos' => 99494,
                'endTokenPos' => 13474,
                'endFilePos' => 99494,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3236,
            'endLine' => 3236,
            'startColumn' => 51,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 3236,
                'endLine' => 3236,
                'startTokenPos' => 13481,
                'startFilePos' => 99507,
                'endTokenPos' => 13481,
                'endFilePos' => 99510,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3236,
            'endLine' => 3236,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constrain the query to the next "page" of results after a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3236,
        'endLine' => 3248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'reorder' => 
      array (
        'name' => 'reorder',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3257,
                'endLine' => 3257,
                'startTokenPos' => 13576,
                'startFilePos' => 100169,
                'endTokenPos' => 13576,
                'endFilePos' => 100172,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3257,
            'endLine' => 3257,
            'startColumn' => 29,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\\SortDirection::Ascending',
              'attributes' => 
              array (
                'startLine' => 3257,
                'endLine' => 3257,
                'startTokenPos' => 13583,
                'startFilePos' => 100188,
                'endTokenPos' => 13585,
                'endFilePos' => 100211,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3257,
            'endLine' => 3257,
            'startColumn' => 45,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all existing orders and optionally add a new order.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $column
 * @param  SortDirection|\'asc\'|\'desc\'  $direction
 * @return $this
 */',
        'startLine' => 3257,
        'endLine' => 3269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'reorderDesc' => 
      array (
        'name' => 'reorderDesc',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3277,
            'endLine' => 3277,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add descending "reorder" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $column
 * @return $this
 */',
        'startLine' => 3277,
        'endLine' => 3280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'removeExistingOrdersFor' => 
      array (
        'name' => 'removeExistingOrdersFor',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3288,
            'endLine' => 3288,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an array with all orders with a given column removed.
 *
 * @param  string  $column
 * @return array
 */',
        'startLine' => 3288,
        'endLine' => 3294,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'union' => 
      array (
        'name' => 'union',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3303,
            'endLine' => 3303,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'all' => 
          array (
            'name' => 'all',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 3303,
                'endLine' => 3303,
                'startTokenPos' => 13779,
                'startFilePos' => 101491,
                'endTokenPos' => 13779,
                'endFilePos' => 101495,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3303,
            'endLine' => 3303,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "union" statement to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @param  bool  $all
 * @return $this
 */',
        'startLine' => 3303,
        'endLine' => 3314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'unionAll' => 
      array (
        'name' => 'unionAll',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3322,
            'endLine' => 3322,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "union all" statement to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @return $this
 */',
        'startLine' => 3322,
        'endLine' => 3325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'lock' => 
      array (
        'name' => 'lock',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 3333,
                'endLine' => 3333,
                'startTokenPos' => 13891,
                'startFilePos' => 102196,
                'endTokenPos' => 13891,
                'endFilePos' => 102199,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3333,
            'endLine' => 3333,
            'startColumn' => 26,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lock the selected rows in the table.
 *
 * @param  string|bool  $value
 * @return $this
 */',
        'startLine' => 3333,
        'endLine' => 3342,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'lockForUpdate' => 
      array (
        'name' => 'lockForUpdate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lock the selected rows in the table for updating.
 *
 * @return $this
 */',
        'startLine' => 3349,
        'endLine' => 3352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'sharedLock' => 
      array (
        'name' => 'sharedLock',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Share lock the selected rows in the table.
 *
 * @return $this
 */',
        'startLine' => 3359,
        'endLine' => 3362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'timeout' => 
      array (
        'name' => 'timeout',
        'parameters' => 
        array (
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
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
                      'name' => 'int',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3372,
            'endLine' => 3372,
            'startColumn' => 29,
            'endColumn' => 41,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set a query execution timeout in seconds.
 *
 * @param  int|null  $seconds
 * @return $this
 *
 * @throws InvalidArgumentException
 */',
        'startLine' => 3372,
        'endLine' => 3381,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'beforeQuery' => 
      array (
        'name' => 'beforeQuery',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3388,
            'endLine' => 3388,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a closure to be invoked before the query is executed.
 *
 * @return $this
 */',
        'startLine' => 3388,
        'endLine' => 3393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'applyBeforeQueryCallbacks' => 
      array (
        'name' => 'applyBeforeQueryCallbacks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invoke the "before query" modification callbacks.
 *
 * @return void
 */',
        'startLine' => 3400,
        'endLine' => 3407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'afterQuery' => 
      array (
        'name' => 'afterQuery',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3414,
            'endLine' => 3414,
            'startColumn' => 32,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a closure to be invoked after the query is executed.
 *
 * @return $this
 */',
        'startLine' => 3414,
        'endLine' => 3419,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'applyAfterQueryCallbacks' => 
      array (
        'name' => 'applyAfterQueryCallbacks',
        'parameters' => 
        array (
          'result' => 
          array (
            'name' => 'result',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3427,
            'endLine' => 3427,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invoke the "after query" modification callbacks.
 *
 * @param  mixed  $result
 * @return mixed
 */',
        'startLine' => 3427,
        'endLine' => 3434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'toSql' => 
      array (
        'name' => 'toSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the SQL representation of the query.
 *
 * @return string
 */',
        'startLine' => 3441,
        'endLine' => 3446,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'toRawSql' => 
      array (
        'name' => 'toRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw SQL representation of the query with embedded bindings.
 *
 * @return string
 */',
        'startLine' => 3453,
        'endLine' => 3458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3467,
            'endLine' => 3467,
            'startColumn' => 26,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3467,
                'endLine' => 3467,
                'startTokenPos' => 14308,
                'startFilePos' => 105195,
                'endTokenPos' => 14310,
                'endFilePos' => 105199,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3467,
            'endLine' => 3467,
            'startColumn' => 31,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a query for a single record by ID.
 *
 * @param  int|string  $id
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return \\stdClass|null
 */',
        'startLine' => 3467,
        'endLine' => 3470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'findOr' => 
      array (
        'name' => 'findOr',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3482,
            'endLine' => 3482,
            'startColumn' => 28,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3482,
                'endLine' => 3482,
                'startTokenPos' => 14353,
                'startFilePos' => 105716,
                'endTokenPos' => 14355,
                'endFilePos' => 105720,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3482,
            'endLine' => 3482,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3482,
                'endLine' => 3482,
                'startTokenPos' => 14365,
                'startFilePos' => 105744,
                'endTokenPos' => 14365,
                'endFilePos' => 105747,
              ),
            ),
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
                      'name' => 'Closure',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3482,
            'endLine' => 3482,
            'startColumn' => 51,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a query for a single record by ID or call a callback.
 *
 * @template TValue
 *
 * @param  mixed  $id
 * @param  (\\Closure(): TValue)|string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  (\\Closure(): TValue)|null  $callback
 * @return \\stdClass|TValue
 */',
        'startLine' => 3482,
        'endLine' => 3495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'value' => 
      array (
        'name' => 'value',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3503,
            'endLine' => 3503,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single column\'s value from the first result of a query.
 *
 * @param  string  $column
 * @return mixed
 */',
        'startLine' => 3503,
        'endLine' => 3508,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rawValue' => 
      array (
        'name' => 'rawValue',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
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
            'startLine' => 3516,
            'endLine' => 3516,
            'startColumn' => 30,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 3516,
                'endLine' => 3516,
                'startTokenPos' => 14512,
                'startFilePos' => 106538,
                'endTokenPos' => 14513,
                'endFilePos' => 106539,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3516,
            'endLine' => 3516,
            'startColumn' => 50,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single expression value from the first result of a query.
 *
 * @param  literal-string  $expression
 * @return mixed
 */',
        'startLine' => 3516,
        'endLine' => 3521,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'soleValue' => 
      array (
        'name' => 'soleValue',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3532,
            'endLine' => 3532,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single column\'s value from the first result of a query if it\'s the sole matching record.
 *
 * @param  string  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\RecordsNotFoundException
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
        'startLine' => 3532,
        'endLine' => 3537,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3545,
                'endLine' => 3545,
                'startTokenPos' => 14613,
                'startFilePos' => 107457,
                'endTokenPos' => 14615,
                'endFilePos' => 107461,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3545,
            'endLine' => 3545,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the query as a "select" statement.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return \\Illuminate\\Support\\Collection<int, \\stdClass>
 */',
        'startLine' => 3545,
        'endLine' => 3558,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'runSelect' => 
      array (
        'name' => 'runSelect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run the query as a "select" statement against the connection.
 *
 * @return array
 */',
        'startLine' => 3565,
        'endLine' => 3570,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'withoutGroupLimitKeys' => 
      array (
        'name' => 'withoutGroupLimitKeys',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3578,
            'endLine' => 3578,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the group limit keys from the results in the collection.
 *
 * @param  \\Illuminate\\Support\\Collection  $items
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3578,
        'endLine' => 3596,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3608,
                'endLine' => 3608,
                'startTokenPos' => 14923,
                'startFilePos' => 109410,
                'endTokenPos' => 14923,
                'endFilePos' => 109411,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3608,
            'endLine' => 3608,
            'startColumn' => 30,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3608,
                'endLine' => 3608,
                'startTokenPos' => 14930,
                'startFilePos' => 109425,
                'endTokenPos' => 14932,
                'endFilePos' => 109429,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3608,
            'endLine' => 3608,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 3608,
                'endLine' => 3608,
                'startTokenPos' => 14939,
                'startFilePos' => 109444,
                'endTokenPos' => 14939,
                'endFilePos' => 109449,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3608,
            'endLine' => 3608,
            'startColumn' => 63,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3608,
                'endLine' => 3608,
                'startTokenPos' => 14946,
                'startFilePos' => 109460,
                'endTokenPos' => 14946,
                'endFilePos' => 109463,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3608,
            'endLine' => 3608,
            'startColumn' => 83,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'total' => 
          array (
            'name' => 'total',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3608,
                'endLine' => 3608,
                'startTokenPos' => 14953,
                'startFilePos' => 109475,
                'endTokenPos' => 14953,
                'endFilePos' => 109478,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3608,
            'endLine' => 3608,
            'startColumn' => 97,
            'endColumn' => 109,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int|\\Closure  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @param  \\Closure|int|null  $total
 * @return \\Illuminate\\Pagination\\LengthAwarePaginator
 */',
        'startLine' => 3608,
        'endLine' => 3622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'simplePaginate' => 
      array (
        'name' => 'simplePaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3635,
                'endLine' => 3635,
                'startTokenPos' => 15092,
                'startFilePos' => 110437,
                'endTokenPos' => 15092,
                'endFilePos' => 110438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3635,
            'endLine' => 3635,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3635,
                'endLine' => 3635,
                'startTokenPos' => 15099,
                'startFilePos' => 110452,
                'endTokenPos' => 15101,
                'endFilePos' => 110456,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3635,
            'endLine' => 3635,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 3635,
                'endLine' => 3635,
                'startTokenPos' => 15108,
                'startFilePos' => 110471,
                'endTokenPos' => 15108,
                'endFilePos' => 110476,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3635,
            'endLine' => 3635,
            'startColumn' => 69,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3635,
                'endLine' => 3635,
                'startTokenPos' => 15115,
                'startFilePos' => 110487,
                'endTokenPos' => 15115,
                'endFilePos' => 110490,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3635,
            'endLine' => 3635,
            'startColumn' => 89,
            'endColumn' => 100,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a paginator only supporting simple next and previous links.
 *
 * This is more efficient on larger data-sets, etc.
 *
 * @param  int  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
        'startLine' => 3635,
        'endLine' => 3645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cursorPaginate' => 
      array (
        'name' => 'cursorPaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3658,
                'endLine' => 3658,
                'startTokenPos' => 15222,
                'startFilePos' => 111370,
                'endTokenPos' => 15222,
                'endFilePos' => 111371,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3658,
            'endLine' => 3658,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3658,
                'endLine' => 3658,
                'startTokenPos' => 15229,
                'startFilePos' => 111385,
                'endTokenPos' => 15231,
                'endFilePos' => 111389,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3658,
            'endLine' => 3658,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'cursorName' => 
          array (
            'name' => 'cursorName',
            'default' => 
            array (
              'code' => '\'cursor\'',
              'attributes' => 
              array (
                'startLine' => 3658,
                'endLine' => 3658,
                'startTokenPos' => 15238,
                'startFilePos' => 111406,
                'endTokenPos' => 15238,
                'endFilePos' => 111413,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3658,
            'endLine' => 3658,
            'startColumn' => 69,
            'endColumn' => 90,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cursor' => 
          array (
            'name' => 'cursor',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3658,
                'endLine' => 3658,
                'startTokenPos' => 15245,
                'startFilePos' => 111426,
                'endTokenPos' => 15245,
                'endFilePos' => 111429,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3658,
            'endLine' => 3658,
            'startColumn' => 93,
            'endColumn' => 106,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a paginator only supporting simple next and previous links.
 *
 * This is more efficient on larger data-sets, etc.
 *
 * @param  int|null  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $cursorName
 * @param  \\Illuminate\\Pagination\\Cursor|string|null  $cursor
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator
 */',
        'startLine' => 3658,
        'endLine' => 3661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ensureOrderForCursorPagination' => 
      array (
        'name' => 'ensureOrderForCursorPagination',
        'parameters' => 
        array (
          'shouldReverse' => 
          array (
            'name' => 'shouldReverse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 3669,
                'endLine' => 3669,
                'startTokenPos' => 15283,
                'startFilePos' => 111772,
                'endTokenPos' => 15283,
                'endFilePos' => 111776,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3669,
            'endLine' => 3669,
            'startColumn' => 55,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the proper order by required for cursor pagination.
 *
 * @param  bool  $shouldReverse
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3669,
        'endLine' => 3695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getCountForPagination' => 
      array (
        'name' => 'getCountForPagination',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3703,
                'endLine' => 3703,
                'startTokenPos' => 15530,
                'startFilePos' => 112880,
                'endTokenPos' => 15532,
                'endFilePos' => 112884,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3703,
            'endLine' => 3703,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the count of the total records for the paginator.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return int<0, max>
 */',
        'startLine' => 3703,
        'endLine' => 3717,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'runPaginationCountQuery' => 
      array (
        'name' => 'runPaginationCountQuery',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3725,
                'endLine' => 3725,
                'startTokenPos' => 15638,
                'startFilePos' => 113703,
                'endTokenPos' => 15640,
                'endFilePos' => 113707,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3725,
            'endLine' => 3725,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run a pagination count query.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return array<mixed>
 */',
        'startLine' => 3725,
        'endLine' => 3747,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneForPaginationCount' => 
      array (
        'name' => 'cloneForPaginationCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the existing query instance for usage in a pagination subquery.
 *
 * @return self
 */',
        'startLine' => 3754,
        'endLine' => 3758,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'withoutSelectAliases' => 
      array (
        'name' => 'withoutSelectAliases',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3766,
            'endLine' => 3766,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the column aliases since they will break count queries.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>
 */',
        'startLine' => 3766,
        'endLine' => 3773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a lazy collection for the given query.
 *
 * @return \\Illuminate\\Support\\LazyCollection<int, \\stdClass>
 */',
        'startLine' => 3780,
        'endLine' => 3793,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'enforceOrderBy' => 
      array (
        'name' => 'enforceOrderBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if the query doesn\'t have an orderBy clause.
 *
 * @return void
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 3802,
        'endLine' => 3807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluck' => 
      array (
        'name' => 'pluck',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3816,
            'endLine' => 3816,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3816,
                'endLine' => 3816,
                'startTokenPos' => 16202,
                'startFilePos' => 116845,
                'endTokenPos' => 16202,
                'endFilePos' => 116848,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3816,
            'endLine' => 3816,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a collection instance containing the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection<array-key, mixed>
 */',
        'startLine' => 3816,
        'endLine' => 3847,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'stripTableForPluck' => 
      array (
        'name' => 'stripTableForPluck',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3855,
            'endLine' => 3855,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Strip off the table name or alias from a column identifier.
 *
 * @param  string  $column
 * @return string|null
 */',
        'startLine' => 3855,
        'endLine' => 3868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluckFromObjectColumn' => 
      array (
        'name' => 'pluckFromObjectColumn',
        'parameters' => 
        array (
          'queryResult' => 
          array (
            'name' => 'queryResult',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3878,
            'endLine' => 3878,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3878,
            'endLine' => 3878,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3878,
            'endLine' => 3878,
            'startColumn' => 69,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve column values from rows represented as objects.
 *
 * @param  array  $queryResult
 * @param  string  $column
 * @param  string  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3878,
        'endLine' => 3893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluckFromArrayColumn' => 
      array (
        'name' => 'pluckFromArrayColumn',
        'parameters' => 
        array (
          'queryResult' => 
          array (
            'name' => 'queryResult',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3903,
            'endLine' => 3903,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3903,
            'endLine' => 3903,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3903,
            'endLine' => 3903,
            'startColumn' => 68,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve column values from rows represented as arrays.
 *
 * @param  array  $queryResult
 * @param  string  $column
 * @param  string  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3903,
        'endLine' => 3918,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'implode' => 
      array (
        'name' => 'implode',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3927,
            'endLine' => 3927,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'glue' => 
          array (
            'name' => 'glue',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 3927,
                'endLine' => 3927,
                'startTokenPos' => 16728,
                'startFilePos' => 120148,
                'endTokenPos' => 16728,
                'endFilePos' => 120149,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3927,
            'endLine' => 3927,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Concatenate values of a given column as a string.
 *
 * @param  string  $column
 * @param  string  $glue
 * @return string
 */',
        'startLine' => 3927,
        'endLine' => 3930,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if any rows exist for the current query.
 *
 * @return bool
 */',
        'startLine' => 3937,
        'endLine' => 3955,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'doesntExist' => 
      array (
        'name' => 'doesntExist',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if no rows exist for the current query.
 *
 * @return bool
 */',
        'startLine' => 3962,
        'endLine' => 3965,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'existsOr' => 
      array (
        'name' => 'existsOr',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3972,
            'endLine' => 3972,
            'startColumn' => 30,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback if no rows exist for the current query.
 *
 * @return mixed
 */',
        'startLine' => 3972,
        'endLine' => 3975,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'doesntExistOr' => 
      array (
        'name' => 'doesntExistOr',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3982,
            'endLine' => 3982,
            'startColumn' => 35,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback if rows exist for the current query.
 *
 * @return mixed
 */',
        'startLine' => 3982,
        'endLine' => 3985,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '\'*\'',
              'attributes' => 
              array (
                'startLine' => 3993,
                'endLine' => 3993,
                'startTokenPos' => 16966,
                'startFilePos' => 121849,
                'endTokenPos' => 16966,
                'endFilePos' => 121851,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3993,
            'endLine' => 3993,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the "count" result of the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $columns
 * @return int<0, max>
 */',
        'startLine' => 3993,
        'endLine' => 3996,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'min' => 
      array (
        'name' => 'min',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4004,
            'endLine' => 4004,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the minimum value of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 4004,
        'endLine' => 4007,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'max' => 
      array (
        'name' => 'max',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4015,
            'endLine' => 4015,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the maximum value of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 4015,
        'endLine' => 4018,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'sum' => 
      array (
        'name' => 'sum',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4026,
            'endLine' => 4026,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the sum of the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 4026,
        'endLine' => 4031,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'avg' => 
      array (
        'name' => 'avg',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4039,
            'endLine' => 4039,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the average of the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 4039,
        'endLine' => 4042,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'average' => 
      array (
        'name' => 'average',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4050,
            'endLine' => 4050,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for the "avg" method.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 4050,
        'endLine' => 4053,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'aggregate' => 
      array (
        'name' => 'aggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4062,
            'endLine' => 4062,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 4062,
                'endLine' => 4062,
                'startTokenPos' => 17165,
                'startFilePos' => 123564,
                'endTokenPos' => 17167,
                'endFilePos' => 123568,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4062,
            'endLine' => 4062,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute an aggregate function on the database.
 *
 * @param  string  $function
 * @param  array  $columns
 * @return mixed
 */',
        'startLine' => 4062,
        'endLine' => 4072,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'numericAggregate' => 
      array (
        'name' => 'numericAggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4081,
            'endLine' => 4081,
            'startColumn' => 38,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 4081,
                'endLine' => 4081,
                'startTokenPos' => 17292,
                'startFilePos' => 124194,
                'endTokenPos' => 17294,
                'endFilePos' => 124198,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4081,
            'endLine' => 4081,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a numeric aggregate function on the database.
 *
 * @param  string  $function
 * @param  array  $columns
 * @return float|int
 */',
        'startLine' => 4081,
        'endLine' => 4102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'setAggregate' => 
      array (
        'name' => 'setAggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4111,
            'endLine' => 4111,
            'startColumn' => 37,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4111,
            'endLine' => 4111,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the aggregate property without running the query.
 *
 * @param  string  $function
 * @param  array<\\Illuminate\\Contracts\\Database\\Query\\Expression|string>  $columns
 * @return $this
 */',
        'startLine' => 4111,
        'endLine' => 4122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4129,
            'endLine' => 4129,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the database.
 *
 * @return bool
 */',
        'startLine' => 4129,
        'endLine' => 4162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertOrIgnore' => 
      array (
        'name' => 'insertOrIgnore',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4169,
            'endLine' => 4169,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the database while ignoring errors.
 *
 * @return int<0, max>
 */',
        'startLine' => 4169,
        'endLine' => 4191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertOrIgnoreReturning' => 
      array (
        'name' => 'insertOrIgnoreReturning',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4200,
            'endLine' => 4200,
            'startColumn' => 45,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'returning' => 
          array (
            'name' => 'returning',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 4200,
                'endLine' => 4200,
                'startTokenPos' => 17807,
                'startFilePos' => 128127,
                'endTokenPos' => 17809,
                'endFilePos' => 128131,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4200,
            'endLine' => 4200,
            'startColumn' => 60,
            'endColumn' => 83,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4200,
                'endLine' => 4200,
                'startTokenPos' => 17822,
                'startFilePos' => 128164,
                'endTokenPos' => 17822,
                'endFilePos' => 128167,
              ),
            ),
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  2 => 
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4200,
            'endLine' => 4200,
            'startColumn' => 86,
            'endColumn' => 119,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the database and returning specified columns with optional ignoring specific conflicts.
 *
 * @param  non-empty-array<non-empty-string>  $returning
 * @param  non-empty-string|non-empty-array<non-empty-string>|null  $uniqueBy
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 4200,
        'endLine' => 4235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertGetId' => 
      array (
        'name' => 'insertGetId',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4243,
            'endLine' => 4243,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4243,
                'endLine' => 4243,
                'startTokenPos' => 18094,
                'startFilePos' => 129440,
                'endTokenPos' => 18094,
                'endFilePos' => 129443,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4243,
            'endLine' => 4243,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert a new record and get the value of the primary key.
 *
 * @param  string|null  $sequence
 * @return int
 */',
        'startLine' => 4243,
        'endLine' => 4252,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertUsing' => 
      array (
        'name' => 'insertUsing',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4260,
            'endLine' => 4260,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4260,
            'endLine' => 4260,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the table using a subquery.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return int
 */',
        'startLine' => 4260,
        'endLine' => 4270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertOrIgnoreUsing' => 
      array (
        'name' => 'insertOrIgnoreUsing',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4278,
            'endLine' => 4278,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4278,
            'endLine' => 4278,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the table using a subquery while ignoring errors.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return int
 */',
        'startLine' => 4278,
        'endLine' => 4288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4295,
            'endLine' => 4295,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update records in the database.
 *
 * @return int<0, max>
 */',
        'startLine' => 4295,
        'endLine' => 4318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'updateFrom' => 
      array (
        'name' => 'updateFrom',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4327,
            'endLine' => 4327,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update records in a PostgreSQL database using the update from syntax.
 *
 * @return int
 *
 * @throws \\LogicException
 */',
        'startLine' => 4327,
        'endLine' => 4340,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'updateOrInsert' => 
      array (
        'name' => 'updateOrInsert',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4347,
            'endLine' => 4347,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4347,
                'endLine' => 4347,
                'startTokenPos' => 18738,
                'startFilePos' => 132904,
                'endTokenPos' => 18739,
                'endFilePos' => 132905,
              ),
            ),
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4347,
            'endLine' => 4347,
            'startColumn' => 55,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert or update a record matching the attributes, and fill it with values.
 *
 * @return bool
 */',
        'startLine' => 4347,
        'endLine' => 4364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'upsert' => 
      array (
        'name' => 'upsert',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4372,
            'endLine' => 4372,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4372,
            'endLine' => 4372,
            'startColumn' => 43,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4372,
                'endLine' => 4372,
                'startTokenPos' => 18876,
                'startFilePos' => 133559,
                'endTokenPos' => 18876,
                'endFilePos' => 133562,
              ),
            ),
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4372,
            'endLine' => 4372,
            'startColumn' => 67,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records or update the existing ones.
 *
 * @param  non-empty-string|non-empty-array<int, non-empty-string>  $uniqueBy
 * @return int
 */',
        'startLine' => 4372,
        'endLine' => 4411,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'increment' => 
      array (
        'name' => 'increment',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4422,
            'endLine' => 4422,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 4422,
                'endLine' => 4422,
                'startTokenPos' => 19171,
                'startFilePos' => 134933,
                'endTokenPos' => 19171,
                'endFilePos' => 134933,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4422,
            'endLine' => 4422,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4422,
                'endLine' => 4422,
                'startTokenPos' => 19180,
                'startFilePos' => 134951,
                'endTokenPos' => 19181,
                'endFilePos' => 134952,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4422,
            'endLine' => 4422,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Increment a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4422,
        'endLine' => 4429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'incrementEach' => 
      array (
        'name' => 'incrementEach',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4440,
            'endLine' => 4440,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4440,
                'endLine' => 4440,
                'startTokenPos' => 19251,
                'startFilePos' => 135517,
                'endTokenPos' => 19252,
                'endFilePos' => 135518,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4440,
            'endLine' => 4440,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Increment the given column\'s values by the given amounts.
 *
 * @param  array<string, float|int|numeric-string>  $columns
 * @param  array<string, mixed>  $extra
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4440,
        'endLine' => 4453,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'decrement' => 
      array (
        'name' => 'decrement',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4464,
            'endLine' => 4464,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 4464,
                'endLine' => 4464,
                'startTokenPos' => 19390,
                'startFilePos' => 136345,
                'endTokenPos' => 19390,
                'endFilePos' => 136345,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4464,
            'endLine' => 4464,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4464,
                'endLine' => 4464,
                'startTokenPos' => 19399,
                'startFilePos' => 136363,
                'endTokenPos' => 19400,
                'endFilePos' => 136364,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4464,
            'endLine' => 4464,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Decrement a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4464,
        'endLine' => 4471,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'decrementEach' => 
      array (
        'name' => 'decrementEach',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4482,
            'endLine' => 4482,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4482,
                'endLine' => 4482,
                'startTokenPos' => 19470,
                'startFilePos' => 136929,
                'endTokenPos' => 19471,
                'endFilePos' => 136930,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4482,
            'endLine' => 4482,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Decrement the given column\'s values by the given amounts.
 *
 * @param  array<string, float|int|numeric-string>  $columns
 * @param  array<string, mixed>  $extra
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4482,
        'endLine' => 4495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4503,
                'endLine' => 4503,
                'startTokenPos' => 19606,
                'startFilePos' => 137634,
                'endTokenPos' => 19606,
                'endFilePos' => 137637,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4503,
            'endLine' => 4503,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete records from the database.
 *
 * @param  mixed  $id
 * @return int
 */',
        'startLine' => 4503,
        'endLine' => 4519,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'truncate' => 
      array (
        'name' => 'truncate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run a "truncate" statement on the table.
 *
 * @return void
 */',
        'startLine' => 4526,
        'endLine' => 4533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newQuery' => 
      array (
        'name' => 'newQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new instance of the query builder.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 4540,
        'endLine' => 4543,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forSubQuery' => 
      array (
        'name' => 'forSubQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query instance for a sub-query.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 4550,
        'endLine' => 4553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getColumns' => 
      array (
        'name' => 'getColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the query builder\'s columns in a text-only array with all expressions evaluated.
 *
 * @return list<string>
 */',
        'startLine' => 4560,
        'endLine' => 4565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'raw' => 
      array (
        'name' => 'raw',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4573,
            'endLine' => 4573,
            'startColumn' => 25,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a raw database expression.
 *
 * @param  literal-string|int|float  $value
 * @return \\Illuminate\\Contracts\\Database\\Query\\Expression
 */',
        'startLine' => 4573,
        'endLine' => 4576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getUnionBuilders' => 
      array (
        'name' => 'getUnionBuilders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query builder instances that are used in the union of the query.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 4583,
        'endLine' => 4588,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getLimit' => 
      array (
        'name' => 'getLimit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "limit" value for the query or null if it\'s not set.
 *
 * @return mixed
 */',
        'startLine' => 4595,
        'endLine' => 4600,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getOffset' => 
      array (
        'name' => 'getOffset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "offset" value for the query or null if it\'s not set.
 *
 * @return mixed
 */',
        'startLine' => 4607,
        'endLine' => 4612,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getBindings' => 
      array (
        'name' => 'getBindings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current query value bindings in a flattened array.
 *
 * @return list<mixed>
 */',
        'startLine' => 4619,
        'endLine' => 4622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getRawBindings' => 
      array (
        'name' => 'getRawBindings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw array of bindings.
 *
 * @return array{
 *      select: list<mixed>,
 *      from: list<mixed>,
 *      join: list<mixed>,
 *      where: list<mixed>,
 *      groupBy: list<mixed>,
 *      having: list<mixed>,
 *      order: list<mixed>,
 *      union: list<mixed>,
 *      unionOrder: list<mixed>,
 * }
 */',
        'startLine' => 4639,
        'endLine' => 4642,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'setBindings' => 
      array (
        'name' => 'setBindings',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4653,
            'endLine' => 4653,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 4653,
                'endLine' => 4653,
                'startTokenPos' => 20124,
                'startFilePos' => 141564,
                'endTokenPos' => 20124,
                'endFilePos' => 141570,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4653,
            'endLine' => 4653,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the bindings on the query builder.
 *
 * @param  list<mixed>  $bindings
 * @param  "select"|"from"|"join"|"where"|"groupBy"|"having"|"order"|"union"|"unionOrder"  $type
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4653,
        'endLine' => 4662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addBinding' => 
      array (
        'name' => 'addBinding',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4673,
            'endLine' => 4673,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 4673,
                'endLine' => 4673,
                'startTokenPos' => 20199,
                'startFilePos' => 142108,
                'endTokenPos' => 20199,
                'endFilePos' => 142114,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4673,
            'endLine' => 4673,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a binding to the query.
 *
 * @param  mixed  $value
 * @param  "select"|"from"|"join"|"where"|"groupBy"|"having"|"order"|"union"|"unionOrder"  $type
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4673,
        'endLine' => 4689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'castBinding' => 
      array (
        'name' => 'castBinding',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4697,
            'endLine' => 4697,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cast the given binding value.
 *
 * @param  mixed  $value
 * @return mixed
 */',
        'startLine' => 4697,
        'endLine' => 4700,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'mergeBindings' => 
      array (
        'name' => 'mergeBindings',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4708,
            'endLine' => 4708,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge an array of bindings into our bindings.
 *
 * @param  self  $query
 * @return $this
 */',
        'startLine' => 4708,
        'endLine' => 4713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cleanBindings' => 
      array (
        'name' => 'cleanBindings',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4721,
            'endLine' => 4721,
            'startColumn' => 35,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all of the expressions from a list of bindings.
 *
 * @param  array<mixed>  $bindings
 * @return list<mixed>
 */',
        'startLine' => 4721,
        'endLine' => 4730,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'flattenValue' => 
      array (
        'name' => 'flattenValue',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4738,
            'endLine' => 4738,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a scalar type value from an unknown type of input.
 *
 * @param  mixed  $value
 * @return mixed
 */',
        'startLine' => 4738,
        'endLine' => 4741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'defaultKeyName' => 
      array (
        'name' => 'defaultKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default key name of the table.
 *
 * @return string
 */',
        'startLine' => 4748,
        'endLine' => 4751,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getConnection' => 
      array (
        'name' => 'getConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database connection instance.
 *
 * @return \\Illuminate\\Database\\ConnectionInterface
 */',
        'startLine' => 4758,
        'endLine' => 4761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ensureConnectionSupportsVectors' => 
      array (
        'name' => 'ensureConnectionSupportsVectors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the database connection supports vector queries.
 *
 * @return void
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 4770,
        'endLine' => 4775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getProcessor' => 
      array (
        'name' => 'getProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database query processor instance.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'startLine' => 4782,
        'endLine' => 4785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getGrammar' => 
      array (
        'name' => 'getGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query grammar instance.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'startLine' => 4792,
        'endLine' => 4795,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'useWritePdo' => 
      array (
        'name' => 'useWritePdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Use the "write" PDO connection when executing the query.
 *
 * @return $this
 */',
        'startLine' => 4802,
        'endLine' => 4807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'fetchUsing' => 
      array (
        'name' => 'fetchUsing',
        'parameters' => 
        array (
          'fetchUsing' => 
          array (
            'name' => 'fetchUsing',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4815,
            'endLine' => 4815,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Specify arguments for the PDOStatement::fetchAll / fetch functions.
 *
 * @param  mixed  ...$fetchUsing
 * @return $this
 */',
        'startLine' => 4815,
        'endLine' => 4820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'isQueryable' => 
      array (
        'name' => 'isQueryable',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4828,
            'endLine' => 4828,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the value is a query builder instance or a Closure.
 *
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 4828,
        'endLine' => 4834,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'clone' => 
      array (
        'name' => 'clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query.
 *
 * @return static
 */',
        'startLine' => 4841,
        'endLine' => 4844,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneWithout' => 
      array (
        'name' => 'cloneWithout',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4851,
            'endLine' => 4851,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query without the given properties.
 *
 * @return static
 */',
        'startLine' => 4851,
        'endLine' => 4858,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneWithoutBindings' => 
      array (
        'name' => 'cloneWithoutBindings',
        'parameters' => 
        array (
          'except' => 
          array (
            'name' => 'except',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4865,
            'endLine' => 4865,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query without the given bindings.
 *
 * @return static
 */',
        'startLine' => 4865,
        'endLine' => 4872,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4880,
            'endLine' => 4880,
            'startColumn' => 26,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the current SQL and bindings.
 *
 * @param  mixed  ...$args
 * @return $this
 */',
        'startLine' => 4880,
        'endLine' => 4889,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dumpRawSql' => 
      array (
        'name' => 'dumpRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the raw current SQL with embedded bindings.
 *
 * @return $this
 */',
        'startLine' => 4896,
        'endLine' => 4901,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Die and dump the current SQL and bindings.
 *
 * @return never
 */',
        'startLine' => 4908,
        'endLine' => 4911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ddRawSql' => 
      array (
        'name' => 'ddRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Die and dump the current SQL with embedded bindings.
 *
 * @return never
 */',
        'startLine' => 4918,
        'endLine' => 4921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4932,
            'endLine' => 4932,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4932,
            'endLine' => 4932,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle dynamic method calls into the method.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 4932,
        'endLine' => 4943,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\buildswheredateclauses::__call',
          ),
        ),
        'Illuminate\\Database\\Concerns\\BuildsQueries' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\buildsqueries::__call',
          ),
        ),
        'Illuminate\\Database\\Concerns\\ExplainsQueries' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\explainsqueries::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\ForwardsCalls' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\forwardscalls::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\database\\concerns\\buildswheredateclauses::__call' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses::__call',
        'illuminate\\database\\concerns\\buildsqueries::__call' => 'Illuminate\\Database\\Concerns\\BuildsQueries::__call',
        'illuminate\\database\\concerns\\explainsqueries::__call' => 'Illuminate\\Database\\Concerns\\ExplainsQueries::__call',
        'illuminate\\support\\traits\\forwardscalls::__call' => 'Illuminate\\Support\\Traits\\ForwardsCalls::__call',
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));