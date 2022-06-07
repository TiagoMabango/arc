<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro De Placa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Aplicação de Controle de Revendedores</title>

<link rel="stylesheet" href="<?= theme("/assets/plugins/fontawesome-free/css/all.min.css");?>">
<link rel="stylesheet" href="<?= theme("/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"); ?> ">
<link rel="stylesheet" href=" <?= theme("/assets/dist/css/adminlte.min.css"); ?>">

  <style>
    body {
      background: #d7d7d7;
      height: 100vh;
      background-image: linear-gradient(#000000b9, #000000b9), url(<?= theme('/assets/images/Vendedor-Ambulante.jpg')?>) !important;
      background-size: 100%;
      background-repeat: no-repeat;
    }

    .container {
      max-width: 62rem;
      margin: 4rem auto;

      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center !important;
      flex-wrap: wrap;
    }
  </style>
</head>
<body class="hold-transition ">
<div class="container ">
  <div class="login-logo ">
    <a href="#" class="text-white"><b>A</b>CR</a>
  </div>
  <!-- /.login-logo -->
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-body register-card-body ">
        <p class="login-box-msg">Crie a sua Conta e Gerencie a tua <strong> Loja</strong></p>

        <form  method="POST" enctype="multipart/form-data" class="row">
          <div class="input-group form-group col-lg-8">
            <input type="text" class="form-control" name="user" placeholder="Digite o seu nome Competo">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>


          <div class="input-group form-group col-lg-4">
            <input type="text" class="form-control" placeholder="Digite o seu Endereço" name = "address">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>
          <div class="input-group form-group col-lg-4">
            <input type="int" class="form-control" maxlength="9" minlength="9" placeholder="Digite o número de Telefone" name= "phone">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>

          <div class="input-group form-group col-lg-4">
            <input type="text" class="form-control" placeholder="Digite o número de BI" name= "bi">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>

          <div class="input-group form-group col-lg-4">
            <input type="password" class="form-control" placeholder="Digite a sua Senha" name= "senha">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>

          <div class="input-group form-group col-lg-4">
            <input type="password" class="form-control" placeholder="Digite a novamente sua Senha" name= "senhaConfirme">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>

          <div class="input-group form-group col-lg-4">
                <select class="form-control" name="sex" id="select">
                    <option > Selecione o Sexo</option>
                    <option value="M"> Masculino</option>
                    <option value="F"> Femenino</option>
                </select>
          </div>
          
          <div class="input-group form-group col-lg-4">
          <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
              <label class="custom-file-label" for="exampleInputFile">Selecione a foto</label>
            </div>
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
          </div>

          
          
            <!-- /.col -->
            <div class="col-4">
              <button type="submit"  name="cadastrar" class="btn btn-primary btn-block">Cadastrar</button>
            </div>

        </form>

        <div class="social-auth-links text-center">
          <p>- OU -</p>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href=" <?= url()?>"  class="text-center">Já tenho a minha Loja Registada</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>

</div>

<script src=" <?=theme("/assets/plugins/jquery/jquery.min.js"); ?> "></script>
<script src=" <?=theme("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src=" <?=theme("/assets/dist/js/adminlte.min.js"); ?>"></script>

</body>
</html>
