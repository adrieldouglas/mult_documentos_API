<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/> 
  <link rel="stylesheet" href="{{ url(mix('assets/css/reset.css')) }}"/>
  <link rel="stylesheet" href="{{ url(mix('assets/css/boot.css')) }}"/>
  <link rel="stylesheet" href="{{ url(mix('assets/css/login.css')) }}"/>
  <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
  <link rel="icon" type="image/png" href="{{ url('assets/logo/logotipo.ico') }}"/>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">  
  <meta name="csrf-token" content="{{ csrf_token() }}">  


  <style type="text/css">
    video {
      object-fit: cover;
      width: 100vw;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
    }

  </style>

  <video playsinline autoplay muted loop poster="{{ url('assets/background/login_bg.jpg') }}">
  </video>

  <title>{{  $tit_login }}</title>

</head>
<body>
  <div class="ajax_response"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card" style="margin-top: 20%;">
          <div class="card-header" style="background-color: #E0D9BF;">Entrar - Mult-Documento</div>
          <div class="card-body">  
            <img src="{{ url('assets/logo/logotipo.ico') }}" class="img-fluid rounded mx-auto d-block" width="50">   
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
            <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">                   
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="font-weight-bold"><i class="bi bi-person-heart"></i> E-mail</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="password" class="font-weight-bold"><i class="bi bi-key-fill"></i> Senha</label>
                  <input id="password" type="password" class="form-control"
                  name="password_check" placeholder="Senha">                
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 text-right">
                  <a href="" data-toggle="modal" data-target="#access" class="text-muted"><i class="bi bi-door-open"></i> Criar Conta</a>
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-8">
                  <button class="btn radius" data-toggle="tooltip" title="Entrar" style="background-color: #E0D9BF;">
                   <i class="bi bi-check2-square"></i> Entrar
                 </button>   
                 <a href="{{ route('index') }}" class="btn" data-toggle="tooltip" title="Cancelar" style="background-color: #D3D7CF;"><i class="bi bi-x-square"></i> Cancelar</a>                               
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

 @include('admin.access')

 <script src="{{ url(mix('assets/js/jquery.js')) }}"></script> 
 <script src="{{ url(mix('assets/js/login.js')) }}"></script>
 <script src="{{ url(mix('assets/js/bundle.js')) }}"></script> 

 <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="cancel"]').tooltip()
  })
</script>

</body>
</html>
