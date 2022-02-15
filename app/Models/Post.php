<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany('App\Models\User');
        
    }

    protected $fillable = ['good','bad','goal']; //保存したいカラム名が複数の場合


}
