<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouvelles extends Model
{
    use HasFactory;
    protected $table = "nouvelles";
    protected $fillable = ["titre","image","description","type"];
}
