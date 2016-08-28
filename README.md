# toastr
toastr for laravel laravel5.*

#Installation

Run :

```bash
composer require ryan/toastr-for-laravel
```

Add providers in config/app.php

```php
Oyzm\Toastr\ToastrServiceProvider::class
```

Add aliases in config/app.php

```php
'Toastr' => Oyzm\Toastr\Facades\Toastr::class
```
Run:

```bash
 php artisan vendor:publish
```

#Usage

Just add this code to your blade template file:

```php
{!! Toastr::render() !!}
```

Use these methods in controllers:

```php
Toastr::warning($message, $title = null, $options = []) ;

Toastr::error($message, $title = null, $options = []) ;

Toastr::info($message, $title = null, $options = []);

Toastr::success($message, $title = null, $options = []);

Toastr::clear() ;
```
