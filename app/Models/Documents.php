<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Documents extends Model
{
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	protected $fillable = [
		'document_cpf', 'document_rg', 'document_cnh', 'document_cnpj', 'zipcode', 'voter_registration', 'user_id'
	];

	public function getPublicationAttribute()
	{
		return date('d/m/Y H.i.s', strtotime($this->created_at));
	}

}
