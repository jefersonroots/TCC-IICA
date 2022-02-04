<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <title>Patrimônios IICA</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style> 
 .texto{
   color: #003366;
   font-size: 48px;
   font-style: italic;
   
   align: center;
 }
</style>
<body id="page-top">
    <?php
            session_start();
    ?>   
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="site.php">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <img src="img/iaa.png">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="site.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Patrimônios:</h6>
            <a class="collapse-item" href="cadastrar-patrimonio.php">Inserir</a>
            <a class="collapse-item" href="editar.php">Editar/Excluir </a>
            <a class="collapse-item" href="excluir.php">Exclusão em lote </a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Consultas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-chart-bar"></i>
          <span>Relatórios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">COMPLETO:</h6>   
            <!--<a class="collapse-item" href="relatorio-data-compra.php"><i class="fas fa-calendar-alt"></i> Data da Compra </a> -->
            
            <a class="collapse-item" href="relatorio-completo2.php"><i class="fas fa-filter"></i> Busca Completa</a>
            <hr>
           
            <h6 class="collapse-header">POR REGISTRO DÓLAR:</h6>
            <a class="collapse-item" href="fpdf/relatorios/valor-dolar-c.php"><i class="fas fa-dollar-sign"></i> Valor em Dólar (SEDE) </a>
            
            
            
            <hr>
            <h6 class="collapse-header">PARA DOAÇÃO/VENDA:</h6>
            <a class="collapse-item" href="relatorio-proposta-venda.php"><i class="fas fa-money-bill-alt"></i> Proposta de Venda </a>
            <a class="collapse-item" href="relatorio-lista-atv-vd.php"><i class="far fa-money-bill-alt"></i> Lista de ativos </a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseT" aria-expanded="true" aria-controls="collapseT">
        <i class="fas fa-clipboard-list "></i>
          <span>Termos</span>
        </a>
        <div id="collapseT" class="collapse" aria-labelledby="headingT" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <h6 class="collapse-header">TERMOS :</h6>
            <a class="collapse-item" href="relatorio-doacao.php"><i class="fas fa-donate"></i>  Doação</a>
            <a class="collapse-item" href="relatorio-emprestimo.php"><i class="fas fa-building"></i> Empréstimo </a>
            <a class="collapse-item" href="relatorio-responsavel.php"><i class="fas fa-user-check"></i> Responsabilidade </a>
            <a class="collapse-item" href="relatorio-transferencia.php"><i class="fas fa-random"></i> Transferência </a>
            <a class="collapse-item" href="relatorio-venda.php"><i class="far fa-money-bill-alt"></i> Venda </a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
     
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-qrcode"></i>
          <span>Gerar QRCode</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">QRCode:</h6>
            <a class="collapse-item" href="./qrcode/geraQRCode.php">Gerar QRCode</a>
            <a class="collapse-item" href="./qrcode/listarQRCode.php">Listar Ativos</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="listar-patrimonio.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Lista de Ativos  </span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <div class="texto"> </div>
            <img src="img/D.png">
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          <?php
            
          echo "<span class='mr-2 d-none d-lg-inline text-gray-600 small'>Logado como: ".$_SESSION['usuarioNome']."</span>";
            
          ?>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">

           
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL DE SALAS CONFERIDAS</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ativos SOLICITADOS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
             <!-- Begin Page Content -->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
  <?php include("config.php"); 
            $num_total_doacao = $conn->query("SELECT * 
            FROM patrimonio as pa
               INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%DOAÇÃO%'")->num_rows; 
            $num_total_uso = $conn->query("SELECT * 
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%EM USO%'")->num_rows ;
            $num_total_excluido = $conn->query("SELECT * 
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%EXCLUÍDO%'")->num_rows ;
            $num_total_quebrado = $conn->query("SELECT *
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%QUEBRADO%'")->num_rows;
            $num_total_desuso = $conn->query("SELECT *  
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like'%DESUSO%'")->num_rows;
            $num_total_venda = $conn->query("SELECT * 
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%PARA VENDA%'")->num_rows;
            $num_total_manutencao = $conn->query("SELECT * 
            FROM patrimonio as pa
            INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
            where condicao like '%EM MANUTENÇÃO%'")->num_rows;
            ?>
            
  <!-- Begin Page Content -->
 
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card">
          <h5 class="card-header">Situação do ativo</h5>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <canvas id="myChart" width="400" height="400"></canvas>
            
          </div>
        </div>
      </div>
    </div>
 
  <script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Doação',
          'Em Uso',
          'Excluído',
          'Quebrado',
          'Desuso',
          'Para Venda',
          'Manutenção',],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $num_total_doacao; ?>, <?php echo $num_total_uso; ?>, <?php echo $num_total_excluido; ?>, <?php echo $num_total_quebrado; ?>, <?php echo $num_total_desuso; ?>,  <?php echo $num_total_venda; ?> , <?php echo $num_total_manutencao; ?>],
          backgroundColor: [
            'rgba(43, 85, 140, 0.8)',
            'rgba(29, 55, 89, 0.8)',
            'rgba(143, 175, 217, 0.8)',
            'rgba(52, 138, 191, 0.8)',
            'rgba(220, 234, 242, 0.8)',
            'rgba(142, 215, 218, 0.8)',
            'rgba(196, 164, 232, 0.8)'
          ],
          borderColor: [
            'rgba(43, 85, 140, 55)',
            'rgba(29, 55, 89, 35)',
            'rgba(143, 175, 217, 85)',
            'rgba(52, 138, 191, 75)',
            'rgba(220, 234, 242, 95)',
            'rgba(142, 215, 218, 85)',
            'rgba(196, 164, 232, 91)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
            <!-- /.container-fluid -->
            <!-- Content Column -->
            
            <div class="col-xl-4 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card">
                <h5 class="card-header">Ativos emprestados</h5>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <canvas id="myChart1" width="400" height="400"></canvas>
                  
                </div>
              </div>
            </div>
          </div>
            
<script>
var ctx1 = document.getElementById('myChart1').getContext('2d');
var myChart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        datasets: [{
          label: 'Total de emprestimos',
            data: [12, 19, 3, 5, 2, 3, 8, 10, 5],
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
              
              <!-- Project Card Example -->
              

            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; IICA 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart.php"></script>

</body>

</html>
