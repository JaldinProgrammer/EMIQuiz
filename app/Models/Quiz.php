<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    protected $dates = ['created_at', 'updated_at'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function answers(){
        return $this->hasMany('App\Models\Answer');
    }
}
