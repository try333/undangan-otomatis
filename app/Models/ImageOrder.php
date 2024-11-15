<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageOrder extends Model
{
    use HasFactory;

    protected $table = 'image_order';

    public function image()
    {
        return $this->belongsTo(Image::class, 'idImage'); // Link to Image using 'idImage' as foreign key
    }
}
