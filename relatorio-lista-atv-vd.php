<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <title>IICA Patrimônio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
img{
    position:absolute;
    left: 130px;
    top: 50px;
}
#dale{
  color: red;
}
</style>





<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src='img/doaa.png'></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Lista de ativos para Venda/Doação</h1>
              </div>
            <form class="user" method="POST" action="fpdf/ativo-para-venda-lista.php">
              <div class="form-group row">
                  <div class="col-sm-6 mb-6 mb-sm-0">
                  <label>Selecione a situação do ativo:</label>
                        <select id='select' name="pesquisar" class="form-control " placeholder="Selecione" required>
                        <option value='' selected>Selecione</option>
                          <option value="PARA VENDA">PARA VENDA</option>
                          <option value="DOACAO" >DOAÇÃO</option>
                        </select>
                        
                  </div>
                    <div class="col-sm-6">
                    <label>Acessórios Adicionais:</label> 
                    <input type='text' name='acessorio' class='form-control' id='exampleFirstName' placeholder='' >
                    </div>
              </div>
                    
              <br>
              
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Gerar lista
                </button>
            </form>
                <hr>
               
              <div class="text-center">
                <a class="small" href="site.php"><i class="fas fa-fw fa-tachometer-alt"></i>Voltar a Tela Principal</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
