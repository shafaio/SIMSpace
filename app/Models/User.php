<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public function sops () {
        return $this->belongsToMany(SOP::class)->withTimestamps();
    }

    public function documents () {
        return $this->hasMany(Document::class);
    }
}
