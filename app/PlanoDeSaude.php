<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoDeSaude extends Model
{
    protected $fillable = ['nome', 'logo', 'status'];

}
