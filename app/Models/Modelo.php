<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $table = 'modelo';
    protected $primarykey = 'id_modelo';
    protected $fillable=['id_modelo', 'stock_modelo'];
    public function marca(){
        return $this->belongsTo(Marca::class,'fk_marca','id_marca');
    }
}
