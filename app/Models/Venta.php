<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    protected $primarykey = 'id_venta';
    protected $fillable = ['id_venta', 'cantidad_venta', 'fk_modelo'];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'fk_modelo', 'id_modelo');
    }
    public function getTotalAttribute()
    {   
        
        return $this->cantidad_venta * $this->precio_unidad;
    }
    //     function validastock ($stock_modelo)
    // {
    //     if(count($stock_modelo) >=0){
    //        $resultado = "no esta disponible";
    //     }else{
    //        $resultado = "OK";
    //     }
    //    return $resultado
    // }
}
