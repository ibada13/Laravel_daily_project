<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toodo extends Model
{
    use HasFactory;
    public $fillable = ['is_Done'];
    public $table = 'toodo';
    public function Extra(){
        return $this->belongsTo(Extra::class);
    }
}
