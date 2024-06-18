<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTopics extends Model
{

    protected $fillable = ['title','topics_id'];
    protected $casts = [
        'title'=>'encrypted'
    ];
    public function Topics(){
        return $this->belongsTo(Topics::class);
    }
    public function Notes(){
        return $this->hasMany(Notes::class);
    }
    use HasFactory;
}
