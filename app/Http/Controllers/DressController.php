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

        $request->validate([
            'name' => 'required|unique:dresses|max:255',
            'color' => 'required|max:20',
            'size' => 'required|max:4',
            'description' => 'required',
            'price' => 'required|numeric',
            'season' => 'required'
        ]);

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
        /* Controllare il Dress.php perch?? bisogna aggiungere il fill anche di l?? */

        $new_dress = new Dress();
        $new_dress->fill($data);
        $new_dress->save(); // N.B: l'id viene assegnato solo dopo che ho effettuato questa operazione, ovvero il salvataggio, e cos?? anche per il timestamp

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

        if($id) { //ovvero: SE esiste $id, allora fammi questo... (in questo caso mi ritorna il mio vestito, ma solo perch?? ho chiamato a riga 55)
            
            $vestito = Dress::find($id); //SELECT id FROM dress WHERE 

            $data = [
                'vestito' => $vestito
            ];
            return view('dresses.show', $data);
        }
        abort(404); //Perch?? non funziona?
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $vestiti)
    {
        //
        //primo metodo: 
        //$dress_to_update = Dress::findOrFail($id); //?? un find, la differenza con l'altro ?? che se
                                                    //non esiste mi ritorna un errore
        
        //Secondo metodo: molto pi?? corto, a riga 112 nella parentesi non serve inserire l'id ma solo quell'istanza e poi usarla
        //@dd($vestiti);
        return view('dresses.edit', compact('vestiti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $vestiti)
    {
        //
        $data = $request -> all();
        $vestiti->update($data);
        return redirect()->route('vestiti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $vestiti)
    {
        //
        $vestiti->delete();
        return redirect()->route('vestiti.index');
    }
}
