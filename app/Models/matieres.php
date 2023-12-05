<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    use HasFactory;
    protected $table = 'matieres';

    protected $fillable = ['nom', 'coefficient',"enseignant"];
}
