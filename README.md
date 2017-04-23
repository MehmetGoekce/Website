# Website - Mehmet Gökce


This repository contains the source code of [Mehmet Gökce](http://mehmetgoekce.com)
web site.

The web site is built using the following technologies:

- PHP 7
- [zend-expressive](https://zendframework.github.io/zend-expressive/)
- [Plates](http://platesphp.com/) as template engine for PHP
- [Bootstrap](http://getbootstrap.com/) for HTML, CSS and JS


The blog post section is managed using static HTML files, collecting the data
for pagination using a simple cache file in PHP.

## Installation

You need to use [composer](https://getcomposer.org/) to install all the library
dependencies:

```bash
composer install
```

If you don't have the composer command installed in your system, you can install
following [these steps](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

## Run

For testing purpose, you can run the website using the internal web server
of PHP, running the following command:

```bash
php -S 0.0.0.0:8000 -t public public/index.php
```

If you want to deploy the website in a production environment you need to
use `public` as web directory.

You can optimize the composer autoload in a production environment and omit the
dev requirement using the following command:

```bash
composer install --no-dev --optimize-autoloader
```

## Copyright

Copyright (c) 2017, [Mehmet Gökce](http://mehmetgoekce.com).

