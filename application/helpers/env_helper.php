<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Environment Helper
 * Simple .env file loader for CodeIgniter 3
 */

if (!function_exists('load_env')) {
    /**
     * Load environment variables from .env file
     */
    function load_env($file_path = NULL) {
        if ($file_path === NULL) {
            $file_path = FCPATH . '.env';
        }
        
        if (!file_exists($file_path)) {
            log_message('error', 'Environment file not found: ' . $file_path);
            return FALSE;
        }
        
        $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue; // Skip comments
            }
            
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            
            // Remove quotes if present
            if (preg_match('/^"(.*)"$/', $value, $matches)) {
                $value = $matches[1];
            } elseif (preg_match("/^'(.*)'$/", $value, $matches)) {
                $value = $matches[1];
            }
            
            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
        
        return TRUE;
    }
}

if (!function_exists('env')) {
    /**
     * Get environment variable with optional default
     */
    function env($key, $default = NULL) {
        $value = getenv($key);
        
        if ($value === FALSE) {
            return $default;
        }
        
        // Convert string booleans
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return TRUE;
            case 'false':
            case '(false)':
                return FALSE;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return NULL;
        }
        
        return $value;
    }
}
