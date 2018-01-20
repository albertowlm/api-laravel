<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = ['cnpj', 'nome', 'user_id'];
}
