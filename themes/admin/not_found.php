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


</head>

<body class="hold-transition sidebar-mini">


      
<div class="container-fluid">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>404 Erro com a Página</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">404 </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content ">
      <div class="error-page">
        <h2 class="headline text-warning "> 404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Essa página não existe 🧐.</h3>

          <p>
             Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível ou foi removido
              😔 <a href="<?= url()?>">Voltar a página princial!</a> vou tente mais tarde.
          </p>

        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

    
    </div>


<script src=" <?=theme("/assets/plugins/jquery/jquery.min.js"); ?> "></script>
<script src=" <?=theme("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src=" <?=theme("/assets/dist/js/adminlte.min.js"); ?>"></script>

</body>
</html>