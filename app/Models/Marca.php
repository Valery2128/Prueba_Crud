<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    
    use HasFactory;
    protected $table = 'marca';
    protected $primarykey = 'id_marca';
    protected $fillable=['id_marca', 'nombre_marca'];
    
}
