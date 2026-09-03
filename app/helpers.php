<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Get or set system setting values.
     *
     * Usage:
     * - setting('phone') => returns phone setting or null
     * - setting('phone', '+91-9899552380') => returns phone setting or default
     * - setting(['phone' => '+91-1234567890']) => updates settings
     * - setting() => returns array of all settings
     *
     * @param  string|array|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    function setting($key = null, $default = null)
    {
        if (is_null($key)) {
            return Setting::getAll();
        }

        if (is_array($key)) {
            foreach ($key as $k => $v) {
                Setting::set($k, is_scalar($v) || is_null($v) ? (string) $v : json_encode($v));
            }

            return true;
        }

        return Setting::get($key, $default);
    }
}
