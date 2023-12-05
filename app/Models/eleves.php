<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eleves extends Model
{
    use HasFactory;
    protected $table = 'eleves';
    // protected $primaryKey = "nom";
    protected $fillable = ['nom', 'prenom', 'date_naissance'];
}
