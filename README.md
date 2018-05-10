RBAC Manager for Yii 2
======================
GUI manager for RABC (Role Base Access Control) Yii2. Easy to manage authorization of user :smile:.

[![Latest Unstable Version](https://poser.pugx.org/elephantsgroup/eg-admin/v/unstable)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![Total Downloads](https://poser.pugx.org/elephantsgroup/eg-admin/downloads.png)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![Daily Downloads](https://poser.pugx.org/elephantsgroup/eg-admin/d/daily)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![License](https://poser.pugx.org/elephantsgroup/eg-admin/license)](https://packagist.org/packages/elephantsgroup/eg-admin)
[![Reference Status](https://www.versioneye.com/php/elephantsgroup:eg-admin/reference_badge.svg)](https://www.versioneye.com/php/elephantsgroup:eg-admin/references)
[![Build Status](https://img.shields.io/travis/elephantsgroup/eg-admin.svg)](http://travis-ci.org/elephantsgroup/eg-admin)
[![Dependency Status](https://www.versioneye.com/php/elephantsgroup:eg-admin/dev-master/badge.png)](https://www.versioneye.com/php/elephantsgroup:eg-admin/dev-master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/elephantsgroup/eg-admin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/elephantsgroup/eg-admin/?branch=master)
[![Code Climate](https://img.shields.io/codeclimate/github/elephantsgroup/eg-admin.svg)](https://codeclimate.com/github/elephantsgroup/eg-admin)

Documentation
-------------
> **Important: If you install version 3.x, please see [this readme](https://github.com/elephantsgroup/eg-admin/blob/3.master/README.md#upgrade-from-2x).**


- [Change Log](CHANGELOG.md).
- [Authorization Guide](http://www.yiiframework.com/doc-2.0/guide-security-authorization.html). Important, read this first before you continue.
- [Basic Configuration](docs/guide/configuration.md)
- [Basic Usage](docs/guide/basic-usage.md).
- [User Management](docs/guide/user-management.md).
- [Using Menu](docs/guide/using-menu.md).
- [Api](https://elephantsgroup.github.io/eg-admin/index.html).

Installation
------------

### Install With Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require elephantsgroup/eg-admin "~1.0"
or
php composer.phar require elephantsgroup/eg-admin "~2.0"
```

or for the dev-master

```
php composer.phar require elephantsgroup/eg-admin "2.x-dev"
```

Or, you may add

```
"elephantsgroup/eg-admin": "~2.0"
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
        // for example: '@elephantsgroup/admin' => '@app/extensions/elephantsgroup/eg-admin-2.0.0',
        ...
    ]
];
```

[**More...**](docs/guide/configuration.md)

[screenshots](https://goo.gl/r8RizT)
