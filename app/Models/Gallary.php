<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
