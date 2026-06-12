<?php

use App\Helpers\NumberHelper;

test('accuracy standard is eleven decimals', function (): void {
    expect(NumberHelper::ACCURACY_DECIMALS)->toBe(11);
});

test('accurate rounds to 11 decimals by default', function (): void {
    expect(NumberHelper::accurate(0.123456789012345))->toBe(0.12345678901);
});

test('accurate honors a custom decimal count', function (): void {
    expect(NumberHelper::accurate(100000 / 3, 2))->toBe(33333.33);
});

test('accurate parses indonesian formatted strings', function (): void {
    expect(NumberHelper::accurate('1.234,56'))->toBe(1234.56);
});

test('accurate returns zero for null or invalid input', function (): void {
    expect(NumberHelper::accurate(null))->toBe(0.0)
        ->and(NumberHelper::accurate('abc'))->toBe(0.0);
});
