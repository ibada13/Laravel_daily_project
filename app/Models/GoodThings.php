<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodThings extends Model
{
    use HasFactory;
    public $table = 'goodthings';
    public function Extra(){
        return $this->belongsTo(Extra::class);
    }
}
