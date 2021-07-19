<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function track(){
        return $this->belongsTo(Track::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }
}
