<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $fillable = ['content'] ;
    use HasFactory;
    public function find($id){
        if(is_int($id)){
            $rules =  Rules::all();
            $rules->get($id) ; 
        }
        else {
            return null ; 
        }
    }
}
