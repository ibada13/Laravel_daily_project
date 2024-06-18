<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meadvices extends Model
{
    protected $casts =[ 
        "content"=>"encrypted"
    ]; 
    protected $fillable = ['content'];
    use HasFactory;
}
