# Array to object

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sempro/array-to-object.svg?style=flat-square)](https://packagist.org/packages/sempro/array-to-object)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/sempro/array-to-object/master.svg?style=flat-square)](https://travis-ci.org/sempro/array-to-object)
[![Total Downloads](https://img.shields.io/packagist/dt/sempro/array-to-object.svg?style=flat-square)](https://packagist.org/packages/sempro/array-to-object)

Gives you a global function that converts arrays to objects without removing object references. The object also implements Jsonable which will prettify the output if the object is returned (This only works in Laravel).

## Installation

1. `composer require sempro/array-to-object`
    
## Usage

```php
$data = [
    'id' => 1,
    'name' => 'Test',
];

$object = arrayToObject($data);

$object->name; // 'Test'
```
    
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.