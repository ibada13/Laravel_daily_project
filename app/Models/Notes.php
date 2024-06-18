<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{

    protected $fillable = ['title','note','subtopics_id'];
    protected $casts = [
        'title'=>'encrypted',
        'note'=>'encrypted',

    ];
    public function SubTopics(){
        return $this->belongsTo(SubTopics::class);
    }
    use HasFactory;
}
