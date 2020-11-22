<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Amirbagh75\Chalqoz;

$newText = Chalqoz\Chalqoz::convertEnglishNumbersToPersian('123456789');
echo($newText."\n");

$newText = Chalqoz\Chalqoz::convertPersianNumbersToEnglish('۱۲۳۴۵۶۶۹۸۷۴');
echo($newText."\n");

$newText = Chalqoz\Chalqoz::convertPersianNumbersToEnglish('امیرحسین بقایی ۲۴ سال دارد.');
echo($newText."\n");

$newText = Chalqoz\Chalqoz::convertEnglishNumbersToPersian('امیرحسین بقایی 24 سال دارد.');
echo($newText."\n");
