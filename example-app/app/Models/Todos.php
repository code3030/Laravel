<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    public $timestamps = false; // create_at, update_at 추가 안함
    protected $fillable = ['id', 'user_id', 'name','phone', 'email', 'project', 'period'];

    // php artisan tinker
    // App\Models\User::find(1)
    public function user() {
        return $this->belongsTo(User::class);
    }
}

