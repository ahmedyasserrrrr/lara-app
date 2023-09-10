<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edits extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'number',
        'date',
        'image',
        'comment',
    ];
}
