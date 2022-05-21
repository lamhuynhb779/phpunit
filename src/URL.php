<?php

namespace App;

class URL
{
    /**
     * @param $string
     * @param string $separator
     * @param int $maxLength
     * @return array|string|string[]|null
     */
    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
        $title = preg_replace('%[^-/+|\w ]%', '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        return preg_replace('/[\/_|+ -]+/', $separator, $title);
    }
}
