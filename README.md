# Laravel HasUuid

Install using composer<br>
```bash
composer require swapneal-dev/laravel-hasuuid
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
It supports any column name for uuid default is uuid.<br>
add below line to your model.
```php
public string $uuidKey = 'uuid_key_name';
```
You can find by uuid in model;

```php
$project = Project::findByUuid($uuid);
```
It will return Model object or empty object.
