<?php

return [
    'trusted_callers' => array_filter([
        'supply-fe' => env('SUPPLY_SERVICE_TOKEN'),
        'calculation-fe' => env('CALCULATION_SERVICE_TOKEN'),
        'calculation-service-be' => env('CALCULATION_SERVICE_TOKEN'),
        'platform-service-fe' => env('PLATFORM_SERVICE_TOKEN'),
        'platform-service-be' => env('PLATFORM_SERVICE_TOKEN'),
    ]),
];
