<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    public $table = 'profils';
    protected $fillable = [
        'email', 'password','updated_at', 'created_at'
    ];
}
