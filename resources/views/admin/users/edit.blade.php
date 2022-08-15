<!-- Modal Access -->
<div class="modal fade" id="edit-user{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-dialog modal-dialog-centered">  
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E0D9BF;">
                    <h5 class="modal-title"><i class="bi bi-pencil-fill"></i> Editar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cover">Foto do perfil</label>
                        <input type="file" name="cover" id="cover" class="form-control-file {{ $errors->has('cover') ? 'is-invalid' : '' }}">
                        @if ($errors->has('cover'))
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('cover') }}
                        </div>
                        @endif
                        @if($user->cover != null)
                        <img src="{{ url('storage/' . $user->cover) }}" class="img-fluid rounded" width="35" data-holder-rendered="true">

                        @else
                        <img src="{{ url('assets/background/avatar.png') }}" class="img-fluid rounded" width="35" data-holder-rendered="true"> 
                        @endif 
                    </div>
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') ?? $user->name }}">
                        @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') ?? $user->email }}">
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" autocomplete="off">
                        @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" style="background-color: #D3D7CF;"><i class="bi bi-x-square"></i> Cancelar</button>
                    <button type="submit" class="btn" style="background-color: #E0D9BF;"><i class="bi bi-check2-square"></i> Atualizar</button>
                </div>
            </div>		
        </div>
    </form>
</div>
