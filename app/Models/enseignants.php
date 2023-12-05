<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseignants extends Model
{
    use HasFactory;
    protected $table = 'enseignants';

    protected $fillable = ['nom', 'prenom', 'spécialité'];
}
