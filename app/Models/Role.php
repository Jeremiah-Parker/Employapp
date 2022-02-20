<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use App\Model\User;

class Role extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'description',
    ];

      public function users()
        {
        return $this->belongsToMany(User::class);
        }
}
