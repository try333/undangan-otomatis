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
        return $this->belongsTo(Form::class, 'idForm'); // Link to Form model using 'idForm' as foreign key
    }

    public function imageOrder()
    {
        return $this->hasOne(ImageOrder::class, 'idImage'); // Link to ImageOrder using 'idImage' as foreign key
    }
}
