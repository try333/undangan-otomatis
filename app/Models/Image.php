<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function form()
    {
        return $this->belongsTo(Form::class, 'idForm', 'id'); // 'idForm' in Image links to 'id' in Form
    }

    // Define the relationship with ImageOrder
    public function imageOrder()
    {
        return $this->hasOne(ImageOrder::class, 'idImage', 'id'); // 'idImage' in ImageOrder links to 'id' in Image
    }
}
