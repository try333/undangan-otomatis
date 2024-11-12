<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form';

    public function images()
    {
        return $this->hasMany(Image::class, 'idForm'); // Link to Image model using 'idForm' as foreign key
    }

    public function rsvps()
    {
        return $this->hasMany(Rsvp::class, 'formId');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'idForm');
    }
}
