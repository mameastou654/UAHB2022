<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [ 
        'id_Entreprise', 'nom_Entreprise', 'description_Entreprise',  'created_at' 
    ];
}
