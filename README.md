# Status : Developing

This repo is not ready yet

# Maxup Blog Api

![Packagist Version](https://img.shields.io/packagist/v/maxup/blog)
![Packagist License](https://img.shields.io/packagist/l/maxup/blog)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/maxup/blog)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/laravel-8.x-red)](https://laravel.com/)
[![GitHub last commit](https://img.shields.io/github/last-commit/fibdesign/blog-api)](https://github.com/fibdesign/blog-api)

Sometimes you need to make same api for multiple projects. Usually in projects you need a blog and that's why you need this package, you need it to mack a blog api fast.

## Installation

- You can install the package via composer:

```bash
composer require maxup/blog
```

- Next in `config` folder add this line to the end of `filesystem.php` file in the `links` section

```bash
'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('assets') => storage_path('app/assets'),
    ]
```

- Don't forget to link storage
```bash
php artisan storage:link
```

- Remember to uncomment this class in `app/Http/Kernal.php` in middleware group in api section
```bash
\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class
```

## Customization

You can change some parameters in `.env`

```dotenv
MAXUP_BLOG_ARTICLE_PER_PAGE = 15
MAXUP_BLOG_ARTICLES_POPULAR_NUM = 5
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email msghaderi9@gamil.com instead of using the issue tracker.

## Credits

-   [sadegh ghaderi](https://github.com/msghaderi77)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
