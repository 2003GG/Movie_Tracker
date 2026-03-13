<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Liste extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'user_id',
    ];
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
