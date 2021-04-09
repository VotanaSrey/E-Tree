<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donations extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'amount',
        'userId'
    ];

    public function users () {
        return $this->belongsTo(users::class);
    }
}
