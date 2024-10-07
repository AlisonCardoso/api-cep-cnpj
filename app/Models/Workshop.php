<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_id',
        'cnpj',
        '$razao_social',
        'nome_fantasia',
        'descricao_situacao_cadastral',
        'nae_fiscal_descricao',
        'email',
        'phone_number',
        'responsavel'

        
    ];

    public function address()
    {

        return $this->hasOne(Address::class);
    }
    /*
    public function user()
    {

        return $this->hasMany(User::class);
    }
    public function address()
    {

        return $this->hasOne(Address::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }*/
}
