<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $table = 'directors';
    protected $primaryKey = 'idDirector';
    
    public $incrementing = false; 

    protected $fillable = [
        'idDirector',
        'name_director',
        'gender_director',
        'place_birth_director',
        'country_director',
        'year_birth_director'
    ];
}