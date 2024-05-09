<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodThings extends Model
{
    use HasFactory;
    public $table = 'goodthings';
    public $fillable = ['content','extra_id'] ;
    protected $casts =[ 
        "content"=>"encrypted"
    ]; 
    public function Extra(){
        return $this->belongsTo(Extra::class);
    }
}
