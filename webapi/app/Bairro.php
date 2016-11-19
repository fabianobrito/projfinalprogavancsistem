<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model {

	protected $table = 'bairro';
	public $timestamps = false;
	protected $fillable = array('baNome', 'baZona');
	protected $dates = ['deleted_at'];

	public function denuncias()
    {
        return $this->hasMany('App\Denuncias');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Usuarios');
    }
}