<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{   
    public function indexObj()
    {
        dd('entra');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas= Venta::with('modelo.marca')->get();
        // dd($ventas); 
        return view('venta.index',compact('ventas'));
        
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'cantidad_venta'=>'required|int|max:50|',
            'total_venta'=>'required|string|max:50|',
            'modelo'=>'required|string|max:50|',
        ];
        $this->validate($request,$campos);

        $datosVenta=request()->except('_token','Enviar');
        venta::insert($datosVenta);
       // return response()->json($datosVenta);
        return redirect('index/')->with('msn','venta agregada exitosamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        $vehiculo=Venta::findOrFail($venta);
        return view('vehiculo.edit',compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $id_venta)
    {
        $datosVenta=request()->except('_token','_method');
        


        venta::where('id','=',$id_venta)->update($datosVenta);
        
       
        return redirect('marca/')->with('msn','marca actualizado exitosamente');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Venta $id_venta)
    // {
    //     DB::table('venta')->where('id_venta','=',$id)->delete();
    //     return redirect();
    // }
}
