<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'gallery_image';
    protected $guarded = ['id'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class,'gallery_id');
    }

    public function getResizeImagePath()
    {
        return route('accessImage', [$this->gallery->folder_title, 'resize-'.$this->url]);
    }

    public function getImagePath()
    {
        return route('accessImage', [$this->gallery->folder_title, $this->url]);
    }

    public function getFilePaths()
    {
        return [
            storage_path('gallery').'/'.$this->gallery->folder_title.'/'.$this->url,
            storage_path('gallery').'/'.$this->gallery->folder_title.'/'.'resize-'.$this->url
        ];
    }
}
