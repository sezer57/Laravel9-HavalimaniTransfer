<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervation extends Model
{
    use HasFactory;

    public function transfer(){
        return $this->belongsTo(Transfer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function fromlocation(){
        return $this->belongsTo(Location::class,'from_location_id');
    }
    public function tolocation (){
        return $this->belongsTo(Location::class,'to_location_id');
    }
}
