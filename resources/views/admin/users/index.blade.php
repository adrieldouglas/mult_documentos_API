@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_user }}</title>

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
                            <a class="nav-link active text-success" href="{{ route('admin.users.index') }}"><i class="bi bi-person-fill"></i> Usuários</a>
                        </li>
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
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="text-muted"><i class="bi bi-person-fill"></i> Usuários </h4>
                   <div class="row">
                       <div class="col-sm-3">
                           <div class="form-group">
                                <input type="search" id="input-search" class="form-control form-control form-control-sm" placeholder="Buscar">
                           </div>
                       </div>
                   </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Nome Completo</th>
                                <th scope="col">E-mail</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="users-search">
                            @foreach($users as $user)
                            <tr>
                                <th>
                                    <a href="" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#edit-user{{ $user->id }}" title="Editar"><i class="bi bi-pencil-fill"></i></a>
                                    @include('admin.users.edit')
                                    <a href="" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete-user{{ $user->id }}" title="Apagar"><i class="bi bi-trash3-fill"></i></a>
                                    @include('admin.users.delete')
                                </th>
                                <th scope="row">{{ $user->id }}</th>
                                <td>
                                    @if($user->cover != null)
                                    <img src="{{ url('storage/' . $user->cover) }}" class="rounded-circle img-fluid" width="25" data-holder-rendered="true"> {{ $user->name }}

                                    @else
                                    <img src="{{ url('assets/background/avatar.png') }}" class="rounded-circle img-fluid" width="25" data-holder-rendered="true"> {{ $user->name }}
                                    @endif    
                                </td>
                                <td>{{ $user->email }}</td>
                                <td><i class="bi bi-shield-lock-fill"></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ url('assets/js/users/search.js') }}"></script>
@endsection