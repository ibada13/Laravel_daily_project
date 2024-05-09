<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achives extends Model
{
    use HasFactory;
    public $fillable = ['content','extra_id'] ;

    
    public function Extra(){
        return $this->belongsTo(Extra::class);
    }
}
