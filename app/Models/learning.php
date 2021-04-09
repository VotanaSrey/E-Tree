<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learning extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'link',
        'image',
        'description',
        'postdate'
    ];
}
