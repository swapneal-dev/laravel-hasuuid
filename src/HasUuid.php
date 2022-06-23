<?php

namespace SwapnealDev\LaravelHasUuid;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid(): void
    {
        static::creating(function (Model $model) {
            $uuidKey = $model->getUuidKey();
            $model->attributes[$uuidKey] = (string)Str::uuid();
        });
    }

    public function getUuidKey(): string
    {
        if(!empty($this->uuidKey)){
            return $this->uuidKey;
        }
        return 'uuid';
    }

    public function scopeByUuid($query, $uuid)
    {
        return $query->where($this->getUuidKey(), $uuid);
    }

    public static function findByUuid($uuid): Model
    {
        return static::byUuid($uuid)->first();
    }
}
