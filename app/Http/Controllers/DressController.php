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
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // a questo punto mi salvo i dati della request nel form (riga 45)
        $data = $request -> all();

        //METODOLOGIA 1 - PER PASSARE I DATI DEL FORM
        /* $new_dress = new Dress();

        $new_dress->name = $data['name'];
        $new_dress->color = $data['color'];
        $new_dress->size = $data['size'];
        $new_dress->description = $data['description'];
        $new_dress->price = $data['price'];

            //A questo punto ci si definisce un metodo, proprio per salvare:
        $new_dress->save();

            //Come faccio a rimuoverlo senza che mi faccia una copia e a rimandare l'utente al suo vestito?
            //in questo modo mi fa ritornare alla pagine dei vestiti e posso visualizzare quindi il vestito appena creato
            return redirect()->route('vestiti.index'); */
        //FINE METODOLOGIA 1

        //METODOLOGIA 2 - PER PASSARE I DATI DEL FORM
        /* Controllare il Dress.php perché bisogna aggiungere il fill anche di là */

        $new_dress = new Dress();
        $new_dress->fill($data);
        $new_dress->save(); // N.B: l'id viene assegnato solo dopo che ho effettuato questa operazione, ovvero il salvataggio, e così anche per il timestamp

        return redirect()->route('vestiti.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //E se io tolgo l'id dalle parentesi? A cosa serve nelle parentesi l'id?
    {
        $data = Dress::find($id);  //Questo serve per trovare lo specifico id, ma non potevo trovarlo anche senza?

        if($id) { //ovvero: SE esiste $id, allora fammi questo... (in questo caso mi ritorna il mio vestito, ma solo perché ho chiamato a riga 55)
            
            $vestito = Dress::find($id); //SELECT id FROM dress WHERE 

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
