<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table= "categories";
    protected $fillable =[
        'id',
        'name',
        'color',
    ];

    protected $primary_key = 'id';
}
