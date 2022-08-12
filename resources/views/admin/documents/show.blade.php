<div class="modal fade" id="show-document{{ $document->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #E0D9BF;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-eye-fill"></i> Visualização</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            @if($document->user()->first()->cover !=null)
            <img src="{{ url('storage/' . $document->user()->first()->cover) }}" class="img-fluid rounded float-right" width="50" data-holder-rendered="true">
            <div class="text-muted text-uppercase mt-1" >{{ $document->user()->first()->name }}</div>

            @else
            <img src="{{ url('assets/background/avatar.png') }}" class="img-fluid rounded float-right" width="50" data-holder-rendered="true"> 
            <div class="text-muted text-uppercase mt-1">{{ $document->user()->first()->name }}</div>
            @endif  
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->document_cpf }}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->document_rg }}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>CNH</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->document_cnh }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->document_cnpj }}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->zipcode }}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Título de Eleitor</label>
                <input type="text" class="form-control form-control-sm" disabled value="{{ $document->voter_registration }}">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn" style="background-color: #D3D7CF;" data-dismiss="modal"><i class="bi bi-x-square"></i> Fechar</button>       
</div>
</div>
</div>
</div>



