<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $table = 'rsvp';

    protected $fillable = ['name', 'totalGuest', 'status', 'formId', 'createdAt'];

    public $timestamps = false;

    public function form()
    {
        return $this->belongsTo(Form::class, 'formId');
    }
}
