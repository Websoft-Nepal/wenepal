<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallary extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function photos()
    {
        return $this->hasMany(Photos::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug($model->title);
        });

        static::updating(function ($model) {
            if ($model->isDirty('title')) {
                $model->slug = static::generateUniqueSlug($model->title, $model->id);
            }
        });
    }

    protected static function generateUniqueSlug($title, $id = null)
    {
        $slug = Str::slug($title);
        $query = static::where('slug', $slug);

        if ($id) {
            $query->where('id', '!=', $id);
        }

        $count = $query->count();

        return $count ? "$slug-$count" : $slug;
    }
}
