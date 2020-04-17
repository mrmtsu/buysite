<?php

namespace App;

use Illuminate\Database\EloquentModel;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
