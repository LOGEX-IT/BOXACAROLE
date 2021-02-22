<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categorie_id',
        'title',
        'style',
        'marque',
        'matiere_fabrication',
        'origine',
        'garantie_eventuelle',
        'price',
        'image',
        'status'
       ];
}
