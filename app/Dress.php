<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    //
    //Se ho una tabella "macchina", siccome in mysql me le va a trovare al plurale dall'inglese e quindi cercherà la tabella "macchinas", io, per evitare
    //questo problema e poter lavorare anche in italiano posso usare questo metodo per dirgli io stesso di cercare la tabella con lo specifico nome esatto:
    //protected $table = 'macchina';
    protected $fillable = ['name', 'description', 'color', 'size', 'season', 'price'];
}
