# PHPCS Fixer Config
This repository provides configurations for [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer), which can be used to verify and enforce a coding standard for PHP code within projects.

References from:  
- [`refinery29/php-cs-fixer-config`](https://github.com/refinery29/php-cs-fixer-config)
- [`prooph/php-cs-fixer-config`](https://github.com/prooph/php-cs-fixer-config)
- [`phootwork/php-cs-fixer-config`](https://github.com/phootwork/php-cs-fixer-config)

## Installation
Run
```sh
composer require --dev betasavvy/phpcs-fixer-config
```
Add to composer.json _(optional)_
```json
"scripts": {
  "check": [
    "@cs", 
  ],
  "cs": "php-cs-fixer fix -v --diff --dry-run",
  "cs-fix": "php-cs-fixer fix -v --diff"
}
```

## Usage
### Configuration
Create a configuration file `.php_cs` in the root of your project.
```php
<?php

$config = new BetaSavvy\Fixer\Config();
$config->getFinder()
//        ->exclude(['/folder-to-exclude'])
        ->in([
            __DIR__ . '/folder-1',
            __DIR__ . '/folder-2',
            __DIR__ . '/folder-3',
        ]);

return $config;
```

### Git
Add `.php_cs.cache` (file is created by `php-cs-fixer`) to `.gitignore`
```
vendor/
.php_cs.cache
```

## License
This package is licensed using the MIT License.
