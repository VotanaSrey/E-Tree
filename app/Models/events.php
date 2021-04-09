<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'organizer',
        'desription',
        'startdate',
        'enddate'
    ];
}
