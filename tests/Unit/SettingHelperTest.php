<?php

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('setting helper returns default value when key does not exist', function () {
    expect(setting('non_existent_key', 'default_value'))->toBe('default_value');
});

test('setting helper returns value when key exists', function () {
    Setting::set('company_name', 'Test Company');

    expect(setting('company_name'))->toBe('Test Company');
});

test('setting helper allows bulk updating settings via array', function () {
    setting([
        'phone' => '+91-9999999999',
        'email' => 'test@example.com',
    ]);

    expect(setting('phone'))->toBe('+91-9999999999')
        ->and(setting('email'))->toBe('test@example.com');
});

test('setting helper without arguments returns array of all settings', function () {
    Setting::set('key_one', 'val_one');
    Setting::set('key_two', 'val_two');

    $all = setting();

    expect($all)->toBeArray()
        ->and($all)->toHaveKey('key_one', 'val_one')
        ->and($all)->toHaveKey('key_two', 'val_two');
});
