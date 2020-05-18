<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurantes extends Model
{
    public $timestamps = false;
	const UPDATED_AT = null;
    protected $primaryKey='id_restaurantes';
}
