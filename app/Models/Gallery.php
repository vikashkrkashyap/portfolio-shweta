<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Images::class, 'gallery_id')
            ->orderBy('is_cover','DESC');
    }

    public function getCoverImage()
    {
        $coverImage = Images::where('gallery_id', $this->id)
            ->orderBy('is_cover','DESC')
            ->orderBy('updated_at','DESC')
            ->first();

        if($coverImage) {

            return route('accessImage', [$this->folder_title, 'resize-'.$coverImage->url]);
        }
        else{
            return url('image/default.png');
        }
    }
}

