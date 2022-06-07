<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação de Controle de Revendedores</title>

    <link rel="stylesheet" href="<?= theme("/assets/plugins/fontawesome-free/css/all.min.css");?>">
    <link rel="stylesheet" href="<?= theme("/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"); ?> ">
    <link rel="stylesheet" href=" <?= theme("/assets/dist/css/adminlte.min.css"); ?>">


<style>
      body {
        
        background: #d7d7d7;
        background-image: linear-gradient(#000000b9, #000000b9), url(<?= theme('/assets/images/Vendedor-Ambulante.jpg')?>) !important;
        background-size: 100%;
        background-repeat: no-repeat;
      }

  </style>

</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div class="card  ">
    <div class="card-body login-card-body border border-primary">
      <p class="login-box-msg">Faz o login e inicia a sessão!</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Telefone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

      </form>

      <div class="social-auth-links text-center mb-3">
        <a href=" <?= url("principal");?>" class="btn btn-block btn-primary">
           Logar
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1 text-center">
        <a href=" <?= url("creat_cont")?>">Cadastrar a minha Loja</a>
      </p>
    </div>

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src=" <?=theme("/assets/plugins/jquery/jquery.min.js"); ?> "></script>
<script src=" <?=theme("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src=" <?=theme("/assets/dist/js/adminlte.min.js"); ?>"></script>

</body>
</html>