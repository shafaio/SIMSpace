<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    // use LaratrustUserTrait;
    use HasFactory;

    protected $guarded = ['id'];
    
    public function sops () {
        return $this->belongsToMany(SOP::class)->withTimestamps();
    }

    public function documents () {
        return $this->hasMany(Document::class);
    }
}
