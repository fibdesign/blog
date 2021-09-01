---
description: >-
  Sometimes you need to make same API for multiple projects. Usually in projects
  you need a blog and that's why you need this package, you need it to mack a
  blog API fast.
---

# Getting Start

## Installation

* You can install the package via composer. 

```bash
composer require fibdesign/blog
```

*  Next in `config` folder add this line to the end of `filesystem.php` file in the `links` section.

{% code title="config/filesystem.php" %}
```php
'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('assets') => storage_path('app/assets'),
    ]
```
{% endcode %}

* Don't forget to link storage

```bash
php artisan storage:link
```

*  Remember to add or uncomment this class in `app/Http/Kernal.php` in middleware group in api section.

{% code title="app/Http/Kernal.php" %}
```php
'api => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class
]
```
{% endcode %}

## Customization

| .env variables | type |
| :--- | :--- |
| FIBDESIGN\_BLOG\_ARTICLE\_PER\_PAGE  | Number |
| FIBDESIGN\_BLOG\_ARTICLES\_POPULAR\_NUM  | Number |

## Respones Language

The respose use your `lang` folder of your main project.

## Laravel Package Boilerplate

 This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

