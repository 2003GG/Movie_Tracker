<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Movie extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'director',
        'published_year',
        'liste_id',
        'description',
        'categorie_id'
    ];
    public function liste(){
        return $this->belongsTo(Liste::class);
    }
     public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
