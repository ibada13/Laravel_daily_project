<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadThings extends Model
{
    use HasFactory;
    public $table = 'badthings';
    protected $fillable = ['content', 'extra_id']; 
    public function Extra(){
        return $this->belongsTo(Extra::class);
    }
}
