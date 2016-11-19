<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model {

	public $timestamps = false;
	protected $fillable = array('usuEmail', 
      'usuSenha', 'usuNome', 'baId');
	protected $dates = ['deleted_at'];

	function bairro() {
    	return $this->belongsTo('App\Bairro');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }
}