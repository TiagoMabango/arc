<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação de Controle de Revendedores</title>

<link rel="stylesheet" href=" <?= theme("assets/plugins/fontawesome-free/css/all.min.css")?> ">
<link rel="stylesheet" href="<?= theme("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/jqvmap/jqvmap.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/dist/css/adminlte.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/daterangepicker/daterangepicker.css")?>">
<link rel="stylesheet" href="<?= theme("assets/plugins/summernote/summernote-bs4.css")?>">


</head>
<body  class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" >

<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

 </nav>

<aside class="main-sidebar sidebar-light-primary elevation-4">

        <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light ">REVENDEDORES</span>
        </a>

    <div class="sidebar navbar-primary ">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src=" <?= theme("assets/images/devT.jpg")?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block text-white"> Tiago Mabango</a>
            </div>
        </div>

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php require __DIR__. "/includes/menu.php"; ?>
        
        </ul>
      </nav>
      

    </div>
    
</aside>

<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Controle Dos Produtos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pagin Inicial</a></li>
              <li class="breadcrumb-item active">Produtos</li>
            </ol>
          </div>
          
        </div>

      </div>
      
    </div>


<section class="content">
    
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 bg-white p-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" 
                            id="pills-home-tab" 
                            data-toggle="pill" href="#pills-home" 
                            role="tab" aria-controls="pills-home"
                             aria-selected="true">
                               Cadastrar Produtos 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"
                             id="pills-profile-tab" 
                             data-toggle="pill"
                             href="#pills-profile"
                             role="tab"
                             aria-controls="pills-profile" 
                             aria-selected="false">
                                Produtos Disponíveis
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" 
                            id="pills-contact-tab" 
                            data-toggle="pill" 
                            href="#pills-contact" 
                            role="tab" 
                            aria-controls="pills-contact" 
                            aria-selected="false">
                                Produtos com Revendedores
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" 
                            id="pills-vendidos-tab" 
                            data-toggle="pill" 
                            href="#pills-vendidos" 
                            role="tab" 
                            aria-controls="pills-vendidos" 
                            aria-selected="false">
                                Produtos Vendidos
                            </a>
                        </li>

                    </ul>   

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card mt-4">
                  <form method="POST"  enctype="multipart/form-data">
                      <div class="card-body">
                        <div class="row">

                          <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nomeCompleto">Nome do Produto</label>
                                <input type="text" class="form-control" name="produto" placeholder="Digite o nome">
                            </div>
                        </div>

                        <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nomeCompleto">Quantidade</label>
                                <input type="text" class="form-control" name="quantidade" placeholder="Digite a quantide">
                            </div>
                        </div>

                      <div class="col-lg-4">

                        <div class="form-group">
                          <label for="sector" >Categoria do Produto </label>
                            <select class="form-control" name="motivo_avaria" id="select">
                              <option > Selecione a categoria</option>
                              <option value="Avaria"> Alimento</option>
                              <option value="Acidente"> Roupa</option>
                          </select>
                          </div>

                      </div>

                        <div class="col-lg-4">
                              <div class="form-group">
                                <label for="nomeCompleto">Preço</label>
                                <input type="text" class="form-control" name="preco" placeholder="Digite o Preço">
                            </div>
                        </div>

                        
                      </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                      </div>

                      </div>  
                      

                  </form>
            </div>
                        </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        
                        <div class="card mt-4">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Produto</th>
                                  <th>Categoria</th>
                                  <th>Preço</th>
                                  <th>Opções</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        
                                        <a class="btn btn-success btn-sm" href="#">
                                            <i class="fas fa-check">
                                            </i>
                                        </a>

                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-info">
                                            </i>
                                        </a>  
                                              
                                      </td>
                                </tbody>
                            </table>

                <div class="card-footer">
                <a   href="#" target="link" class="btn btn-primary text-white float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Abrir o  Relatório
                </a>
                </div>
                  </div>  
            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card mt-4">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Revendedor</th>
                                  <th>Categoria</th>
                                  <th>Preço</th>
                                  <th>Opções</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        
                                        <a class="btn btn-success btn-sm" href="#">
                                            <i class="fas fa-check">
                                            </i>
                                        </a>

                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-info">
                                            </i>
                                        </a>  
                                              
                                      </td>
                                </tbody>
                            </table>

                <div class="card-footer">
                <a   href="#" target="link" class="btn btn-primary text-white float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Abrir o  Relatório
                </a>
                </div>
                  </div>  
            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-vendidos" role="tabpanel" aria-labelledby="pills-vendidos-tab">
                        <div class="card mt-4">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Produto</th>
                                  <th>Revendedor</th>
                                  <th>Preço</th>
                                  <th>Opções</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        
                                        <a class="btn btn-success btn-sm" href="#">
                                            <i class="fas fa-check">
                                            </i>
                                        </a>

                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-info">
                                            </i>
                                        </a>  
                                              
                                      </td>
                                </tbody>
                            </table>

                <div class="card-footer">
                <a   href="#" target="link" class="btn btn-primary text-white float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Abrir o  Relatório
                </a>
                </div>
                  </div>  
            </div>

                        </div>

                    </div>

                    </div>
                </div>
        </div>

</section>
</div>



<footer class="main-footer">
    <strong>&copy; 2022 <a href="#">Tecnico Excelência</a>.</strong>
     Tutor: Tiago Mabango
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0.1
    </div>
  </footer>

</div>


<script src="<?= theme("assets/plugins/jquery/jquery.min.js")?>"></script>
<script src="<?= theme("assets/plugins/jquery-ui/jquery-ui.min.js")?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= theme("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
<script src="<?= theme("assets/plugins/sweetalert2/sweetalert.min.js")?>"></script>
<script src="<?= theme("assets/plugins/jqvmap/jquery.vmap.min.js")?>"></script>
<script src="<?= theme("assets/plugins/jqvmap/maps/jquery.vmap.usa.js")?>"></script>
<script src="<?= theme("assets/plugins/jquery-knob/jquery.knob.min.js")?>"></script>
<script src="<?= theme("assets/plugins/moment/moment.min.js")?>"></script>
<script src="<?= theme("assets/plugins/daterangepicker/daterangepicker.js")?>"></script>
<script src="<?= theme("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")?>"></script>
<script src="<?= theme("assets/plugins/summernote/summernote-bs4.min.js")?>"></script>
<script src="<?= theme("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")?>"></script>
<script src="<?= theme("assets/dist/js/adminlte.js")?>"></script>
<script src="<?= theme("assets/dist/js/pages/dashboard.js")?>"></script>
<script src="<?= theme("assets/plugins/chart.js/Chart.min.js")?>"></script>
<script src="<?= theme("assets/dist/js/demo.js")?>"></script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>


</body>
</html>