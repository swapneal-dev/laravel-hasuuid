# Laravel HasUuid

Install using composer<br>
```bash
composer install swapneal-dev/laravel-hasuuid
```
This package adds a very simple trait to automatically generate a UUID for your Models.

Simply add the "SwapnealDev\LaravelHasUuid\HasUuid;" trait to your model:

```php
<?php

namespace App;

use SwapnealDev\LaravelHasUuid\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasUuid;

}
```
It supports only column name uuid;

You can find by uuid in model;

```php
$user = User::findByUuid($uuid);
```
It will return Model object or empty object.
