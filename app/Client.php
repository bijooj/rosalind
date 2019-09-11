<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    //
    protected $table = 'client';

    protected $fillable = [
    	'name','cpf','rg','address','date_birth','description'
    ];
}
