<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoList extends Model
{
    protected $table= "do_lists";
    
    protected $fillable =[
        'id',
        'name',
        'description',
        'status',
        'progression',
        'end',
    ];
}
