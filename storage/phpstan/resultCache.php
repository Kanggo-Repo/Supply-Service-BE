<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1781513363,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.2.1',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80504,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php, lazy/Carbon/UnprotectedDatePeriod.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [database/migrations], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [config], viewDirectories: [], translationDirectories: [], checkModelProperties: true, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: true, checkConfigTypes: true, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app, C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config, C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes, C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories, C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders], level: 5, tmpDir: C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\storage\\phpstan, treatPhpDocTypesAsCertain: false}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app',
    1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config',
    2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes',
    3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories',
    4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/composer.lock' => '5f2e91832f7c396745aa686f5e00a74e8616ec8fbed0ccca620552d500042b57',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/ekaga/OneDrive/Documents/Code/K-3Repo/supply-service-be/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.20.0',
          'version' => '7.20.0.0',
          'reference' => '81c80677c9ec0ed4ef16b246167f11dec81a6e3d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.11.0',
          'version' => '7.11.0.0',
          'reference' => 'c987f8ce84b8434fa430795eca0f3430663da72b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.0',
          'version' => '2.5.0.0',
          'reference' => '4360e982f87f5f258bf872d094647791db2f4c8e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.11.0',
          'version' => '2.11.0.0',
          'reference' => 'bbb5e61349fa5cb822b3e87842b951088b76b81f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => 'eef7f87bab6f204eba3c39224d8075c70c637946',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.14.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laminas/laminas-diactoros' => 
        array (
          'pretty_version' => '3.8.0',
          'version' => '3.8.0.0',
          'reference' => '60c182916b2749480895601649563970f3f12ec4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laminas/laminas-diactoros',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/agent-detector' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => '90694b9256099591cf9e55d08c18ba7a00bf099f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/boost' => 
        array (
          'pretty_version' => 'v2.4.9',
          'version' => '2.4.9.0',
          'reference' => 'f0359e55f6c3782023a35baf1d3df817053d69e8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/boost',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.14.0',
          'version' => '13.14.0.0',
          'reference' => 'e60b1c817a9ef7da319e4007de6cfda5301a58c0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/mcp' => 
        array (
          'pretty_version' => 'v0.7.2',
          'version' => '0.7.2.0',
          'reference' => '08962a276357f89164f78b38407c08187ab26cfe',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/mcp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/octane' => 
        array (
          'pretty_version' => 'v2.17.5',
          'version' => '2.17.5.0',
          'reference' => '058ae4d7109eed40836dc42960f9388b9bf71f73',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/octane',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '519eecdefb9d5da362876376b52207c8f11b477c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/pao',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.1',
          'version' => '1.29.1.0',
          'reference' => '0770e9b7fafd50d4586881d456d6eb41c9247a80',
          'type' => 'project',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.18',
          'version' => '0.3.18.0',
          'reference' => 'a19af51bb144bf87f08397921fa619f85c7d4e72',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/roster' => 
        array (
          'pretty_version' => 'v0.5.1',
          'version' => '0.5.1.0',
          'reference' => '5089de7615f72f78e831590ff9d0435fed0102bb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/roster',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sentinel' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '972d9885d9d14312a118e9565c4e6ecc5e751ea1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/sentinel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/telescope' => 
        array (
          'pretty_version' => 'v5.20.0',
          'version' => '5.20.0.0',
          'reference' => '38ec6e6006a67e05e0c476c5f8ef3550b72e43d8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/telescope',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '4faba77764bd33411735936acdf30446d058c78b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.2',
          'version' => '2.8.2.0',
          'reference' => '59fb075d2101740c337c7216e3f32b36c204218b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.34.0',
          'version' => '3.34.0.0',
          'reference' => '2daaac3b0d4c83ea7ed5d8586e786f5d00f3540e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.4',
          'version' => '3.11.4.0',
          'reference' => 'e890471a3494740f7d9326d72ce6a8c559ffee60',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.4',
          'version' => '4.1.4.0',
          'reference' => '7da6c396d7ebe142bc857c20479d5e70a5e1aac7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nyholm/psr7' => 
        array (
          'pretty_version' => '1.8.2',
          'version' => '1.8.2.0',
          'reference' => 'a71f2b11690f4b24d099d6b16690a90ae14fc6f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../nyholm/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.7.2',
          'version' => '4.7.2.0',
          'reference' => '40b88b62ef8a7c6fcae5fc28f1fa747f601c131b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.2',
          'version' => '4.0.2.0',
          'reference' => '3fb0d02a91b9da504b139dc7ab2a31efb7c3215c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/message-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'dea9c8f2d25cc849391042b71e429c1a4bf82660',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.7',
          'version' => '12.5.7.0',
          'reference' => '186dab580576598076de6818596d12b61801880e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.28',
          'version' => '12.5.28.0',
          'reference' => '5895d05f5bf421ed230fbd76e1277e4b8955def4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1 || 2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
            1 => '^1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
            1 => '^1.1 || ^2.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
            1 => '1.0|2.0|3.0',
            2 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.23',
          'version' => '0.12.23.0',
          'reference' => '4dcc0f08047d52bbde475eda481146fd8e27e1a4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => '7d05781b13f7dec9043a629a21d086ed74582a15',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.8',
          'version' => '7.1.8.0',
          'reference' => '7c65c1e79836812819705b473a90c12399542485',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.1.2',
          'version' => '8.1.2.0',
          'reference' => '9d32c685773823b1983e256ae4ecd48a10d6e439',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.3',
          'version' => '7.0.3.0',
          'reference' => 'c5e21b5de653ce0a769fb36f5cdfcb5e7a32cf23',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => 'b164d3274d6537ab462591c5755f76a8f5b1aae9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd543b8ef219dcd8da262cbb958639a96bedba10e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.4',
          'version' => '6.0.4.0',
          'reference' => '82ff822c2edc46724be9f7411d3163021f602773',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sentry/sentry' => 
        array (
          'pretty_version' => '4.27.0',
          'version' => '4.27.0.0',
          'reference' => '1f0544cff8443ac1d25d6521487118e28381a1c2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sentry/sentry',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sentry/sentry-laravel' => 
        array (
          'pretty_version' => '4.25.1',
          'version' => '4.25.1.0',
          'reference' => '67efbdd74a752fcc1038676986b055a4df7d5084',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../sentry/sentry-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/enum' => 
        array (
          'pretty_version' => '3.13.0',
          'version' => '3.13.0.0',
          'reference' => 'f1a0f464ba909491a53e60a955ce84ad7cd93a2c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../spatie/enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-health' => 
        array (
          'pretty_version' => '1.40.0',
          'version' => '1.40.0.0',
          'reference' => '6fa735589c04fd99970b434fc22dddbdc716a264',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../spatie/laravel-health',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.93.1',
          'version' => '1.93.1.0',
          'reference' => 'd5552849801f2642aea710557463234b59ef65eb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'spatie/regex' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'd543de2019a0068e7b80da0ba24f1c51c7469303',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../spatie/regex',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '674fa3b98e21531dd040e613479f5f6fa8f32111',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '85095d2573eaefaf35e40b9513a9bf09f72cd217',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => 'b75663ed96cf4756e28e3105476f220f92886cc4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '50f59d1f3ca46d41ac911f97a78626b6756af35b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '8dd79d8af777ee6cba2fd4d98da6ffb839f3c0fa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => 'e4a2e29753c7801f7a8340e066cfa788f3bc8101',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'ccba7060602b7fed0b03c85bf025257f76d9ef32',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'e0be088d22278583a82da281886e8c3592fbf149',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'bc354f47c62301e990b7874fa662326368508e2c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '9df847980c436451f4f51d1284491bb4356dd989',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.12',
          'version' => '7.4.12.0',
          'reference' => '5cefb712a25f320579615ba9e1942abaeade7dff',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'a845722765c4f6b2ce88beaf4f4479975b186770',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '2888fcdc4dc2fd5f7c7397be78631e8af12e02b4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '14c5439eec4ccff081ac14eca2dc57feb2a66d92',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '8339098cae28673c15cce00d80734af0453054e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => 'fcec68d64f46dc84e1f6ffcf2c6dda40ff3143ad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-php86',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'f5804be144caceb570f6747519999636b664f24c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/psr-http-message-bridge' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '76f1a57719a4a04c0ea18678a6c9305b5dcb9da8',
          'type' => 'symfony-bridge',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/psr-http-message-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '3a162171bb008e5e0f15dce6581373a4c0e8390d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'd25d82433a80eba6aa0e6c24b61d7370d99e444a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '961683010db3b27ec6ebcd7308e6e1ee8fa7ffde',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.10',
          'version' => '7.4.10.0',
          'reference' => 'ada7578c30dd5feaa8259cff3e885069ea81ddde',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '0ab302977a952b42fd51475c4ebac81f8da0a95d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => '2676b524340abcfe4d6151ec698463cebafee439',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '9510c3966f749a1d1ff0059e1eabef6cc621e7fd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'a7ec3b1156faf8815db7683ec7c1e7338e6f977c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '9007ea6f45ecf352a9422b36644e4bfc039b9155',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\nesbot\\carbon\\lazy\\Carbon\\UnprotectedDatePeriod.php' => 'a5aa8ee50d1b999eddced70f94f8d759d7fe0575e7d583d94ea119483a6fc6ae',
    'phar://C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'fileinfo',
    14 => 'filter',
    15 => 'ftp',
    16 => 'gd',
    17 => 'hash',
    18 => 'iconv',
    19 => 'json',
    20 => 'ldap',
    21 => 'lexbor',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'mysqli',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcre',
    28 => 'pdo_mysql',
    29 => 'pdo_pgsql',
    30 => 'pdo_sqlite',
    31 => 'pgsql',
    32 => 'random',
    33 => 'readline',
    34 => 'redis',
    35 => 'session',
    36 => 'sockets',
    37 => 'sodium',
    38 => 'standard',
    39 => 'tidy',
    40 => 'tokenizer',
    41 => 'uri',
    42 => 'xml',
    43 => 'xmlreader',
    44 => 'xmlwriter',
    45 => 'zip',
    46 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$store_location_id.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'line' => 128,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 128,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 161,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'line' => 162,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 162,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
       'line' => 162,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 162,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
       'line' => 162,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 162,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$store.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 97,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'line' => 102,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 102,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<int,mixed>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
       'line' => 70,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<int,int<0, max>>::mapWithKeys() expects callable(int<0, max>, int): array<string, 0>, Closure(string): non-empty-array<string, 0> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,App\\Models\\MaterialChangeLog>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toIso8601String() on string.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type string. Use -> instead.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$email.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<int,string>::map() expects callable(string, int): array{field: string, label: string, from: mixed, to: mixed}, Closure(array, string): array{field: string, label: string, from: mixed, to: mixed} given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::restore().',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$deleted_at.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 101,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 101,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$deletedBy.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 127,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 127,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$deleted_by.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 129,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 129,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$deleted_by.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 146,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 146,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$deleted_by.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 153,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 153,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 154,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 154,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$email.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'line' => 155,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 155,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() expects callable(Illuminate\\Database\\Eloquent\\Model, int): array<string, mixed>, Closure(App\\Models\\StoreLocation): array<string, mixed> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 143,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $location of method App\\Services\\Store\\StoreMaterialSnapshotSynchronizer::detachLocation() expects App\\Models\\StoreLocation, Illuminate\\Database\\Eloquent\\Model given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'line' => 217,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 217,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() expects callable(Illuminate\\Database\\Eloquent\\Model, int): array<string, mixed>, Closure(App\\Models\\StoreLocation): array<string, mixed> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'line' => 248,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 247,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'line' => 308,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 308,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() expects callable(Illuminate\\Database\\Eloquent\\Model, int): array<string, mixed>, Closure(App\\Models\\StoreLocation): array<string, mixed> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $location of method App\\Http\\Controllers\\Api\\V1\\StoreLocationApiController::serializeLocation() expects App\\Models\\StoreLocation, Illuminate\\Database\\Eloquent\\Model given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$materialable.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'line' => 159,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 159,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'line' => 254,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 254,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 95,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 95,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 151,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 151,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $location of method App\\Http\\Controllers\\Api\\V1\\StoreSearchApiController::serializeLocation() expects App\\Models\\StoreLocation, Illuminate\\Database\\Eloquent\\Model given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 178,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 178,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Offset 0 on non-empty-list<string> on left side of ?? always exists and is not nullable.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 196,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 196,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.offset',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Api\\V1\\StoreSearchApiController::preferredLocationsForAutocomplete() should return Illuminate\\Support\\Collection<int, App\\Models\\StoreLocation> but returns Illuminate\\Database\\Eloquent\\Collection<int, Illuminate\\Database\\Eloquent\\Model>.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 209,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 209,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() expects callable(Illuminate\\Database\\Eloquent\\Model, int): array{location: App\\Models\\StoreLocation, score: 0|1|2|3|4|5|6|7|8|9|10|11}, Closure(App\\Models\\StoreLocation): array{location: App\\Models\\StoreLocation, score: 0|1|2|3|4|5|6|7|8|9|10|11} given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 212,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Api\\V1\\StoreSearchApiController::preferredLocationsForAutocomplete() should return Illuminate\\Support\\Collection<int, App\\Models\\StoreLocation> but returns Illuminate\\Database\\Eloquent\\Collection<int, Illuminate\\Database\\Eloquent\\Model>.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 244,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 244,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 258,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 258,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 258,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 258,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'line' => 266,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 266,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 149,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() expects callable(Illuminate\\Database\\Eloquent\\Model, int): array{id: int, store_id: int<0, max>, address: mixed, latitude: float|null, longitude: float|null, material_availabilities_count: int<0, max>}, Closure(App\\Models\\StoreLocation): array{id: int, store_id: int<0, max>, address: mixed, latitude: float|null, longitude: float|null, material_availabilities_count: int<0, max>} given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 149,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 155,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 155,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,App\\Models\\StoreLocation>::map() contains unresolvable type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 173,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 169,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 176,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 177,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<int,array<string, mixed>>::sortBy() contains unresolvable type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 182,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 169,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Api\\V1\\SupplyReferenceController::serializeAvailabilityMaterials() should return Illuminate\\Support\\Collection<int, array<string, mixed>> but returns Illuminate\\Support\\Collection<int, array{family: string, material_id: mixed, label: string, brand: mixed, type: mixed, price: float|int|null}>.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'line' => 300,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Template type TValue on class Illuminate\\Support\\Collection is not covariant. Learn more: <fg=cyan>https://phpstan.org/blog/whats-up-with-template-covariant</>',
       'nodeLine' => 300,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 71,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$material_snapshot_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 75,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 75,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 116,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 117,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 117,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\SupplyMaterial::createStoreLocationFromSnapshot() should return App\\Models\\StoreLocation|null but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\SupplyMaterial::createStoreLocationFromSnapshot() should return App\\Models\\StoreLocation|null but returns Illuminate\\Database\\Eloquent\\Model|null.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 158,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 158,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::first() expects (callable(Illuminate\\Database\\Eloquent\\Model, int): bool)|null, Closure(App\\Models\\StoreLocation): bool given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 161,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$full_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 165,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 165,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$resolved_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 166,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 166,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\SupplyMaterial::createStoreLocationFromSnapshot() should return App\\Models\\StoreLocation|null but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 171,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 171,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\SupplyMaterial::createStoreLocationFromSnapshot() should return App\\Models\\StoreLocation|null but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 174,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 174,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::trashed().',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php (in context of class App\\Models\\SupplyMaterial)',
       'line' => 196,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
       'traitFilePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php',
       'tip' => NULL,
       'nodeLine' => 196,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using === between array{} and array{} will always evaluate to true.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Identical',
       'identifier' => 'identical.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $key of method Illuminate\\Database\\Eloquent\\Model::getAttribute() expects string, int given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $attributes of method Illuminate\\Database\\Eloquent\\Model::fill() expects array<string, mixed>, array<int, mixed> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 71,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $location of method App\\Services\\Store\\StoreMaterialSnapshotSynchronizer::syncLocation() expects App\\Models\\StoreLocation, Illuminate\\Database\\Eloquent\\Model given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\StoreLocation::$material_snapshot_address.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Undefined variable: $location',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\RequestCorrelation.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_string() with string will always evaluate to true.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\RequestCorrelation.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\RequestCorrelation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Support\\Observability\\SentryEventContext::beforeSend() never returns null so it can be removed from the return type.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using !== between mixed and null will always evaluate to true.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'traitFilePath' => NULL,
       'tip' => 'Type null has already been eliminated from mixed.',
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical',
       'identifier' => 'notIdentical.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $user of method Sentry\\Event::setUser() expects Sentry\\UserDataBag|null, array<string, mixed> given.',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match expression does not handle remaining value: string',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 105,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.unhandled',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Faker\\Generator::state().',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type (array<string, mixed>) of method Database\\Factories\\UserFactory::definition() should be compatible with return type (array<model property of App\\Models\\User, mixed>) of method Illuminate\\Database\\Eloquent\\Factories\\Factory<App\\Models\\User>::definition()',
       'file' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'method.childReturnType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'usort',
        1 => 187,
      ),
      1 => 
      array (
        0 => 'sort',
        1 => 188,
      ),
      2 => 
      array (
        0 => 'sort',
        1 => 190,
      ),
      3 => 
      array (
        0 => 'sort',
        1 => 192,
      ),
      4 => 
      array (
        0 => 'ksort',
        1 => 193,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 51,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'sort',
        1 => 402,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Api\\V1\\StoreApiController',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Api\\V1\\StoreApiController',
        1 => 'serializeLocation',
        2 => 'App\\Http\\Controllers\\Api\\V1\\StoreApiController',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Api\\V1\\StoreLocationApiController',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Api\\V1\\StoreLocationApiController',
        1 => 'validationRules',
        2 => 'App\\Http\\Controllers\\Api\\V1\\StoreLocationApiController',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyHealthController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Console\\Kernel',
        1 => 'call',
        2 => 18,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Api\\V1\\UnitApiController',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\AssignRequestCorrelation.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Context',
        1 => 'add',
        2 => 22,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Context',
        1 => 'add',
        2 => 23,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Context',
        1 => 'add',
        2 => 24,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Context',
        1 => 'add',
        2 => 25,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Context',
        1 => 'add',
        2 => 28,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\BrickInstallationType.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BrickInstallationType',
        1 => 'casts',
        2 => 'App\\Models\\BrickInstallationType',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\HasMaterialChangeHistory.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        1 => 10,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        1 => 11,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialChangeLog.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\MaterialChangeLog',
        1 => 'casts',
        2 => 'App\\Models\\MaterialChangeLog',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialSetting.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\MaterialSetting',
        1 => 'casts',
        2 => 'App\\Models\\MaterialSetting',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MortarFormula.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\MortarFormula',
        1 => 'casts',
        2 => 'App\\Models\\MortarFormula',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\StoreLocation',
        1 => 'casts',
        2 => 'App\\Models\\StoreLocation',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreMaterialAvailability.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php' => 
  array (
    'PHPStan\\Rules\\Comparison\\ConstantConditionInTraitCollector' => 
    array (
      0 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):15',
        3 => NULL,
      ),
      1 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordCreate($model):15',
        3 => NULL,
      ),
      2 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):19',
        3 => NULL,
      ),
      3 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model):19',
        3 => NULL,
      ),
      4 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):23',
        3 => NULL,
      ),
      5 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordUpdate($model):23',
        3 => NULL,
      ),
      6 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):27',
        3 => NULL,
      ),
      7 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model):27',
        3 => NULL,
      ),
      8 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):31',
        3 => NULL,
      ),
      9 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordDelete($model):31',
        3 => NULL,
      ),
      10 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):35',
        3 => NULL,
      ),
      11 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model):35',
        3 => NULL,
      ),
      12 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class):39',
        3 => NULL,
      ),
      13 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordRestore($model):39',
        3 => NULL,
      ),
      14 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::created(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordCreate($model);
}):14',
        3 => NULL,
      ),
      15 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::updating(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model);
}):18',
        3 => NULL,
      ),
      16 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::updated(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordUpdate($model);
}):22',
        3 => NULL,
      ),
      17 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::deleting(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model);
}):26',
        3 => NULL,
      ),
      18 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::deleted(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordDelete($model);
}):30',
        3 => NULL,
      ),
      19 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::restoring(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->rememberOriginal($model);
}):34',
        3 => NULL,
      ),
      20 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'static::restored(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    app(\\App\\Services\\Material\\MaterialChangeRecorder::class)->recordRestore($model);
}):38',
        3 => NULL,
      ),
      21 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => '$this->hasMany(\\App\\Models\\MaterialChangeLog::class, \'material_id\'):45',
        3 => NULL,
      ),
      22 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => '$this->hasMany(\\App\\Models\\MaterialChangeLog::class, \'material_id\')->where(\'material_table\', $this->getTable()):45',
        3 => NULL,
      ),
      23 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => '$this->getTable():46',
        3 => NULL,
      ),
      24 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => '$this->hasMany(\\App\\Models\\MaterialChangeLog::class, \'material_id\')->where(\'material_table\', $this->getTable())->orderByDesc(\'edited_at\'):45',
        3 => NULL,
      ),
      25 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => '$this->hasMany(\\App\\Models\\MaterialChangeLog::class, \'material_id\')->where(\'material_table\', $this->getTable())->orderByDesc(\'edited_at\')->orderByDesc(\'id\'):45',
        3 => NULL,
      ),
      26 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'strtolower(class_basename($this)):53',
        3 => NULL,
      ),
      27 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'class_basename($this):53',
        3 => NULL,
      ),
      28 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_locations\'):16',
        3 => NULL,
      ),
      29 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_locations\'):16',
        3 => NULL,
      ),
      30 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_locations\'):16',
        3 => NULL,
      ),
      31 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::saving(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    if (!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_locations\')) {
        return;
    }
    if ($model->isDirty(\'store_location_id\')) {
        $location = static::findStoreLocationById($model->getAttribute(\'store_location_id\'));
        if ($location) {
            static::syncSnapshotFromLocation($model, $location);
        }
        return;
    }
    if (!$model->isDirty(\'store\') && !$model->isDirty(\'address\')) {
        return;
    }
    $location = static::resolveStoreLocationFromSnapshot($model) ?? static::createStoreLocationFromSnapshot($model);
    if ($location) {
        $model->setAttribute(\'store_location_id\', $location->id);
        static::syncSnapshotFromLocation($model, $location);
    }
}):15',
        3 => NULL,
      ),
      32 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'store_location_id\'):20',
        3 => NULL,
      ),
      33 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'store_location_id\'):20',
        3 => NULL,
      ),
      34 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'store_location_id\'):21',
        3 => NULL,
      ),
      35 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$location:23',
        3 => NULL,
      ),
      36 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::findStoreLocationById($model->getAttribute(\'store_location_id\')):21',
        3 => NULL,
      ),
      37 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::syncSnapshotFromLocation($model, $location):24',
        3 => NULL,
      ),
      38 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!$model->isDirty(\'store\') && !$model->isDirty(\'address\'):30',
        3 => NULL,
      ),
      39 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'store\'):30',
        3 => NULL,
      ),
      40 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'store\'):30',
        3 => NULL,
      ),
      41 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'address\'):30',
        3 => NULL,
      ),
      42 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->isDirty(\'address\'):30',
        3 => NULL,
      ),
      43 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanAndConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!$model->isDirty(\'store\'):30',
        3 => NULL,
      ),
      44 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanAndConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!$model->isDirty(\'address\'):30',
        3 => NULL,
      ),
      45 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanAndConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!$model->isDirty(\'store\') && !$model->isDirty(\'address\'):30',
        3 => NULL,
      ),
      46 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$location:37',
        3 => NULL,
      ),
      47 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->setAttribute(\'store_location_id\', $location->id):38',
        3 => NULL,
      ),
      48 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::resolveStoreLocationFromSnapshot($model):34',
        3 => NULL,
      ),
      49 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::createStoreLocationFromSnapshot($model):35',
        3 => NULL,
      ),
      50 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::syncSnapshotFromLocation($model, $location):39',
        3 => NULL,
      ),
      51 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):44',
        3 => NULL,
      ),
      52 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):44',
        3 => NULL,
      ),
      53 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):44',
        3 => NULL,
      ),
      54 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::saved(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    if (!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\')) {
        return;
    }
    static::syncAvailabilityLink($model);
}):43',
        3 => NULL,
      ),
      55 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):52',
        3 => NULL,
      ),
      56 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):52',
        3 => NULL,
      ),
      57 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::syncAvailabilityLink($model):48',
        3 => NULL,
      ),
      58 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):52',
        3 => NULL,
      ),
      59 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::deleted(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    if (!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\')) {
        return;
    }
    static::clearAvailabilityLinks($model);
}):51',
        3 => NULL,
      ),
      60 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):60',
        3 => NULL,
      ),
      61 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):60',
        3 => NULL,
      ),
      62 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::clearAvailabilityLinks($model):56',
        3 => NULL,
      ),
      63 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\'):60',
        3 => NULL,
      ),
      64 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::restored(function (\\Illuminate\\Database\\Eloquent\\Model $model): void {
    if (!\\Illuminate\\Support\\Facades\\Schema::hasTable(\'store_material_availabilities\')) {
        return;
    }
    static::syncAvailabilityLink($model);
}):59',
        3 => NULL,
      ),
      65 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::syncAvailabilityLink($model):64',
        3 => NULL,
      ),
      66 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array(\'store\', $model->getFillable(), true):70',
        3 => NULL,
      ),
      67 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array(\'store\', $model->getFillable(), true):70',
        3 => NULL,
      ),
      68 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getFillable():70',
        3 => NULL,
      ),
      69 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->setAttribute(\'store\', $location->store?->name):71',
        3 => NULL,
      ),
      70 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getFillable():74',
        3 => NULL,
      ),
      71 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array(\'address\', $model->getFillable(), true):74',
        3 => NULL,
      ),
      72 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array(\'address\', $model->getFillable(), true):74',
        3 => NULL,
      ),
      73 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->setAttribute(\'address\', $location->material_snapshot_address):75',
        3 => NULL,
      ),
      74 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0:81',
        3 => NULL,
      ),
      75 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'is_numeric($storeLocationId):81',
        3 => NULL,
      ),
      76 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'is_numeric($storeLocationId):81',
        3 => NULL,
      ),
      77 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\NumberComparisonOperatorsConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '(int) $storeLocationId <= 0:81',
        3 => NULL,
      ),
      78 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId):81',
        3 => NULL,
      ),
      79 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '(int) $storeLocationId <= 0:81',
        3 => NULL,
      ),
      80 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0:81',
        3 => NULL,
      ),
      81 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query()->with(\'store\'):85',
        3 => NULL,
      ),
      82 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query()->with(\'store\')->find((int) $storeLocationId):85',
        3 => NULL,
      ),
      83 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query():85',
        3 => NULL,
      ),
      84 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'store\'):92',
        3 => NULL,
      ),
      85 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$storeName === \'\':94',
        3 => NULL,
      ),
      86 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$storeName === \'\':94',
        3 => NULL,
      ),
      87 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($model->getAttribute(\'store\')):92',
        3 => NULL,
      ),
      88 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query()->with(\'store\')->whereHas(\'store\', function ($query) use ($storeName): void {
    $query->whereRaw(\'LOWER(TRIM(name)) = ?\', [$storeName]);
})->get():98',
        3 => NULL,
      ),
      89 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query()->with(\'store\'):98',
        3 => NULL,
      ),
      90 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$query->whereRaw(\'LOWER(TRIM(name)) = ?\', [$storeName]):101',
        3 => NULL,
      ),
      91 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query()->with(\'store\')->whereHas(\'store\', function ($query) use ($storeName): void {
    $query->whereRaw(\'LOWER(TRIM(name)) = ?\', [$storeName]);
}):98',
        3 => NULL,
      ),
      92 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->isEmpty():105',
        3 => NULL,
      ),
      93 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->isEmpty():105',
        3 => NULL,
      ),
      94 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreLocation::query():98',
        3 => NULL,
      ),
      95 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'address\'):109',
        3 => NULL,
      ),
      96 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$address !== \'\':111',
        3 => NULL,
      ),
      97 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$address !== \'\':111',
        3 => NULL,
      ),
      98 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]):113',
        3 => NULL,
      ),
      99 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array($address, array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]), true):113',
        3 => NULL,
      ),
      100 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->first(function (\\App\\Models\\StoreLocation $location) use ($address): bool {
    return in_array($address, array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]), true);
}):112',
        3 => NULL,
      ),
      101 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$matched:121',
        3 => NULL,
      ),
      102 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($model->getAttribute(\'address\')):109',
        3 => NULL,
      ),
      103 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->address):114',
        3 => NULL,
      ),
      104 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->formatted_address):115',
        3 => NULL,
      ),
      105 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->full_address):116',
        3 => NULL,
      ),
      106 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->resolved_address):117',
        3 => NULL,
      ),
      107 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count() === 1:126',
        3 => NULL,
      ),
      108 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count():126',
        3 => NULL,
      ),
      109 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count() === 1:126',
        3 => NULL,
      ),
      110 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->first():126',
        3 => NULL,
      ),
      111 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'trim((string) $model->getAttribute(\'store\')):131',
        3 => NULL,
      ),
      112 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'store\'):131',
        3 => NULL,
      ),
      113 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$rawStoreName === \'\':133',
        3 => NULL,
      ),
      114 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$rawStoreName === \'\':133',
        3 => NULL,
      ),
      115 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\Store::query()->whereRaw(\'LOWER(TRIM(name)) = ?\', [static::normalizeText($rawStoreName)])->first():137',
        3 => NULL,
      ),
      116 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\Store::query()->whereRaw(\'LOWER(TRIM(name)) = ?\', [static::normalizeText($rawStoreName)]):137',
        3 => NULL,
      ),
      117 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!$store:141',
        3 => NULL,
      ),
      118 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store:141',
        3 => NULL,
      ),
      119 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\Store::query()->create([\'name\' => $rawStoreName]):142',
        3 => NULL,
      ),
      120 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\Store::query():137',
        3 => NULL,
      ),
      121 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($rawStoreName):138',
        3 => NULL,
      ),
      122 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\Store::query():142',
        3 => NULL,
      ),
      123 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'trim((string) $model->getAttribute(\'address\')):147',
        3 => NULL,
      ),
      124 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'address\'):147',
        3 => NULL,
      ),
      125 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations()->with(\'store\')->get():149',
        3 => NULL,
      ),
      126 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations():149',
        3 => NULL,
      ),
      127 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations()->with(\'store\'):149',
        3 => NULL,
      ),
      128 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->isEmpty():151',
        3 => NULL,
      ),
      129 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->isEmpty():151',
        3 => NULL,
      ),
      130 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations():152',
        3 => NULL,
      ),
      131 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations()->create([\'address\' => $rawAddress !== \'\' ? $rawAddress : null]):152',
        3 => NULL,
      ),
      132 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$rawAddress !== \'\':153',
        3 => NULL,
      ),
      133 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$rawAddress !== \'\':153',
        3 => NULL,
      ),
      134 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($rawAddress):148',
        3 => NULL,
      ),
      135 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$normalizedAddress === \'\':157',
        3 => NULL,
      ),
      136 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$normalizedAddress === \'\':157',
        3 => NULL,
      ),
      137 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\TernaryOperatorConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count() === 1:158',
        3 => NULL,
      ),
      138 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count():158',
        3 => NULL,
      ),
      139 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->count() === 1:158',
        3 => NULL,
      ),
      140 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->first():158',
        3 => NULL,
      ),
      141 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]):162',
        3 => NULL,
      ),
      142 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'in_array($normalizedAddress, array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]), true):162',
        3 => NULL,
      ),
      143 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$locations->first(function (\\App\\Models\\StoreLocation $location) use ($normalizedAddress): bool {
    return in_array($normalizedAddress, array_filter([static::normalizeText($location->address), static::normalizeText($location->formatted_address), static::normalizeText($location->full_address), static::normalizeText($location->resolved_address)]), true);
}):161',
        3 => NULL,
      ),
      144 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$matched:170',
        3 => NULL,
      ),
      145 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->address):163',
        3 => NULL,
      ),
      146 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->formatted_address):164',
        3 => NULL,
      ),
      147 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->full_address):165',
        3 => NULL,
      ),
      148 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::normalizeText($location->resolved_address):166',
        3 => NULL,
      ),
      149 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations():174',
        3 => NULL,
      ),
      150 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$store->locations()->create([\'address\' => $rawAddress]):174',
        3 => NULL,
      ),
      151 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'strtolower(trim((string) $value)):181',
        3 => NULL,
      ),
      152 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'trim((string) $value):181',
        3 => NULL,
      ),
      153 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$text === \'\':183',
        3 => NULL,
      ),
      154 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\StrictComparisonOfDifferentTypesRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$text === \'\':183',
        3 => NULL,
      ),
      155 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'trim((string) preg_replace(\'/\\s+/\', \' \', $text)):187',
        3 => NULL,
      ),
      156 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'preg_replace(\'/\\s+/\', \' \', $text):187',
        3 => NULL,
      ),
      157 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getAttribute(\'store_location_id\'):194',
        3 => NULL,
      ),
      158 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\IfConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0 || $model->trashed():196',
        3 => NULL,
      ),
      159 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanNotConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'is_numeric($storeLocationId):196',
        3 => NULL,
      ),
      160 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeFunctionCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'is_numeric($storeLocationId):196',
        3 => NULL,
      ),
      161 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\NumberComparisonOperatorsConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '(int) $storeLocationId <= 0:196',
        3 => NULL,
      ),
      162 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId):196',
        3 => NULL,
      ),
      163 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '(int) $storeLocationId <= 0:196',
        3 => NULL,
      ),
      164 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0:196',
        3 => NULL,
      ),
      165 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->trashed():196',
        3 => NULL,
      ),
      166 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0:196',
        3 => NULL,
      ),
      167 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->trashed():196',
        3 => NULL,
      ),
      168 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\BooleanOrConstantConditionRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '!is_numeric($storeLocationId) || (int) $storeLocationId <= 0 || $model->trashed():196',
        3 => NULL,
      ),
      169 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => 'static::clearAvailabilityLinks($model):192',
        3 => NULL,
      ),
      170 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query()->create([\'store_location_id\' => (int) $storeLocationId, \'materialable_type\' => $model::class, \'materialable_id\' => (int) $model->getKey()]):200',
        3 => NULL,
      ),
      171 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getKey():203',
        3 => NULL,
      ),
      172 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query():200',
        3 => NULL,
      ),
      173 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query()->where(\'materialable_type\', $model::class)->where(\'materialable_id\', $model->getKey())->delete():209',
        3 => NULL,
      ),
      174 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query()->where(\'materialable_type\', $model::class):209',
        3 => NULL,
      ),
      175 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query()->where(\'materialable_type\', $model::class)->where(\'materialable_id\', $model->getKey()):209',
        3 => NULL,
      ),
      176 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '$model->getKey():211',
        3 => NULL,
      ),
      177 => 
      array (
        0 => 'PHPStan\\Rules\\Comparison\\ImpossibleCheckTypeStaticMethodCallRule',
        1 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
        2 => '\\App\\Models\\StoreMaterialAvailability::query():209',
        3 => NULL,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\SupplyMaterial',
        1 => 'casts',
        2 => 'App\\Models\\SupplyMaterial',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        3 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Unit.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Unit',
        1 => 'getMaterialTypes',
        2 => 'App\\Models\\Unit',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Unit',
        1 => 'casts',
        2 => 'App\\Models\\Unit',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\UnitMaterialType.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Spatie\\Health\\Health',
        1 => 'checks',
        2 => 24,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'filter',
        2 => 19,
      ),
      1 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestParameters',
        2 => 35,
      ),
      2 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestHeaders',
        2 => 45,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 55,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setTag',
        2 => 18,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setTag',
        2 => 19,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setTag',
        2 => 25,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setTag',
        2 => 28,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setUser',
        2 => 43,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'Sentry\\Event',
        ),
        1 => 'setExtra',
        2 => 56,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Support\\Supply\\SupplyMaterialRegistry',
        1 => 'models',
        2 => 'App\\Support\\Supply\\SupplyMaterialRegistry',
      ),
      1 => 
      array (
        0 => 'App\\Support\\Supply\\SupplyMaterialRegistry',
        1 => 'nameField',
        2 => 'App\\Support\\Supply\\SupplyMaterialRegistry',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 19,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 20,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 23,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 30,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 31,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 32,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 34,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 38,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 39,
      ),
      9 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 42,
      ),
      10 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 43,
      ),
      11 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 47,
      ),
      12 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 48,
      ),
      13 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 49,
      ),
      14 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 55,
      ),
      15 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 56,
      ),
      16 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 69,
      ),
      17 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 70,
      ),
      18 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 72,
      ),
      19 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 73,
      ),
      20 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 77,
      ),
      21 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 78,
      ),
      22 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 79,
      ),
      23 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'put',
        2 => 80,
      ),
      24 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 100,
      ),
      25 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 101,
      ),
      26 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 102,
      ),
      27 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 104,
      ),
      28 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 105,
      ),
      29 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 106,
      ),
      30 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 107,
      ),
      31 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 108,
      ),
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'welcome',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 5,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php' => 
  array (
    'fileHash' => '0063d6e5fcd3917f61ad3a07954a93a53daf7b9939c88a98aff293cc0f6b9d40',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand.php' => 
  array (
    'fileHash' => '38d0ed2e46424a262045172089b64725d1468050fb70aed717c5ad69acc0a93c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php' => 
  array (
    'fileHash' => 'dadf9e090d218bb44f9047ad1234bcf68ad527c74fc966975209b1ff0601ea7c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php' => 
  array (
    'fileHash' => 'd7df5b8ab6f853d2e808fad8524675321cac35c6ba9cd4bbaee5298edc4493ee',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php' => 
  array (
    'fileHash' => '3e2ff127b5f8affe8edcb2be9cedcf94cf305d2d1487b6e1293b14ddafa13410',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Helpers\\NumberHelper.php' => 
  array (
    'fileHash' => 'dfef9c697376700da48ddadf2777369a6a8746ca6f3dcdfc9a6288f8d965694a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php' => 
  array (
    'fileHash' => 'bc2e09cd04f1d98c5faa920244011a067950c94e09c9e4ed9f284eb1e4035c07',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php' => 
  array (
    'fileHash' => '883bd9d79b20d19de1b307228e917cc9176f7dc29e13f55fba24a707a952530b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php' => 
  array (
    'fileHash' => '2070af27f863a8b87befb5d0b8deb2d7a602f565ea2dc5e160ab5b966e7e8fc4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php' => 
  array (
    'fileHash' => '4458fc51ad9951a2a102a7b85bf8e8e6c54bfb0e74de7dbafe5b0c6537c3ade0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController.php' => 
  array (
    'fileHash' => 'ce16d634e97115d4e85b1b072b5c36ebaada3d89a57bbc327f0f1170334d6fd3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php' => 
  array (
    'fileHash' => '249f88889b544a713b64520ef02c5376c7e156ca58135638aed8552b58caaf98',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php' => 
  array (
    'fileHash' => 'a9f08774fcf0ab610683ac59ceb41542f7d376be49d8f836f84586db0dff3938',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php' => 
  array (
    'fileHash' => '8f1306855e33bdaa78264f966340dbaf88d9152187f90efb7c290ba770693669',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchRadiusSettingsApiController.php' => 
  array (
    'fileHash' => 'b56a6cc6db9f937be27d0432e9ef388b4287e0a04f46fd93fc63dcbdbed36b2b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyHealthController.php' => 
  array (
    'fileHash' => 'c6cc22173e4af790a501fefb35bf7d87444d42fca701bbd15d766900b474d907',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php' => 
  array (
    'fileHash' => '4d7f71341cb2bbd12e46a00b751de333561721bae940e93aaca853f69eefa1eb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php' => 
  array (
    'fileHash' => '9015ee093121fa3386cd87de4c96729c9b86c4eea1f8c1e65e7fc4d8a81031ae',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchRadiusSettingsApiController.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyHealthController.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\AssignRequestCorrelation.php' => 
  array (
    'fileHash' => 'e896000d392b69fdf5314912b1228d5eaf497cebcaded49f622b9b4e498825a5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\EnsureTrustedServiceCaller.php' => 
  array (
    'fileHash' => 'b0acac0d8a0597d574c2086a647e9ceb415bb506704d4874d2af3439c4c70bd4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\ResolveSupplyActorContext.php' => 
  array (
    'fileHash' => 'f4a4fe632daf367f711957f8bc01d63dd1da8ad83694807b3a8b152b23baff3f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\AppSetting.php' => 
  array (
    'fileHash' => 'f9142cc1d1f4a35267e121047e404c4f3aa9ca006bb5da10b007e1825b9823be',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchRadiusSettingsApiController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php' => 
  array (
    'fileHash' => '8d69832a7915a3fab7ecef3293c39a094ad5a309beebf4dc87eacb8470f1ab58',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\BrickInstallationType.php' => 
  array (
    'fileHash' => 'f3d54489726a51287580afe24ccda6606bac9fee4aa50a4bb7ff7f66b66a51b3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php' => 
  array (
    'fileHash' => '15ff3537bb320bd94acbf30762df1b1c434779817219003fa7da7010cfedb26b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php' => 
  array (
    'fileHash' => 'cb023adca1f395d62c8e24861c5cd493947eec26d2de12c26ea3eb433f22852d',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php' => 
  array (
    'fileHash' => 'c1a3f9ff27b4efb352498f8029732790525fd4b56e9e634410d535e60f1abef3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\HasMaterialChangeHistory.php' => 
  array (
    'fileHash' => '17f86785e2a81386cb68b8d5403b67f731c04701afe66c742a2b5e8b92afb041',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php',
      13 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      14 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
      15 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php',
      16 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php',
      17 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php' => 
  array (
    'fileHash' => '276a9ae9a270ea9bdee654ab2ad5b6ecbd21d93d57da890b3fe22cd62438f2fe',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php',
      13 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      14 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
      15 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php',
      16 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php',
      17 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php' => 
  array (
    'fileHash' => 'd686fe2a39fd42ebe14483618ce7166145c79a6b6ac488e780cbfe3d8313f568',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php' => 
  array (
    'fileHash' => 'b2d76873afc5c38ac01710caa43ad63ffb8541a8290cfe390f66047dc2ed773a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialChangeLog.php' => 
  array (
    'fileHash' => '58279bc9c025a17633bcfaa3bae8663d43754593e43357ce351ad4da0b62f3f5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialChangeRecorder.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialSetting.php' => 
  array (
    'fileHash' => 'cbcd6e505986fb57950fc826d6f972af7f1b20f0fb15ab906b73e1b4ab72d53a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Unit.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MortarFormula.php' => 
  array (
    'fileHash' => 'e96b5a2c644606e27a045feef353b454fdbf6182ed6a3a862f168e02fb3b6488',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php' => 
  array (
    'fileHash' => '7ca6ca41d3fa8f5bd139902d0460d381ab629d842791e9bf34febfa678de5dea',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php' => 
  array (
    'fileHash' => 'cd0267868def756ed224ea6edc79b9e7ab1e6a3e1ca41a60babc1729f220d85f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php' => 
  array (
    'fileHash' => '09dda3c56fd952452fd1ffbce4f213cf27b833469431378eda067cfa93b64b66',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php' => 
  array (
    'fileHash' => 'b0de2b48d0369159d29f0988d864349aeee584ee5b59d2a4ec6bef0bd52269d5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php' => 
  array (
    'fileHash' => 'aef9209a577c8157a179b9cd01e5187b6115da5ddc241c5f9caaa9dafa19bce0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php' => 
  array (
    'fileHash' => '9b1e10a87b4c197aba09c00fe90138fb64346aed632dfa4e8c98d6bbc97f77b2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreFactory.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php' => 
  array (
    'fileHash' => '96f3c1fde793654d514ab27c8e8c41be392f4d9d403689038ea5e01319c1fea0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreMaterialAvailability.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
      13 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php',
      14 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreMaterialAvailability.php' => 
  array (
    'fileHash' => 'd5f9729fb10163461d6a4ac23224507cfc1d6e6d3172394a034becf8a24a5c59',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php' => 
  array (
    'fileHash' => '6d8087bb09a886882e9bf2a35304526db9a3d4ed7fbcd8513272ea9537513a2a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php',
      13 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php',
      14 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php',
      15 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php',
      16 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Unit.php' => 
  array (
    'fileHash' => '923207c6587954a41724ff216924984b7e0c42a5221ea2bfb04580bb6646b2a6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\UnitMaterialType.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Repositories\\UnitRepository.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\UnitMaterialType.php' => 
  array (
    'fileHash' => 'f94d36250297fc39a7134644e0da05154705ce099b7adbd47b8db2d1d9b70846',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Unit.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\User.php' => 
  array (
    'fileHash' => '1dca1344e88308fe405ae050f02bd65081a649de65ec86f2ee2beabbb4706afa',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\ResolveSupplyActorContext.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialChangeLog.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\TelescopeServiceProvider.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\auth.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '623a55923adf8eed0a09361c5b492b58ec186a145b4899505163f0a29bf4d42f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    'fileHash' => '76c3e4c8ad35d1893c55032afbd3c92aec19d808f1aeac702086291b7151bd3e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Repositories\\UnitRepository.php' => 
  array (
    'fileHash' => '60a747728652a2b8a40642e525b489f39df26603ae56f077a6c15218f46f54a5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialChangeRecorder.php' => 
  array (
    'fileHash' => 'b99c0a6792ed2e724e5b41794781cd97911c9936074931b455c15c2dc04e60c2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php' => 
  array (
    'fileHash' => '0cdacd083886738a876231358b5aab9be18ce5a1e3ed8e622e5f5af88c3cf5a6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php' => 
  array (
    'fileHash' => '8498cb8c4c862063c34d7e2c859dee1d7e1f7ce80a207a35d55d79d1067819da',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Material\\MaterialAuditContext.php' => 
  array (
    'fileHash' => 'b3e418be4290a54014497ce0c4e5505fc12690ed2a50c01ff502370e8737e8d8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\ResolveSupplyActorContext.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialChangeRecorder.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\RequestCorrelation.php' => 
  array (
    'fileHash' => '4bf231352209f77acfa914ffe528beddb4791cfee3ec027d9f03c11f89784f49',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\AssignRequestCorrelation.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\ResolveSupplyActorContext.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php' => 
  array (
    'fileHash' => '828f1196e9df9c4c7146535bab5ce415b6f9554e2ad0af1093e61eeadb9fddb2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\sentry.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\StoreSnapshotNormalizer.php' => 
  array (
    'fileHash' => '2fff4a41fc3a331aef1a9e7a418ec93e34cbdc7c1fcea58c01e5f41535222193',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialLabelResolver.php' => 
  array (
    'fileHash' => 'ee8d839d0437bdb439d03bbd22d46351266bfd914d8a62f76153b1431d529d15',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php' => 
  array (
    'fileHash' => 'f0b1da35c5a81c649f9afbc9f43539df55d9506509cb29d2f8ecf1c27a70506b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand.php',
      2 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php',
      3 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php',
      4 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php',
      5 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php',
      6 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php',
      7 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php',
      8 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php',
      9 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController.php',
      10 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php',
      11 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php',
      12 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php',
      13 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php',
      14 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\app.php' => 
  array (
    'fileHash' => 'ff348ac14b10294f302d25179dc80c45c358cfe29b3df0ab15d00e5625c83d19',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\auth.php' => 
  array (
    'fileHash' => 'c7e204e9785c9f596d66fb884b493f658f2327f157646bdb4088efd6b3a7773f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\cache.php' => 
  array (
    'fileHash' => 'ee4ad2bba1edfcff52e9599f37371f2370d0b167cc226ce72d46cdf6edf2dc55',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\database.php' => 
  array (
    'fileHash' => '02cd62f589b43d33f9ceac740705dac1dec9740eb2bb9e6e202d4b66a15244cf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\filesystems.php' => 
  array (
    'fileHash' => 'ba7060d7a23e490c3ce830656f6d24ad3ccf5b868e3293f2a12e411959dc5635',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\health.php' => 
  array (
    'fileHash' => 'f3e77d7d5fed1d38fbcfc0a23fd608df2e6dba4b4cbec96d00d4a8ea3f5934d1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\logging.php' => 
  array (
    'fileHash' => '299ec1ba5b5a803c8e20f666ae7628e442e856cc2ff7ac9e2adb17b97e8ad63b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\mail.php' => 
  array (
    'fileHash' => 'c43ff49a31c5f32ce21eb7159f2a4b3cd2f4074eaed5838d265646dbfedd3474',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\octane.php' => 
  array (
    'fileHash' => '586ea49e23b837e6901f75becd1bfeb10362270f108327eac7b93c6fce9c809e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\queue.php' => 
  array (
    'fileHash' => '6101774da7c8b79af46d0028f2b8b31a484c3f7eda10b76e5b27b6093ad364a4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\sentry.php' => 
  array (
    'fileHash' => '84011bdc001a23a599d69339b16582bbce048d275915c79481f436f4ff66c1e2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\services.php' => 
  array (
    'fileHash' => '8258c4487eb1d73a97e569eb0e411e3f25368044812df4cba807860432be1d92',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\session.php' => 
  array (
    'fileHash' => '64272cfbef6f47c65bf857f1c5b1e853700c0d0278de46b86663fd83ef4aeed8',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\supply_security.php' => 
  array (
    'fileHash' => 'eb9b1c6d778776a55ec0bfb60b96bb248c16023b9545b2ecf8d50d56b95b9ae1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\config\\telescope.php' => 
  array (
    'fileHash' => '36fc9b65d212d6a681d2a015f4883469ef4cf18883ba3ebc4b37dfd5019a60ec',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php' => 
  array (
    'fileHash' => '9aba44b56e957a4c6c261ef9780144cc8b031714de990479c88a3d2d277070e6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php' => 
  array (
    'fileHash' => 'cd9951dd4b73f719f0f9dc5b032715b02f556dd9650d192d55a622ba3a2acc67',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreFactory.php' => 
  array (
    'fileHash' => '190c1a09ff049694fd2c6d20a2850066c06ef66d8056dafeac5e5d8f90c184c1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php' => 
  array (
    'fileHash' => '2d65a545378890157620af69937d24af838b1554168ea75172aaf0b8062865ba',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php',
      1 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php' => 
  array (
    'fileHash' => '5ae1561c6b7a3de3a7e50d9997b4812b965372b89e4be245e58eaab522e3c3df',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreMaterialAvailability.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php' => 
  array (
    'fileHash' => '50bdc543f1b09d1a57260be55ad0e1a68aee4b34f63e1109dc94d9bcd3080526',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\User.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\BrickInstallationTypeSeeder.php' => 
  array (
    'fileHash' => '7907ae5dd03d103b3b9788dfaa3acc363efe13fce0e5b6f0ef4323c2568a9eca',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    'fileHash' => '6a6d6bfc1401f1602338953e13c98c90c0ce9a047cd11fad5026e6df9611cc94',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\MortarFormulaSeeder.php' => 
  array (
    'fileHash' => 'e80352178ebf7651400414533f2be1534b7f0ed54018e6bce5ecb2b2652ddb40',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\DatabaseSeeder.php',
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\api.php' => 
  array (
    'fileHash' => 'beb4a936dbbc4d4c33d8fd286adf7caa5baad073f850ae458304b9553ad794fc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\routes\\web.php' => 
  array (
    'fileHash' => '248c7eeeb43bb61ee4fb6603e52b44843c64f72a841d671bcd41871aab23f970',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\AutoAssignMaterialsToStoreLocationsCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\BackfillStoreMaterialAvailabilityCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RegisterStoresFromMaterialsCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\RegisterStoresFromMaterialsCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildSummary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'store' => 'App\\Models\\Store',
              'storelocation' => 'App\\Models\\StoreLocation',
              'storesnapshotnormalizer' => 'App\\Support\\Supply\\StoreSnapshotNormalizer',
              'supplymaterialregistry' => 'App\\Support\\Supply\\SupplyMaterialRegistry',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\RepairStoreMaterialAvailabilityCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ResyncStoreLocationMaterialAddressesCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Helpers\\NumberHelper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Helpers\\NumberHelper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'ACCURACY_DECIMALS',
               'value' => '11',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Standar akurasi internal: 11 digit desimal. Dipakai untuk semua
     * perhitungan presisi tinggi (mis. volume m3) agar konsisten lintas service.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'format',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format angka untuk tampilan umum.
     * Default: 2 desimal, nol di belakang disembunyikan.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimalSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'thousandsSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatResult',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format angka untuk hasil perhitungan (lebih detail).
     * Default: 6 desimal, nol di belakang disembunyikan.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimalSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'thousandsSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatFixed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format angka dengan behavior lama (number_format + trim nol).
     * Cocok untuk currency/angka yang tidak butuh presisi panjang.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimalSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'thousandsSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatPlain',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format angka tanpa notasi ilmiah, menjaga presisi float.
     * Default: desimal titik, tanpa pemisah ribuan.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'maxDecimals',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimalSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'thousandsSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Normalisasi angka sederhana (cast/round).
     * Dipertahankan untuk kebutuhan API, bukan untuk perhitungan internal.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'accurate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bulatkan angka ke standar akurasi (default 11 desimal) lalu kembalikan float.
     * Menerima string/angka berformat Indonesia maupun US, dan mengembalikan 0.0
     * untuk nilai null/invalid. Inilah satu-satunya sumber pembulatan presisi
     * tinggi—panggil ini alih-alih menulis round($x, 11) di banyak tempat.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'truncate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Potong digit desimal tanpa pembulatan.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatTruncated',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format angka hasil truncation tanpa pembulatan.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimals',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'decimalSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'thousandsSeparator',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currency',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format untuk currency (Rupiah)
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'weight',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format untuk weight (Kg)
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'volume',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Format untuk volume (M3)
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'number',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'parse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parse input value to float (smart detection).
     * Returns 0.0 if invalid or null.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'parseNullable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parse input user menjadi float standard.
     * Support format Indonesia (1.234,56) dan US (1,234.56).
     * Fleksibel mengenali titik dan koma.
     */',
             'namespace' => 'App\\Helpers',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\DashboardSummaryApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\MaterialCatalogApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\MaterialHistoryApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'restoreService',
               'type' => 'App\\Services\\Material\\MaterialHistoryRestoreService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\MaterialRecycleBinApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\MaterialSettingsApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\StoreApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'snapshotSynchronizer',
               'type' => 'App\\Services\\Store\\StoreMaterialSnapshotSynchronizer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sidebarSummary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreLocationApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\StoreLocationApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'snapshotSynchronizer',
               'type' => 'App\\Services\\Store\\StoreMaterialSnapshotSynchronizer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materials',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\StoreSearchApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'locationsByStore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'allStores',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addressesByStore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'quickCreate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\StoreSearchRadiusSettingsApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\StoreSearchRadiusSettingsApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyHealthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\SupplyHealthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'resultStore',
               'type' => 'Spatie\\Health\\ResultStores\\ResultStore',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\SupplyReferenceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\SupplyReferenceController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materials',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialsByIds',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filterMetadata',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stores',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeLocations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'locations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'locationAvailability',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bulkLocationAvailability',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'brickInstallationTypes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mortarFormulas',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Api\\V1\\UnitApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\UnitApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'App\\Repositories\\UnitRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMaterialTypes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGrouped',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\AssignRequestCorrelation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\AssignRequestCorrelation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\EnsureTrustedServiceCaller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EnsureTrustedServiceCaller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Http\\Middleware\\ResolveSupplyActorContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\ResolveSupplyActorContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\AppSetting.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\AppSetting',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getValue',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFloat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'putValue',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Brick.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Brick',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'PRICE_DECIMALS',
               'value' => '2',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Stored decimals for both price columns (decimal(15, 2)).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'numberhelper' => 'App\\Helpers\\NumberHelper',
              'brickfactory' => 'Database\\Factories\\BrickFactory',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isKubikPackage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'packageType',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recomputePricing',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Keep the pricing invariant price_per_piece = comparison_price_per_m3 * package_volume.
     * The source-of-truth field depends on the package mode, so only the derived
     * field is recomputed:
     *  - kubik  -> comparison (per m3) is entered, price_per_piece is derived.
     *  - eceran -> price_per_piece is entered, comparison (per m3) is derived.
     *
     * @return array{price_per_piece?: float, comparison_price_per_m3?: float}
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'numberhelper' => 'App\\Helpers\\NumberHelper',
              'brickfactory' => 'Database\\Factories\\BrickFactory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'packageType',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'pricePerPiece',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comparison',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'volume',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Database\\Factories\\BrickFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\BrickInstallationType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BrickInstallationType',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cat.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Cat',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Cement.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Cement',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Database\\Factories\\CementFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Ceramic.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Ceramic',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\HasMaterialChangeHistory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootHasMaterialChangeHistory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialChangeLogs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialHistoryKind',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Concerns\\SyncsStoreLocationSnapshot.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootSyncsStoreLocationSnapshot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'syncSnapshotFromLocation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\StoreLocation',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findStoreLocationById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?App\\Models\\StoreLocation',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'storeLocationId',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveStoreLocationFromSnapshot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?App\\Models\\StoreLocation',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createStoreLocationFromSnapshot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?App\\Models\\StoreLocation',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalizeText',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'syncAvailabilityLink',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clearAvailabilityLinks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\KasaGypsum.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\KasaGypsum',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Material.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Material',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialChangeLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MaterialChangeLog',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'labelForField',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'field',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MaterialSetting.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MaterialSetting',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMaterialLabel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'material_type\', \'is_visible\', \'display_order\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\MortarFormula.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\MortarFormula',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Nat.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Nat',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Paku.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Paku',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\PakuTembak.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\PakuTembak',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Sand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Sand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'COMPARISON_DECIMALS',
               'value' => '2',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Stored decimals for comparison_price_per_m3 (column is decimal(15, 2)).
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'numberhelper' => 'App\\Helpers\\NumberHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recomputeComparison',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Comparison price per m3 is, by definition, package price divided by
     * package volume. Returns null when it cannot be derived (no price or
     * non-positive volume) so callers leave the existing value untouched.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'numberhelper' => 'App\\Helpers\\NumberHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'volume',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Steel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Steel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\SupplyMaterial',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Store.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Store',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Database\\Factories\\StoreFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'locations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialAvailabilities',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'name\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreLocation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\StoreLocation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Database\\Factories\\StoreLocationFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialAvailabilities',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fullAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolvedAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialSnapshotAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'store_id\', \'address\', \'district\', \'city\', \'province\', \'latitude\', \'longitude\', \'place_id\', \'formatted_address\', \'contact_name\', \'contact_phone\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\StoreMaterialAvailability.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\StoreMaterialAvailability',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Database\\Factories\\StoreMaterialAvailabilityFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeLocation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'store_location_id\', \'materialable_type\', \'materialable_id\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\SupplyMaterial.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\SupplyMaterial',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'App\\Models\\Concerns\\HasMaterialChangeHistory',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        3 => 'App\\Models\\Concerns\\SyncsStoreLocationSnapshot',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeLocation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deletedBy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialAvailabilities',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'material_name\', \'cement_name\', \'sand_name\', \'cat_name\', \'nat_name\', \'photo\', \'brand\', \'type\', \'sub_brand\', \'color\', \'color_code\', \'color_name\', \'code\', \'form\', \'package_unit\', \'package_weight_gross\', \'package_weight_net\', \'package_weight\', \'package_content\', \'package_volume\', \'package_type\', \'packaging\', \'pieces_per_package\', \'coverage_per_package\', \'volume\', \'volume_unit\', \'dimension_length\', \'dimension_length_mm\', \'dimension_width\', \'dimension_height\', \'dimension_thickness\', \'dimension_body_diameter\', \'dimension_head_diameter\', \'surface\', \'quality\', \'term\', \'store\', \'address\', \'short_address\', \'price_per_piece\', \'price_per_package\', \'package_price\', \'purchase_price\', \'price_unit\', \'comparison_price_per_kg\', \'comparison_price_per_m2\', \'comparison_price_per_m\', \'comparison_price\', \'comparison_price_per_m3\', \'material_kind\', \'mesiu_code\', \'mesiu_size\', \'mesiu_content\', \'paku_code\', \'paku_size\', \'paku_content\', \'store_location_id\', \'deleted_by\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\Unit.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Unit',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'materialTypes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeForMaterial',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'materialType',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMaterialTypes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMaterialTypesWithLabels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<array{value: string, label: string}>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGroupedByMaterialType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, array<int, array<string, mixed>>>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'code\', \'name\', \'package_weight\', \'description\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\UnitMaterialType.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\UnitMaterialType',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'unit_id\', \'material_type\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'name\', \'email\', \'password\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '[\'password\', \'remember_token\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'databasecheck' => 'Spatie\\Health\\Checks\\Checks\\DatabaseCheck',
              'health' => 'Spatie\\Health\\Facades\\Health',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'databasecheck' => 'Spatie\\Health\\Checks\\Checks\\DatabaseCheck',
              'health' => 'Spatie\\Health\\Facades\\Health',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Providers\\TelescopeServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TelescopeServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hideSensitiveRequestDetails',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Repositories\\UnitRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Repositories\\UnitRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUnits',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAllUnits',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findUnit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Models\\Unit',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createUnit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Unit',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateUnit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Unit',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'unit',
               'type' => 'App\\Models\\Unit',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteUnit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'unit',
               'type' => 'App\\Models\\Unit',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUnitsGroupedByMaterialType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, array<int, array<string, mixed>>>
     */',
             'namespace' => 'App\\Repositories',
             'uses' => 
            array (
              'unit' => 'App\\Models\\Unit',
              'lengthawarepaginator' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMaterialTypesWithLabels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<array{value: string, label: string}>
     */',
             'namespace' => 'App\\Repositories',
             'uses' => 
            array (
              'unit' => 'App\\Models\\Unit',
              'lengthawarepaginator' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialChangeRecorder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Material\\MaterialChangeRecorder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'originalSnapshots',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, array<string, mixed>>
     */',
             'namespace' => 'App\\Services\\Material',
             'uses' => 
            array (
              'materialchangelog' => 'App\\Models\\MaterialChangeLog',
              'materialauditcontext' => 'App\\Support\\Material\\MaterialAuditContext',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'schema' => 'Illuminate\\Support\\Facades\\Schema',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rememberOriginal',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordCreate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordUpdate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordRestore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Material\\MaterialHistoryRestoreService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Material\\MaterialHistoryRestoreService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'targetLog',
               'type' => 'App\\Models\\MaterialChangeLog',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Services\\Store\\StoreMaterialSnapshotSynchronizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Store\\StoreMaterialSnapshotSynchronizer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'syncStore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'store',
               'type' => 'App\\Models\\Store',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'syncLocation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\StoreLocation',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'detachLocation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'location',
               'type' => 'App\\Models\\StoreLocation',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Material\\MaterialAuditContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Material\\MaterialAuditContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'stack',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<int, array<string, mixed>>
     */',
             'namespace' => 'App\\Support\\Material',
             'uses' => 
            array (
              'closure' => 'Closure',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array<string, mixed>  $context
     */',
             'namespace' => 'App\\Support\\Material',
             'uses' => 
            array (
              'closure' => 'Closure',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'current',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'App\\Support\\Material',
             'uses' => 
            array (
              'closure' => 'Closure',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batchId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'action',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\RequestCorrelation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Observability\\RequestCorrelation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'REQUEST_ID_HEADER',
               'value' => '\'X-Request-Id\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'SERVICE_NAME_HEADER',
               'value' => '\'X-Service-Name\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveRequestId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'currentServiceName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'incomingServiceName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bindToRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'requestId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'serviceName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'upstreamService',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'outgoingHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'serviceName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Observability\\SentryEventContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Observability\\SentryEventContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'beforeSend',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?Sentry\\Event',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Sentry\\Event',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hint',
               'type' => '?Sentry\\EventHint',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\StoreSnapshotNormalizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Supply\\StoreSnapshotNormalizer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalizeText',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalizeAddress',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialLabelResolver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Supply\\SupplyMaterialLabelResolver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'material',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\app\\Support\\Supply\\SupplyMaterialRegistry.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Support\\Supply\\SupplyMaterialRegistry',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'models',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, class-string>
     */',
             'namespace' => 'App\\Support\\Supply',
             'uses' => 
            array (
              'brick' => 'App\\Models\\Brick',
              'cat' => 'App\\Models\\Cat',
              'cement' => 'App\\Models\\Cement',
              'ceramic' => 'App\\Models\\Ceramic',
              'kasagypsum' => 'App\\Models\\KasaGypsum',
              'nat' => 'App\\Models\\Nat',
              'paku' => 'App\\Models\\Paku',
              'pakutembak' => 'App\\Models\\PakuTembak',
              'sand' => 'App\\Models\\Sand',
              'steel' => 'App\\Models\\Steel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'families',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<string>
     */',
             'namespace' => 'App\\Support\\Supply',
             'uses' => 
            array (
              'brick' => 'App\\Models\\Brick',
              'cat' => 'App\\Models\\Cat',
              'cement' => 'App\\Models\\Cement',
              'ceramic' => 'App\\Models\\Ceramic',
              'kasagypsum' => 'App\\Models\\KasaGypsum',
              'nat' => 'App\\Models\\Nat',
              'paku' => 'App\\Models\\Paku',
              'pakutembak' => 'App\\Models\\PakuTembak',
              'sand' => 'App\\Models\\Sand',
              'steel' => 'App\\Models\\Steel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalizeFamily',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modelForFamily',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'familyForModel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelClass',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nameField',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writableFields',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<string>
     */',
             'namespace' => 'App\\Support\\Supply',
             'uses' => 
            array (
              'brick' => 'App\\Models\\Brick',
              'cat' => 'App\\Models\\Cat',
              'cement' => 'App\\Models\\Cement',
              'ceramic' => 'App\\Models\\Ceramic',
              'kasagypsum' => 'App\\Models\\KasaGypsum',
              'nat' => 'App\\Models\\Nat',
              'paku' => 'App\\Models\\Paku',
              'pakutembak' => 'App\\Models\\PakuTembak',
              'sand' => 'App\\Models\\Sand',
              'steel' => 'App\\Models\\Steel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'identityFields',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Fields that identify a material for duplicate detection: the descriptive
     * attributes (brand, colour, dimensions, packaging, store/location) minus
     * price amounts, photo, and the store-derived free-text address. Two active
     * rows of the same family that match on all of these are true duplicates
     * (the same product at the same store) regardless of price.
     *
     * @return list<string>
     */',
             'namespace' => 'App\\Support\\Supply',
             'uses' => 
            array (
              'brick' => 'App\\Models\\Brick',
              'cat' => 'App\\Models\\Cat',
              'cement' => 'App\\Models\\Cement',
              'ceramic' => 'App\\Models\\Ceramic',
              'kasagypsum' => 'App\\Models\\KasaGypsum',
              'nat' => 'App\\Models\\Nat',
              'paku' => 'App\\Models\\Paku',
              'pakutembak' => 'App\\Models\\PakuTembak',
              'sand' => 'App\\Models\\Sand',
              'steel' => 'App\\Models\\Steel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\BrickFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\BrickFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Brick>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'brick' => 'App\\Models\\Brick',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\CementFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\CementFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Cement>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'cement' => 'App\\Models\\Cement',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\StoreFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Store>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'store' => 'App\\Models\\Store',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreLocationFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\StoreLocationFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<StoreLocation>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'store' => 'App\\Models\\Store',
          'storelocation' => 'App\\Models\\StoreLocation',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\StoreMaterialAvailabilityFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\StoreMaterialAvailabilityFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<StoreMaterialAvailability>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'brick' => 'App\\Models\\Brick',
          'storelocation' => 'App\\Models\\StoreLocation',
          'storematerialavailability' => 'App\\Models\\StoreMaterialAvailability',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\factories\\UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\BrickInstallationTypeSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\BrickInstallationTypeSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ekaga\\OneDrive\\Documents\\Code\\K-3Repo\\supply-service-be\\database\\seeders\\MortarFormulaSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\MortarFormulaSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
