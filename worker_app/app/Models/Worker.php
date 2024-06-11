<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public $table = 'workers';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'text',
        'is_married',
        'age',
        'description'
    ];
}
