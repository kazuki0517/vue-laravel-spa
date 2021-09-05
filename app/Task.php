<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fiilable = [
        'title',
        'content',
        'person_in_charge',
    ];
}
