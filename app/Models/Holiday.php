<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    //
    //use HasFactory;
    protected $guarded = []; //esto solo es por el curso que se esta hciendo, despues pa produccion tenes que poner en la raiz de fareboll con los campos
                               //que queres que se rellenen 

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function calendar(){
        return $this->belongsTo(Calendar::class);
    }
}
