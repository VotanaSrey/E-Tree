<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id','email','firstname','lastname','dob','gender', 'password', 
        'address', 'city', 'country', 'zip_code', 'phone'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $carts = [
        'email_verified_at' => 'datetime'
    ];

    public function donations () {
        return $this->HasMany(donations::class);
    }
}
