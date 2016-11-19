<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model {

	public $timestamps = false;
	protected $fillable = array('comDescricao', 
      'denId', 'usuId');
	protected $dates = ['deleted_at'];

	function denuncias() {
    	return $this->belongsTo('App\Denuncias');
    }

    function usuarios() {
    	return $this->belongsTo('App\Usuarios');
    }
}