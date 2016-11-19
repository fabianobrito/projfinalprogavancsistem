<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncias extends Model {

	protected $table = 'denuncia';
	public $timestamps = false;
	protected $fillable = array('descricao', 
        'titulo', 'data','urlMidia', 'baId');
	protected $dates = ['deleted_at'];

	function bairro() {
        return $this->belongsTo('App\Bairro');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');
    }
}