<?php

declare(strict_types=1);

namespace Amirbagh75\Chalqoz;

class Chalqoz
{
    /**
     * @var string[]
     */
    private static $persianNumbers = ['۰', '۱', '۲', '۳', '۴', '٤', '۵', '٥', '٦', '۶', '۷', '۸', '۹'];

    /**
     * @var string[]
     */
    private static $englishNumbers = ['0', '1', '2', '3', '4', '4', '5', '5', '6', '6', '7', '8', '9'];

    /**
     * Convert every persian number characters in input text to english number characters
     * I copied this func from this gist: https://gist.github.com/baghayi-gist/4009084#gistcomment-2995574
     *
     * @param string $text
     * @return string
     */
    public static function convertPersianNumbersToEnglish(string $text): string
    {
        return str_replace(self::$persianNumbers, self::$englishNumbers, $text);
    }

    /**
     * Convert every english number characters in input text to persian number characters
     * I copied this func from this gist: https://gist.github.com/baghayi-gist/4009084#gistcomment-2995574
     *
     * @param string $text
     * @return string
     */
    public static function convertEnglishNumbersToPersian(string $text): string
    {
        return str_replace(self::$englishNumbers, self::$persianNumbers, $text);
    }

    public static function enNumsToFa(string $text): string
    {
        return self::convertEnglishNumbersToPersian($text);
    }

    public static function faNumsToEn(string $text): string
    {
        return self::convertPersianNumbersToEnglish($text);
    }
}
