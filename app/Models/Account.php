<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'password'];

    // -------------------realtions------------------
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    // -------------------realtions------------------

}
