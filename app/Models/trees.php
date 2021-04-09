<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trees extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'total',
        'discount',
        'shotdesc',
        'longdesc',
        'image'
    ];

    public function categories () {
        return $this->belongsTo(categories::class);
    }

    public function comments () {
        return $this->hasMany(comments::class);
    }
}
