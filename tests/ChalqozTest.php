<?php

declare(strict_types=1);

namespace Amirbagh75\Chalqoz;

use PHPUnit\Framework\TestCase;

final class ChalqozTest extends TestCase
{
    public function testConvertPersianNumbersToEnglish()
    {
        $this->assertEquals(
            'امیرحسین 24 سال دارد.',
            Chalqoz::convertPersianNumbersToEnglish('امیرحسین ۲۴ سال دارد.')
        );

        $this->assertEquals(
            '123456789',
            Chalqoz::convertPersianNumbersToEnglish('۱۲۳۴۵۶۷۸۹')
        );
    }

    public function testConvertEnglishNumbersToPersian()
    {
        $this->assertEquals(
            'امیرحسین ۲۴ سال دارد.',
            Chalqoz::convertEnglishNumbersToPersian('امیرحسین 24 سال دارد.')
        );

        $this->assertEquals(
            '۱۲۳۴۵٦۷۸۹',
            Chalqoz::convertEnglishNumbersToPersian('123456789')
        );
    }
}
