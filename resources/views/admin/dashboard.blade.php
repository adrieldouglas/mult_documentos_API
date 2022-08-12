@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_dashboard }}</title>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
             <img src="{{ url('assets/logo/logotipo.ico') }}" class="img-fluid rounded mx-auto d-block">
             <h1 class="text-muted text-center mt-2">Mult-Documentos</h1>
             <div class="dropdown-divider"></div>
             <div class="text-muted text-center">Bem-Vindo(a) {{ Auth:: user()->name }}</div>
             <div class="text-muted text-center">{{ $today }}</div>
        </div>
    </div>
</div>

@endsection
