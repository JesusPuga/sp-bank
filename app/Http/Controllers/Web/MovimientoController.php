<?php

namespace App\Http\Controllers\Web;

use App\Movimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovimientoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimiento::orderBy('id','DESC')->paginate(3);
        return view('web.movimientos', compact('movimientos'));
    }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function usuarioMovimientos()
        {
            $userId = Auth::id();
            if($userId==null){
                $userId = 1;
            }
            $movimientos = Movimiento::orderBy('id','DESC')->where('cuenta_id',$userId)->paginate(3);

            return view('web.movimientos', compact('movimientos'));
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        //
    }
}
