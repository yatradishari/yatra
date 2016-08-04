<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Destination extends Model  {

	//use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'destinations';

 	
    public function state_name()
	{
	  return $this->hasOne('App\Model\State', 'id', 'state_id');
	}
}