# Adder

Adds up three numbers.

# Requirements

- PHP 8.2

# Installation

```shell
composer require wollkey/otus-package
```

# Usage

OOP style:

```php
<?php

use Wollkey\OtusPackage\Adder;

$sum = (new Adder())->sumOfThree(1, 2, 3);
```

FP style:

```php
<?php

use function Wollkey\OtusPackage\sumOfThree;

$sum = sumOfThree(1)(2)(3);
```