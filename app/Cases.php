<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    //here sa cases nga model ato dugangan og attribute nga payments nga mo point sa casepayments nga model

	public function payments()
	{
		return $this->hasMany('App\Casepayments');
		//this basically means that Cases hasmany casepayments ...ok..lets try..
	}

}
