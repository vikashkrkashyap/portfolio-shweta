<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Images::class, 'gallery_id');
    }
}

