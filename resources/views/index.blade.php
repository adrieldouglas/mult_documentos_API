<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="Cache-Control" content="no-store" />
  <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
  <link rel="icon" type="image/png" href="{{ url('assets/logo/logotipo.ico') }}"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

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

  <title>{{ $tit_document }}</title>

</head>
<body class="bg-dark">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">        
        <h1 class="text-right display-2 font-weight-bold text-white" style="margin-top: 25%;">Mult-Documento</h1>
        <h3 class="text-white text-right font-weight-bold">Teste para vaga de desenvolvedor</h3>
        <a href="{{ route('admin.login') }}" class="btn btn-lg float-right"  style="background-color: #E0D9BF;"><i class="bi bi-box-arrow-right"></i> ACESSAR</a>
      </div>
    </div>
  </div>


  <script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
  <script src="{{ url(mix('assets/js/login.js')) }}"></script>
  <script src="{{ url(mix('assets/js/bundle.js')) }}"></script>

</body>
</html>