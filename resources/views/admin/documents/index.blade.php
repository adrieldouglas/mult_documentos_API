@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_document }}</title>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card mt-4">
				<div class="card-body">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link text-muted" href="{{ route('admin.home') }}"><i
								class="bi bi-pc-display"></i> Dashboard >></a>
							</li>
							<li class="nav-item">
								<a class="nav-link active text-success" href="{{ route('admin.documents.index') }}"><i class="bi bi-person-fill"></i> Documentos</a>
							</li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-12 mt-2">
			@if ($errors->all())
			@foreach ($errors->all() as $error)
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> {{ $error }}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endforeach
			@endif
		</div>    
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<h4 class="text-muted"><i class="bi bi-file-earmark-text"></i> Documentos <a href="" class="btn float-right" data-toggle="modal" data-target="#add-document" style="background-color: #E0D9BF;"><i class="bi bi-plus"></i> Adicionar</a> </h4>
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<input type="search" id="input-search" class="form-control form-control form-control-sm" placeholder="____." data-mask="000">	
								<span class="text-muted">3° primeiro número do cpf</span>
							</div>
						</div>
					</div>
					@if(count($documents) > 0)
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">#</th>
								<th scope="col">Usuário</th>
								<th scope="col">CPF</th>								
								<th scope="col">Publicado</th>
							</tr>
						</thead>
						<tbody id="documents-search">	
							@foreach($documents as $document)							
							<tr>
								<th>
									<a href="" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#edit-document{{ $document->id }}" title="Editar {{ $document->user()->first()->name }}"><i class="bi bi-pencil-fill" ></i></a>

									@include('admin.documents.edit')

									<a href="" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete-document{{ $document->id }}" title="Apagar documento de {{ $document->user()->first()->name }}"><i class="bi bi-trash3-fill"></i></a>		

									@include('admin.documents.delete')					

									<a href="" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#show-document{{ $document->id }}" title="Visualizar"><i class="bi bi-eye-fill"></i></a>

									@include('admin.documents.show')

								</th>
								<th scope="row">{{ $document->id }}</th>
								<td>
									@if($document->user()->first()->cover !=null)
									<img src="{{ url('storage/' . $document->user()->first()->cover) }}" class="rounded-circle img-fluid" width="25" data-holder-rendered="true"> {{ $document->user()->first()->name }}

									@else
									<img src="{{ url('assets/background/avatar.png') }}" class="rounded-circle img-fluid" width="25" data-holder-rendered="true"> {{ $document->user()->first()->name }}
									@endif  

									
								</td>										
								<td>{{ $document->document_cpf }}</td>								
								<td>{{ $document->publication }}</td>
							</tr>	
							@endforeach						
						</tbody>
					</table>
					@else
					<img src="{{ url('assets/logo/logotipo.ico') }}" width="50" class="img-fluid rounded mx-auto d-block">
					<div class="text-muted text-center mt-2">Nenhum documento no momento</div>
					@endif 
				</div>
			</div>
		</div>
	</div>
</div>

@include('admin.documents.create')

@endsection

@section('script')
<script src="{{ url('assets/js/documents/search.js') }}"></script>
@endsection