<div class="modal fade" id="edit-document{{ $document->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('admin.documents.update', $document->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="modal-dialog modal-lg">  
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E0D9BF;">
                    <h5 class="modal-title"><i class="bi bi-trash3-fill"></i> Editar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                    
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="user_id">Usuário<i class="bi bi-asterisk text-danger small"></i></label>
                            <select class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id">
                             @foreach($users as $user)
                             <option value="{{ $user->id }}" {{ ($user->id === $document->user_id ? 'selected' : '') }}>{{ $user->name }}</option>
                             @endforeach
                         </select>
                         @if ($errors->has('user_id'))
                         <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('user_id') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label for="document_cpf">CPF<i class="bi bi-asterisk text-danger small"></i></label>
                          <input type="text" name="document_cpf" class="form-control {{ $errors->has('document_cpf') ? 'is-invalid' : '' }}" placeholder="____.____.____-___" data-mask="000.000.000-00" value="{{ old('document_cpf') ?? $document->document_cpf }}">
                          @if ($errors->has('document_cpf'))
                          <div class="invalid-feedback">
                            <i class="bi bi-exclamation-triangle"></i>
                            {{ $errors->first('document_cpf') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="document_rg">RG<i class="bi bi-asterisk text-danger small"></i></label>
                    <input type="text" name="document_rg" class="form-control {{ $errors->has('document_rg') ? 'is-invalid' : '' }}" placeholder="__.___.___-_" data-mask="00.000.000-0" value="{{ old('document_rg') ?? $document->document_rg }}">
                    @if ($errors->has('document_rg'))
                    <div class="invalid-feedback">
                        <i class="bi bi-exclamation-triangle"></i>
                        {{ $errors->first('document_rg') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
              <label for="document_cnh">CNH<i class="bi bi-asterisk text-danger small"></i></label>
              <input type="text" name="document_cnh" class="form-control {{ $errors->has('document_cnh') ? 'is-invalid' : '' }}" placeholder="___________" data-mask="00000000000" value="{{ old('document_cnh') ?? $document->document_cnh }}">
              @if ($errors->has('document_cnh'))
              <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('document_cnh') }}
            </div>
            @endif
        </div>
        <div class="col-sm-4">
            <label for="document_cnpj">CNPJ<i class="bi bi-asterisk text-danger small"></i></label>
            <input type="text" name="document_cnpj" class="form-control {{ $errors->has('document_cnpj') ? 'is-invalid' : '' }}" placeholder="__.___.___/____-__" data-mask="00.000.000/0000-00" value="{{ old('document_cnpj') ?? $document->document_cnpj  }}">
            @if ($errors->has('document_cnpj'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('document_cnpj') }}
            </div>
            @endif
        </div>
        <div class="col-sm-4">
            <label for="zipcode">CEP<i class="bi bi-asterisk text-danger small"></i></label>
            <input type="text" name="zipcode" class="form-control  {{ $errors->has('zipcode') ? 'is-invalid' : '' }}" placeholder="_____-___" data-mask="00000-000" value="{{ old('zipcode') ?? $document->zipcode  }}">
            @if ($errors->has('zipcode'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('zipcode') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for="voter_registration">Título de Eleitor<i class="bi bi-asterisk text-danger small"></i></label>
            <input type="text" name="voter_registration" class="form-control {{ $errors->has('voter_registration') ? 'is-invalid' : '' }}" placeholder="____________" data-mask="000000000000" value="{{ old('voter_registration') ?? $document->voter_registration }}">
            @if ($errors->has('voter_registration'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('voter_registration') }}
            </div>
            @endif
        </div>
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
</div>


