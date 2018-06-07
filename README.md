# eg-admin
[![Build Status](https://img.shields.io/travis/elephantsgroup/eg-admin/master.svg?style=flat-square)](https://travis-ci.org/elephantsgroup/eg-admin)
[![Packagist Version](https://img.shields.io/packagist/v/elephantsgroup/eg-admin.svg?style=flat-square)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![PHP Version](https://img.shields.io/packagist/php-v/elephantsgroup/eg-admin.svg?style=flat-square)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![Website](https://img.shields.io/website-up-down-green-red/http/shields.io.svg?label=my-website&style=flat-square)](http://elephantsgroup.com)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

GUI manager for RABC (Role Base Access Control) Yii2 based on [mdmsoft Yii2-admin](https://github.com/mdmsoft/yii2-admin)

## Documentation

[Read the Documentation for master](docs/README.md)

- [Change Log](CHANGELOG.md).
- [Authorization Guide](http://www.yiiframework.com/doc-2.0/guide-security-authorization.html). Important, read this first before you continue.
- [Basic Configuration](docs/guide/configuration.md)
- [Basic Usage](docs/guide/basic-usage.md).
- [User Management](docs/guide/user-management.md).
- [Using Menu](docs/guide/using-menu.md).
- [Api](https://elephantsgroup.github.io/eg-admin/index.html).

##Installation

### Install With Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require elephantsgroup/eg-admin "~1"
```

Or, you may add

```
"elephantsgroup/eg-admin": "~1"
```

to the require section of your `composer.json` file and execute `php composer.phar update`.

### Install From the Archive

Download the latest release from here [releases](https://github.com/elephantsgroup/eg-admin/releases), then extract it to your project.
In your application config, add the path alias for this extension.

```php
return [
    ...
    'aliases' => [
        '@elephantsgroup/admin' => 'path/to/your/extracted',
        // for example: '@elephantsgroup/admin' => '@app/extensions/elephantsgroup/eg-admin-1.0.0',
        ...
    ]
];
```

[**More...**](docs/guide/configuration.md)