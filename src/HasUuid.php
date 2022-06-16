<?php

namespace SwapnealDev\LaravelHasUuid;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid(): void
    {
        static::creating(function (Model $model) {
            $model->uuid = (string)Str::uuid();
        });
    }

    public static function findByUuid($uuid): Model
    {
        return static::where('uuid',$uuid)->first();
    }
}
