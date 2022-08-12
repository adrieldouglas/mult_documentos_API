<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Document as DocumentRequest;
use App\User;
use App\Models\Documents;

class DocumentController extends Controller
{
	public function index(){
		$tit_document = 'Documentos';
		$users = User::OrderBy('name')->get();
		$documents = Documents::OrderBy('id', 'DESC')->get();

		return view('admin.documents.index', [
			'tit_document' => $tit_document,
			'users' => $users,
			'documents' =>$documents
		]);
	}

	public function store(DocumentRequest $request){
		$documentCreate = Documents::create(
			$request->all()
		);

		return redirect()->route('admin.documents.index')->withErrors('Documento salvo com sucesso!');
	} 

	public function update(DocumentRequest $request, $id){

		$document = Documents::where('id', $id)->first();
		$document->fill($request->all());

		if (!$document->save()) {
			return redirect()->back()->withInput()->withErrors();
		}


		return redirect()->route('admin.documents.index')->withErrors('Documento atualizado com sucesso!');
	}

	public function destroy($id){
		$document = Documents::find($id);
		$document->delete();

		return redirect()->route('admin.documents.index')->withErrors('Documento apagado com sucesso!');
	}
}
