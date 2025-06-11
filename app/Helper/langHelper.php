<?php

if (!function_exists('__')) {
    function __($key = null, $replace = [], $locale = null)
    {
        if (session()->get('language_code') != null) {
            $path = resource_path() . "/lang/" . session()->get('language_code') . ".json";
            if (!file_exists($path)) {
                file_put_contents($path, '{}');
            }

            $website = json_decode(file_get_contents($path), true);
            if (!is_array($website)) {
                $website = []; // إصلاح الخطأ هنا
            }

            $key = preg_replace('/\s+/S', " ", $key);

            if (array_key_exists($key, $website)) {
                return $website[$key];
            }

            $website[$key] = $key;
            file_put_contents($path, json_encode($website, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            return $key;
        }

        return is_null($key) ? $key : trans($key, $replace, $locale);
    }
}

