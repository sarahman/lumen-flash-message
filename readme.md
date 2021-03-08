# Easy Flash Messages for Your Lumen App #

This composer package offers a Twitter Bootstrap optimized flash messaging setup for your Lumen applications.
This package is highly dependent on `laracasts/flash` package created by Jeffrey Way.

## Installation ##

1. Begin by pulling in the package through Composer.

```bash
composer require sarahman/lumen-flash-message
```

2. Next, for Lumen, you need to create a config directory in the project root directory, copy the `session.php` from Laravel's config folder to the created config folder.

3. Next, for Lumen, you need to register the Service Provider within your `bootstrap/app.php` file.

```php
.....
$app->register('Sarahman\Flash\FlashServiceProvider');
.....
```


##### For More Documentation #####

For more information about how to use this package, you can check
[laracasts/flash](https://github.com/laracasts/flash) package link.

Done! Hope, you'll be able to see flash messages after using this package.
