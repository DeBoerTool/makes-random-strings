<?php /** @noinspection PhpUnhandledExceptionInspection */

namespace Dbt\MakesRandomStrings;

trait MakesRandomStringsTrait
{
    public static function rs (int $chars): string
    {
        $string = '';

        while (($len = strlen($string)) < $chars) {
            $size = $chars - $len;

            $bytes = random_bytes($size);

            $string .= substr(
                str_replace(['/', '+', '='], '', base64_encode($bytes)),
                0,
                $size
            );
        }

        return $string;
    }
}
