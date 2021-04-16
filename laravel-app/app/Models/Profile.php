<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        $user = User::find($this->user_id);
        return $this->belongsTo(User::class);
    }
}   
