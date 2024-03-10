<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
	protected $table='cart';
	public $timestamps = false;
}
