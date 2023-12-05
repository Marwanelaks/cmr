<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emplois_du_temps extends Model
{
    use HasFactory;
    protected $table = "emplois_du_temps";
    protected $fillable = ["CC","Jour","D1","D2","D3","D4"];
}
