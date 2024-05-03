<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    
    use HasFactory;
    public $table = "extra";
    public function BadThings(){
        return $this->hasMany(BadThings::class);
    }

    public function GoodThings(){
        return $this->hasMany(GoodThings::class);
    }


    public function Toodo(){
        return $this->hasMany(Toodo::class);
    }

    public function Achives(){
        return $this->hasMany(Achives::class);
    }
    
}
