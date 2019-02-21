<?php

namespace restfull;

use Illuminate\Database\Eloquent\Model;
use restfull\Restfull;

class Restfull extends Model
{
    protected $table = 'restfull'; //nombre de la tabla
    protected $fillable = array('name','details');
}
