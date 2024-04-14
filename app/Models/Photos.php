<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallaryId',
        'photo',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallary::class);
    }
}
