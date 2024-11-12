<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';

    public $timestamps = false;

    public function form()
    {
        return $this->belongsTo(Form::class, 'idForm');
    }
}
