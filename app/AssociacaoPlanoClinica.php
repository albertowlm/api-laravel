<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssociacaoPlanoClinica extends Model
{
    protected $fillable = ['clinica_id', 'plano_id'];

}
