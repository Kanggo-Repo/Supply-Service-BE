<?php

return [
    'trusted_callers' => array_filter([
        'supply-fe' => env('SUPPLY_FE_SERVICE_TOKEN'),
        'calculation-service-be' => env('CALCULATION_SERVICE_BE_TOKEN'),
    ]),
];
