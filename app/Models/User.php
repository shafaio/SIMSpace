<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function sops () {
        return $this->belongsToMany(SOP::class)->withTimestamps();
    }

    public function documents () {
        return $this->hasMany(Document::class);
    }
}
