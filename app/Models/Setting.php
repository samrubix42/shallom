<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    /**
     * Cache duration in seconds (24 hours).
     */
    protected static int $cacheTTL = 86400;

    /**
     * In-memory request cache to prevent redundant database queries during a single HTTP request.
     */
    protected static ?array $runtimeCache = null;

    /**
     * Get all settings as key-value pairs.
     */
    public static function getAll(): array
    {
        if (static::$runtimeCache !== null) {
            return static::$runtimeCache;
        }

        try {
            static::$runtimeCache = Cache::remember('app_settings_all', static::$cacheTTL, function () {
                return static::query()->pluck('value', 'key')->toArray();
            });
        } catch (\Throwable $e) {
            static::$runtimeCache = [];
        }

        return static::$runtimeCache ?? [];
    }

    /**
     * Get a setting value by key with optional fallback.
     */
    public static function get(string $key, $default = null): ?string
    {
        $all = static::getAll();

        if (array_key_exists($key, $all) && $all[$key] !== null && $all[$key] !== '') {
            return $all[$key];
        }

        return $default;
    }

    /**
     * Set or update a setting value and invalidate caches.
     */
    public static function set(string $key, ?string $value, string $group = 'general'): Setting
    {
        $setting = static::query()->updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group]
        );

        static::clearCache();

        return $setting;
    }

    /**
     * Clear all setting caches (runtime and facade).
     */
    public static function clearCache(): void
    {
        static::$runtimeCache = null;
        try {
            Cache::forget('app_settings_all');
        } catch (\Throwable $e) {
            // Ignore cache storage errors
        }
    }
}
