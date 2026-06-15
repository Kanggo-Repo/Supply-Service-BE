<?php declare(strict_types = 1);

// osfsl-C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ManagesFrequencies.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Scheduling\ManagesFrequencies
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6cceaa668d093e918914300b16144f8749d7aa919b4186d3c5eac975b3511489-8.3.31-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'filename' => 'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ManagesFrequencies.php',
      ),
    ),
    'namespace' => 'Illuminate\\Console\\Scheduling',
    'name' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
    'shortName' => 'ManagesFrequencies',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 690,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
    ),
    'immediateMethods' => 
    array (
      'cron' => 
      array (
        'name' => 'cron',
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
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 26,
            'endColumn' => 36,
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
 * The Cron expression representing the event\'s frequency.
 *
 * @param  string  $expression
 * @return $this
 */',
        'startLine' => 18,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'between' => 
      array (
        'name' => 'between',
        'parameters' => 
        array (
          'startTime' => 
          array (
            'name' => 'startTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'endTime' => 
          array (
            'name' => 'endTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 41,
            'endColumn' => 48,
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
 * Schedule the event to run between start and end time.
 *
 * @param  string  $startTime
 * @param  string  $endTime
 * @return $this
 */',
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'unlessBetween' => 
      array (
        'name' => 'unlessBetween',
        'parameters' => 
        array (
          'startTime' => 
          array (
            'name' => 'startTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'endTime' => 
          array (
            'name' => 'endTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 47,
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
 * Schedule the event to not run between start and end time.
 *
 * @param  string  $startTime
 * @param  string  $endTime
 * @return $this
 */',
        'startLine' => 44,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'inTimeInterval' => 
      array (
        'name' => 'inTimeInterval',
        'parameters' => 
        array (
          'startTime' => 
          array (
            'name' => 'startTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'endTime' => 
          array (
            'name' => 'endTime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 49,
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
 * Schedule the event to run between start and end time.
 *
 * @param  string  $startTime
 * @param  string  $endTime
 * @return \\Closure
 */',
        'startLine' => 56,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everySecond' => 
      array (
        'name' => 'everySecond',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every second.
 *
 * @return $this
 */',
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTwoSeconds' => 
      array (
        'name' => 'everyTwoSeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every two seconds.
 *
 * @return $this
 */',
        'startLine' => 90,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFiveSeconds' => 
      array (
        'name' => 'everyFiveSeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every five seconds.
 *
 * @return $this
 */',
        'startLine' => 100,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTenSeconds' => 
      array (
        'name' => 'everyTenSeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every ten seconds.
 *
 * @return $this
 */',
        'startLine' => 110,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFifteenSeconds' => 
      array (
        'name' => 'everyFifteenSeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every fifteen seconds.
 *
 * @return $this
 */',
        'startLine' => 120,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTwentySeconds' => 
      array (
        'name' => 'everyTwentySeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every twenty seconds.
 *
 * @return $this
 */',
        'startLine' => 130,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyThirtySeconds' => 
      array (
        'name' => 'everyThirtySeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every thirty seconds.
 *
 * @return $this
 */',
        'startLine' => 140,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'repeatEvery' => 
      array (
        'name' => 'repeatEvery',
        'parameters' => 
        array (
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 36,
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
 * Schedule the event to run multiple times per minute.
 *
 * @param  int<1, 59>  $seconds
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 153,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyMinute' => 
      array (
        'name' => 'everyMinute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every minute.
 *
 * @return $this
 */',
        'startLine' => 173,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTwoMinutes' => 
      array (
        'name' => 'everyTwoMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every two minutes.
 *
 * @return $this
 */',
        'startLine' => 183,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyThreeMinutes' => 
      array (
        'name' => 'everyThreeMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every three minutes.
 *
 * @return $this
 */',
        'startLine' => 193,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFourMinutes' => 
      array (
        'name' => 'everyFourMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every four minutes.
 *
 * @return $this
 */',
        'startLine' => 203,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFiveMinutes' => 
      array (
        'name' => 'everyFiveMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every five minutes.
 *
 * @return $this
 */',
        'startLine' => 213,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTenMinutes' => 
      array (
        'name' => 'everyTenMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every ten minutes.
 *
 * @return $this
 */',
        'startLine' => 223,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFifteenMinutes' => 
      array (
        'name' => 'everyFifteenMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every fifteen minutes.
 *
 * @return $this
 */',
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyThirtyMinutes' => 
      array (
        'name' => 'everyThirtyMinutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run every thirty minutes.
 *
 * @return $this
 */',
        'startLine' => 243,
        'endLine' => 246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'hourly' => 
      array (
        'name' => 'hourly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run hourly.
 *
 * @return $this
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'hourlyAt' => 
      array (
        'name' => 'hourlyAt',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 264,
            'endLine' => 264,
            'startColumn' => 30,
            'endColumn' => 36,
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
 * Schedule the event to run hourly at a given offset in the hour.
 *
 * @param  array|string|int<0, 59>|int<0, 59>[]  $offset
 * @return $this
 */',
        'startLine' => 264,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyOddHour' => 
      array (
        'name' => 'everyOddHour',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 275,
                'endLine' => 275,
                'startTokenPos' => 824,
                'startFilePos' => 5984,
                'endTokenPos' => 824,
                'endFilePos' => 5984,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 34,
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
 * Schedule the event to run every odd hour.
 *
 * @param  array|string|int  $offset
 * @return $this
 */',
        'startLine' => 275,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyTwoHours' => 
      array (
        'name' => 'everyTwoHours',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 286,
                'endLine' => 286,
                'startTokenPos' => 856,
                'startFilePos' => 6239,
                'endTokenPos' => 856,
                'endFilePos' => 6239,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 35,
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
 * Schedule the event to run every two hours.
 *
 * @param  array|string|int  $offset
 * @return $this
 */',
        'startLine' => 286,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyThreeHours' => 
      array (
        'name' => 'everyThreeHours',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 297,
                'endLine' => 297,
                'startTokenPos' => 888,
                'startFilePos' => 6495,
                'endTokenPos' => 888,
                'endFilePos' => 6495,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 297,
            'endLine' => 297,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Schedule the event to run every three hours.
 *
 * @param  array|string|int  $offset
 * @return $this
 */',
        'startLine' => 297,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everyFourHours' => 
      array (
        'name' => 'everyFourHours',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 308,
                'endLine' => 308,
                'startTokenPos' => 920,
                'startFilePos' => 6749,
                'endTokenPos' => 920,
                'endFilePos' => 6749,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 36,
            'endColumn' => 46,
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
 * Schedule the event to run every four hours.
 *
 * @param  array|string|int  $offset
 * @return $this
 */',
        'startLine' => 308,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'everySixHours' => 
      array (
        'name' => 'everySixHours',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 319,
                'endLine' => 319,
                'startTokenPos' => 952,
                'startFilePos' => 7001,
                'endTokenPos' => 952,
                'endFilePos' => 7001,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 35,
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
 * Schedule the event to run every six hours.
 *
 * @param  array|string|int  $offset
 * @return $this
 */',
        'startLine' => 319,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'daily' => 
      array (
        'name' => 'daily',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run daily.
 *
 * @return $this
 */',
        'startLine' => 329,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'at' => 
      array (
        'name' => 'at',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 24,
            'endColumn' => 28,
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
 * Schedule the command at a given time.
 *
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 340,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'dailyAt' => 
      array (
        'name' => 'dailyAt',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 29,
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
 * Schedule the event to run daily at a given time (10:00, 19:30, etc).
 *
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 351,
        'endLine' => 359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'twiceDaily' => 
      array (
        'name' => 'twiceDaily',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 368,
                'endLine' => 368,
                'startTokenPos' => 1104,
                'startFilePos' => 8028,
                'endTokenPos' => 1104,
                'endFilePos' => 8028,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '13',
              'attributes' => 
              array (
                'startLine' => 368,
                'endLine' => 368,
                'startTokenPos' => 1111,
                'startFilePos' => 8041,
                'endTokenPos' => 1111,
                'endFilePos' => 8042,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 44,
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
 * Schedule the event to run twice daily.
 *
 * @param  int<0, 23>  $first
 * @param  int<0, 23>  $second
 * @return $this
 */',
        'startLine' => 368,
        'endLine' => 371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'twiceDailyAt' => 
      array (
        'name' => 'twiceDailyAt',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 381,
                'endLine' => 381,
                'startTokenPos' => 1146,
                'startFilePos' => 8368,
                'endTokenPos' => 1146,
                'endFilePos' => 8368,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '13',
              'attributes' => 
              array (
                'startLine' => 381,
                'endLine' => 381,
                'startTokenPos' => 1153,
                'startFilePos' => 8381,
                'endTokenPos' => 1153,
                'endFilePos' => 8382,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 381,
                'endLine' => 381,
                'startTokenPos' => 1160,
                'startFilePos' => 8395,
                'endTokenPos' => 1160,
                'endFilePos' => 8395,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 60,
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
 * Schedule the event to run twice daily at a given offset.
 *
 * @param  int<0, 23>  $first
 * @param  int<0, 23>  $second
 * @param  int<0, 59>  $offset
 * @return $this
 */',
        'startLine' => 381,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'hourBasedSchedule' => 
      array (
        'name' => 'hourBasedSchedule',
        'parameters' => 
        array (
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 395,
            'endLine' => 395,
            'startColumn' => 42,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'hours' => 
          array (
            'name' => 'hours',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 395,
            'endLine' => 395,
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
 * Schedule the event to run at the given minutes and hours.
 *
 * @param  array|string|int<0, 59>  $minutes
 * @param  array|string|int<0, 23>  $hours
 * @return $this
 */',
        'startLine' => 395,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'weekdays' => 
      array (
        'name' => 'weekdays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on weekdays.
 *
 * @return $this
 */',
        'startLine' => 410,
        'endLine' => 413,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'weekends' => 
      array (
        'name' => 'weekends',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on weekends.
 *
 * @return $this
 */',
        'startLine' => 420,
        'endLine' => 423,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'mondays' => 
      array (
        'name' => 'mondays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Mondays.
 *
 * @return $this
 */',
        'startLine' => 430,
        'endLine' => 433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'tuesdays' => 
      array (
        'name' => 'tuesdays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Tuesdays.
 *
 * @return $this
 */',
        'startLine' => 440,
        'endLine' => 443,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'wednesdays' => 
      array (
        'name' => 'wednesdays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Wednesdays.
 *
 * @return $this
 */',
        'startLine' => 450,
        'endLine' => 453,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'thursdays' => 
      array (
        'name' => 'thursdays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Thursdays.
 *
 * @return $this
 */',
        'startLine' => 460,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'fridays' => 
      array (
        'name' => 'fridays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Fridays.
 *
 * @return $this
 */',
        'startLine' => 470,
        'endLine' => 473,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'saturdays' => 
      array (
        'name' => 'saturdays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Saturdays.
 *
 * @return $this
 */',
        'startLine' => 480,
        'endLine' => 483,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'sundays' => 
      array (
        'name' => 'sundays',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run only on Sundays.
 *
 * @return $this
 */',
        'startLine' => 490,
        'endLine' => 493,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'weekly' => 
      array (
        'name' => 'weekly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run weekly.
 *
 * @return $this
 */',
        'startLine' => 500,
        'endLine' => 505,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'weeklyOn' => 
      array (
        'name' => 'weeklyOn',
        'parameters' => 
        array (
          'dayOfWeek' => 
          array (
            'name' => 'dayOfWeek',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 1585,
                'startFilePos' => 11219,
                'endTokenPos' => 1585,
                'endFilePos' => 11223,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 42,
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
 * Schedule the event to run weekly on a given day and time.
 *
 * @param  mixed  $dayOfWeek
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 514,
        'endLine' => 519,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'monthly' => 
      array (
        'name' => 'monthly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run monthly.
 *
 * @return $this
 */',
        'startLine' => 526,
        'endLine' => 531,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'monthlyOn' => 
      array (
        'name' => 'monthlyOn',
        'parameters' => 
        array (
          'dayOfMonth' => 
          array (
            'name' => 'dayOfMonth',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 540,
                'endLine' => 540,
                'startTokenPos' => 1667,
                'startFilePos' => 11788,
                'endTokenPos' => 1667,
                'endFilePos' => 11788,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 540,
            'endLine' => 540,
            'startColumn' => 31,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 540,
                'endLine' => 540,
                'startTokenPos' => 1674,
                'startFilePos' => 11799,
                'endTokenPos' => 1674,
                'endFilePos' => 11803,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 540,
            'endLine' => 540,
            'startColumn' => 48,
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
 * Schedule the event to run monthly on a given day and time.
 *
 * @param  int<1, 31>  $dayOfMonth
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 540,
        'endLine' => 545,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'twiceMonthly' => 
      array (
        'name' => 'twiceMonthly',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 555,
                'endLine' => 555,
                'startTokenPos' => 1714,
                'startFilePos' => 12157,
                'endTokenPos' => 1714,
                'endFilePos' => 12157,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 555,
            'endLine' => 555,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => '16',
              'attributes' => 
              array (
                'startLine' => 555,
                'endLine' => 555,
                'startTokenPos' => 1721,
                'startFilePos' => 12170,
                'endTokenPos' => 1721,
                'endFilePos' => 12171,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 555,
            'endLine' => 555,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 555,
                'endLine' => 555,
                'startTokenPos' => 1728,
                'startFilePos' => 12182,
                'endTokenPos' => 1728,
                'endFilePos' => 12186,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 555,
            'endLine' => 555,
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
 * Schedule the event to run twice monthly at a given time.
 *
 * @param  int<1, 31>  $first
 * @param  int<1, 31>  $second
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 555,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'lastDayOfMonth' => 
      array (
        'name' => 'lastDayOfMonth',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 570,
                'endLine' => 570,
                'startTokenPos' => 1779,
                'startFilePos' => 12516,
                'endTokenPos' => 1779,
                'endFilePos' => 12520,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 570,
            'endLine' => 570,
            'startColumn' => 36,
            'endColumn' => 48,
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
 * Schedule the event to run on the last day of the month.
 *
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 570,
        'endLine' => 575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'daysOfMonth' => 
      array (
        'name' => 'daysOfMonth',
        'parameters' => 
        array (
          'days' => 
          array (
            'name' => 'days',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 583,
            'endLine' => 583,
            'startColumn' => 33,
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
 * Schedule the event to run on specific days of the month.
 *
 * @param  array<int<1, 31>>|int<1, 31>  ...$days
 * @return $this
 */',
        'startLine' => 583,
        'endLine' => 590,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'quarterly' => 
      array (
        'name' => 'quarterly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run quarterly.
 *
 * @return $this
 */',
        'startLine' => 597,
        'endLine' => 603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'quarterlyOn' => 
      array (
        'name' => 'quarterlyOn',
        'parameters' => 
        array (
          'dayOfQuarter' => 
          array (
            'name' => 'dayOfQuarter',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 612,
                'endLine' => 612,
                'startTokenPos' => 1961,
                'startFilePos' => 13568,
                'endTokenPos' => 1961,
                'endFilePos' => 13568,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 612,
            'endLine' => 612,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 612,
                'endLine' => 612,
                'startTokenPos' => 1968,
                'startFilePos' => 13579,
                'endTokenPos' => 1968,
                'endFilePos' => 13583,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 612,
            'endLine' => 612,
            'startColumn' => 52,
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
 * Schedule the event to run quarterly on a given day and time.
 *
 * @param  int  $dayOfQuarter
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 612,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'yearly' => 
      array (
        'name' => 'yearly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Schedule the event to run yearly.
 *
 * @return $this
 */',
        'startLine' => 625,
        'endLine' => 631,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'yearlyOn' => 
      array (
        'name' => 'yearlyOn',
        'parameters' => 
        array (
          'month' => 
          array (
            'name' => 'month',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 641,
                'endLine' => 641,
                'startTokenPos' => 2071,
                'startFilePos' => 14286,
                'endTokenPos' => 2071,
                'endFilePos' => 14286,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'dayOfMonth' => 
          array (
            'name' => 'dayOfMonth',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 641,
                'endLine' => 641,
                'startTokenPos' => 2078,
                'startFilePos' => 14303,
                'endTokenPos' => 2078,
                'endFilePos' => 14303,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 42,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => '\'0:0\'',
              'attributes' => 
              array (
                'startLine' => 641,
                'endLine' => 641,
                'startTokenPos' => 2085,
                'startFilePos' => 14314,
                'endTokenPos' => 2085,
                'endFilePos' => 14318,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
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
 * Schedule the event to run yearly on a given month, day, and time.
 *
 * @param  int  $month
 * @param  int<1, 31>|string  $dayOfMonth
 * @param  string  $time
 * @return $this
 */',
        'startLine' => 641,
        'endLine' => 647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'days' => 
      array (
        'name' => 'days',
        'parameters' => 
        array (
          'days' => 
          array (
            'name' => 'days',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 655,
            'endLine' => 655,
            'startColumn' => 26,
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
 * Set the days of the week the command should run on.
 *
 * @param  mixed  $days
 * @return $this
 */',
        'startLine' => 655,
        'endLine' => 660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'timezone' => 
      array (
        'name' => 'timezone',
        'parameters' => 
        array (
          'timezone' => 
          array (
            'name' => 'timezone',
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
            'startColumn' => 30,
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
 * Set the timezone the date should be evaluated on.
 *
 * @param  \\UnitEnum|\\DateTimeZone|string  $timezone
 * @return $this
 */',
        'startLine' => 668,
        'endLine' => 673,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'aliasName' => NULL,
      ),
      'spliceIntoPosition' => 
      array (
        'name' => 'spliceIntoPosition',
        'parameters' => 
        array (
          'position' => 
          array (
            'name' => 'position',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 682,
            'endLine' => 682,
            'startColumn' => 43,
            'endColumn' => 51,
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
            'startLine' => 682,
            'endLine' => 682,
            'startColumn' => 54,
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
 * Splice the given value into the given position of the expression.
 *
 * @param  int  $position
 * @param  string|int  $value
 * @return $this
 */',
        'startLine' => 682,
        'endLine' => 689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
        'currentClassName' => 'Illuminate\\Console\\Scheduling\\ManagesFrequencies',
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