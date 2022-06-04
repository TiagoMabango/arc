<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação de Controle de Revendedores</title>

<link rel="stylesheet" href="<?= theme("/assets/plugins/fontawesome-free/css/all.min.css")?> ">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href=" <?= theme("/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")?> ">
<link rel="stylesheet" href=" <?= theme("/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?> ">
<link rel="stylesheet" href="<?= theme("/assets/plugins/jqvmap/jqvmap.min.css")?> ">
<link rel="stylesheet" href="<?= theme("/assets/dist/css/adminlte.min.css")?> ">
<link rel="stylesheet" href="<?= theme("/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")?> ">
<link rel="stylesheet" href="<?= theme("/assets/plugins/daterangepicker/daterangepicker.css")?> ">
<link rel="stylesheet" href="<?= theme("/ assets/plugins/summernote/summernote-bs4.css")?>">


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
            <h1 class="m-0 text-dark"> Controle Geral</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pagin Inicial</a></li>
              <li class="breadcrumb-item active">Controle Geral</li>
            </ol>
          </div>
          
        </div>

      </div>
      
    </div>


<section class="content">
    
    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

              <div class="info-box-content">
                <span class="info-box-text">Revendedores</span>
                <span class="info-box-number">
                  10
                </span>
                
              </div>
              
              <span class="info-box-icon bg-info elevation-1 rounded-circle"><i class="fas fa-users"></i></span>
             
            </div>

        </div>


        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">

              <div class="info-box-content">
                <span class="info-box-text">Produtos</span>
                <span class="info-box-number">
                  10
                </span>
                
              </div>
              
              <span class="info-box-icon bg-success elevation-1 rounded-circle"><i class="fas fa-shopping-cart"></i></span>
             
            </div>

        </div>


        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-8">

    <div class="shadow-sm bg-white mb-4">
    <div class="line-chart" >
      <div class=" p-3">
        <h6>Gráfico Mensal</h6>
        <p>O Presente gráfico ilustra o total Ganhos dos Revendedores !</p>
      </div>
      <div class="aspect-ratio p-0">
        <canvas id="chart" class="p-0 m-0" style=" padding: 0px !important; margin: 0px !important; height: 300px; width: 100%;"></canvas>
      </div>
    </div>
</div>
</div>


<div class="col-lg-4">
<div class="card p-3 bg-primary text-left rounded">
                <h6>Observação</h6>
              </div>

              <div class="card p-3  bg-primary text-left rounded">
               <p>Acesso reservado para o administrador do sistema , em outras palavras o  Dono da Loja.</p>
              </div>
            </div>
</div>
</div>
<!-- Left col -->

   
</div>
        </div>
             
      </div><!-- /.container-fluid -->


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


<script src=" <?= theme("/assets/plugins/jquery/jquery.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/jquery-ui/jquery-ui.min.js")?> "></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= theme("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")?> "></script>

<script src="<?= theme("/assets/plugins/sweetalert2/sweetalert.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/jqvmap/jquery.vmap.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/jqvmap/maps/jquery.vmap.usa.js")?>"></script>
<script src="<?= theme("/assets/plugins/jquery-knob/jquery.knob.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/moment/moment.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/daterangepicker/daterangepicker.js")?>"></script>
<script src="<?= theme("/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/summernote/summernote-bs4.min.js")?>"></script>
<script src="<?= theme("/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")?>"></script>
<script src="<?= theme("/assets/dist/js/adminlte.js")?>"></script>
<script src="<?= theme("/assets/dist/js/pages/dashboard.js")?>"></script>
<script src="<?= theme("/assets/plugins/chart.js/Chart.min.js")?>"></script>
<script src="<?= theme("/assets/dist/js/demo.js")?>"></script>


<script>
  // linerchart
  var lineChart = document.getElementById('chart').getContext('2d');
		var myLineChart = new Chart(lineChart, {
			type: 'line',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "Ganho dos Revendedores!",
					borderColor: ["#1d7af3"],
					pointBorderColor: "#FFF",
					pointBackgroundColor: "#1d7af3",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [1,2,3,4,5,6,7,8,9,10,11,12],				
				}]
			},
			options : {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					position: 'bottom',
					labels : {
						padding: 10,
						fontColor: '#1d7af3',
					}
				},
				tooltips: {
					bodySpacing: 4,
					mode:"nearest",
					intersect: 0,
					position:"nearest",
					xPadding:10,
					yPadding:10,
					caretPadding:10
				},
				layout:{
					padding:{left:15,right:15,top:15,bottom:15}
				}
			}
		});
    // Gráfico PIE

</script>

</body>
</html>