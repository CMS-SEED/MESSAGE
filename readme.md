This is a Laravel 5 package that provides message management facility for CMS SEED framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `cms_framework_seed/message`.

    "cms_framework_seed/message": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Cms_Framework_Seed\Message\Providers\MessageServiceProvider::class,

```

And also add it to alias

```php
'Message'  => Cms_Framework_Seed\Message\Facades\Message::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Cms_Framework_Seed\Message\Providers\MessageServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


