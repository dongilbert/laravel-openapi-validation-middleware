<?php declare(strict_types=1);

if (! function_exists('config')) {
    function config(string $key, $default = null) {
        static $config;

        if (empty($config)) {
            $config = ['openapi' => include(__DIR__.'/resources/openapi.php')];
        }

        $value = get_config_value($config, $key);

        return null === $value ? $default : $value;
    }
}

if (! function_exists('get_config_value')) {
    function get_config_value(array $config, string $key) {
        $parts = explode('.', $key);
        $part = array_shift($parts);

        if (! array_key_exists($part, $config)) {
            return null;
        }

        $config = $config[$part];

        if (count($parts) > 0) {
            return get_config_value($config, implode('.', $parts));
        }

        return $config;
    }
}

if (! function_exists('resource_path')) {
    function resource_path(string $append = '') {
        return rtrim('/', sprintf('%s/resources/%s', __DIR__, $append));
    }
}