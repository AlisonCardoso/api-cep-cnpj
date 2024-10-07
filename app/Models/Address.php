<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
   
    protected $fillable = [ 'city','state','number','neighborhood','street','cep','complement'];
    //protected $fillable = [ 'workshop_id','city_id','address','number','district','cep','complement'];

           
    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
   
}
