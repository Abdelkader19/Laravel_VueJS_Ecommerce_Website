<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomscategorie','imagescategorie','categorieID'
        ];
        public function categories()
        {
        return $this->belongsTo(Categorie::class,"categorieID"); // la sous categorie appartient a un seul categorie
        } 

        public function article()
{
return $this->hasMany(Article::class,"scategorieID");
}
        
}
