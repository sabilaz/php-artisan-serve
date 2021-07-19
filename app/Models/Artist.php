<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function album(){
        return $this->hasMany(Album::class);
    }

    public function track(){
        return $this->hasMany(Track::class);
    }

    public function played(){
        return $this->hasMany(Played::class);
    }
}
