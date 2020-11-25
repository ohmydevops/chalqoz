[![StyleCI](https://github.styleci.io/repos/314990451/shield?branch=main)](https://github.styleci.io/repos/314990451?branch=main) [![Latest Stable Version](https://poser.pugx.org/amirbagh75/chalqoz/v)](//packagist.org/packages/amirbagh75/chalqoz) [![Total Downloads](https://poser.pugx.org/amirbagh75/chalqoz/downloads)](//packagist.org/packages/amirbagh75/chalqoz) [![License](https://poser.pugx.org/amirbagh75/chalqoz/license)](//packagist.org/packages/amirbagh75/chalqoz)

## Chalqoz (چلغوز)

This package only converts Persian and English number characters to each other.

### How to install:
```
composer require amirbagh75/chalqoz
```

### Example
```php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Amirbagh75\Chalqoz\Chalqoz;

$newText = Chalqoz::convertEnglishNumbersToPersian('123456789');
echo($newText."\n"); // ۱۲۳۴۵۶۷۸۹

$newText = Chalqoz::convertPersianNumbersToEnglish('۱۲۳۴۵۶۷۸۹');
echo($newText."\n"); // 123456789

$newText = Chalqoz::convertPersianNumbersToEnglish('امیرحسین بقایی ۲۴ سال دارد.');
echo($newText."\n"); // امیرحسین بقایی 24 سال دارد

$newText = Chalqoz::convertEnglishNumbersToPersian('امیرحسین بقایی 24 سال دارد.');
echo($newText."\n"); // امیرحسین بقایی ۲۴ سال دارد

```

### Methods:

```php
convertEnglishNumbersToPersian(string $text): string
convertPersianNumbersToEnglish(string $text): string
```
