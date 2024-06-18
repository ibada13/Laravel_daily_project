<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectives extends Model
{
    protected  $fillable = ['content'] ;
    protected $casts =[ 
        "content"=>"encrypted"
    ]; 
    use HasFactory;
}
