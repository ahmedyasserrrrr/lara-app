<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'number',
        'age',
        'comment',
    ];
}
