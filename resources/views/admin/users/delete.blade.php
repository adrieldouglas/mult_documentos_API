<!-- Modal -->
<div class="modal fade" id="delete-user{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #E0D9BF">
                <h5 class="modal-title" id="exampleModalLabel">Apagar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        @if($user->cover != null)
                        <img src="{{ url('storage/' . $user->cover) }}" class="rounded img-fluid" width="40">

                        @else
                        <img src="{{ url('assets/background/avatar.png') }}" class="rounded img-fluid" width="40">
                        @endif						
                        <p class="text-muted">Apagar usuário {{ $user->name }}</p>
                        <h1><i class="bi bi-trash3-fill text-danger"></i></h1>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-dismiss="modal" style="background-color: #D3D7CF;"><i class="bi bi-x-square"></i> Cancelar</button>
                    <button type="submit" class="btn" style="background-color: #E0D9BF;"><i class="bi bi-check2-square"></i> Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>