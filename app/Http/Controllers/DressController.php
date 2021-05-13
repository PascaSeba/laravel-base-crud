<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];

        return view('dresses.index', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //E se io tolgo l'id dalle parentesiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii? A cosa serve nelle parentesi l'id?
    {
        $data = Dress::find($id);  //Perché diamo $data? Comunque questo serve per cercare lo specifico id in questo contesto di documento.

        if($id) { //ovvero: SE esiste $id, allora fammi questo... (iin questo caso mi ritorna il mio vestito, ma solo perché ho chiamato riga 55)
            
            $vestito = Dress::find($id);

            $data = [
                'vestito' => $vestito
            ];
            return view('dresses.show', $data);
        }
        abort(404); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
