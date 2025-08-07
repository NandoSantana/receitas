<?php

namespace App\Helpers;

class SanitizeHelper
{
    /**
     * Sanitiza uma string (input simples)
     */
    public static function cleanString($input)
    {
        if ($input === null) {
            return null;
        }
        // Remove tags HTML e espaços extras
        $input = trim($input);
        $input = preg_replace('/\s+/', ' ', $input);
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $input = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);


        
        return $input;
    }

    /**
     * Sanitiza um array de inputs (ex: request()->all())
     */
    public static function cleanArray(array $data): array
    {
        return array_map(function ($value) {
            if (is_string($value)) {
                return self::cleanString($value);
            } elseif (is_array($value)) {
                return self::cleanArray($value);
            }

            return $value;
        }, $data);
    }
}
