# Example

PHP Package example.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "ozziest/example": "dev-master"
    }
}
```

```bash 
$ composer update
```

## Usage

```php
$example = new Ozziest\Example\Example;
echo $example->title('bu örnek bir başlıktır');
// > Bu Örnek Bir Başlıktır 
```

## Licence

MIT
