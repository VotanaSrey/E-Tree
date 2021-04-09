<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'comment',
        'userId',
        'treeId'
    ];

    public function users () {
        return $this->belongsTo(users::class);
    }

    public function trees () {
        return $this->belongsTo(trees::class);
    }
}
