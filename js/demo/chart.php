<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <title>Teste com o chart.js</title>
</head>

<body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
  <?php include("config.php"); 
            $num_total_doacao = $conn->query("SELECT * FROM bd_iica where condicao like '%DOAÇÃO%'")->num_rows; 
            $num_total_uso = $conn->query("SELECT * FROM bd_iica where condicao like '%EM USO%'")->num_rows ;
            $num_total_excluido = $conn->query("SELECT * FROM bd_iica where condicao like '%EXCLUÍDO%'")->num_rows ;
            $num_total_quebrado = $conn->query("SELECT * FROM bd_iica where condicao like '%QUEBRADO%'")->num_rows;
            $num_total_desuso = $conn->query("SELECT * FROM bd_iica where condicao like '%DESUSO%'")->num_rows;
            $num_total_venda = $conn->query("SELECT * FROM bd_iica where condicao like '%PARA VENDA%'")->num_rows;
            $num_total_manutencao = $conn->query("SELECT * FROM bd_iica where condicao like '%EM MANUTENÇÃO%'")->num_rows;
            ?>
            
  <!-- Begin Page Content -->
  <div class="container">
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card">
          <h5 class="card-header">MINHA PICA</h5>
          <div class="card-body">
            <h5 class="card-title"><?php echo $num_total_doacao. ', ' ; echo $num_total_uso. ', '; echo $num_total_excluido. ', '; echo $num_total_quebrado. ', '; echo $num_total_desuso. ', '; echo $num_total_venda. ', '; $num_total_manutencao; ?></h5>
            <canvas id="myChart" width="400" height="400"></canvas>
            
          </div>
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
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
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
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>