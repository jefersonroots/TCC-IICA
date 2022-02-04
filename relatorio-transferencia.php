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
    top: 145px;
}
</style>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src='img/transfe.png'></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Termo de Transferência</h1>
              </div>
              
              <form class="user" method="POST" action="fpdf/controle ativos/ativo-para-transferencia.php">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Nome do Representante IICA:</label>
                        <input type="text" name="representanteiica" class="form-control " id="exampleFirstName" placeholder="">
                        
                      </div> 
                      <div class="col-sm-6">
                      <label>CPF do Representante IICA:</label>
                        <input type="text" name="cpfrepresentante" class="form-control " id="exampleFirstName" placeholder="">
                      
                      </div> 
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Endereço atual do IICA:</label>
                        <input type="text" name="situado" class="form-control " id="exampleFirstName" placeholder="">
                        <input type='hidden' name='select_niveis_acesso' value='condicao'>
                        <input type='hidden' name='pesquisar' value='PARA VENDA'>
                      </div> 
                      <div class="col-sm-6">
                        
                        
                      </div> 
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Nome do representante da instituição beneficiada:</label>
                        <input type="text" name="representado" class="form-control " id="exampleFirstName" placeholder="">
                                             
                      </div> 
                      <div class="col-sm-6">
                      
                      <label>CPF do representante da instituição beneficiada:</label>
                        <input type="text" name="cpfrepresentado" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Nome da instituição beneficiada:</label>
                        <input type="text" name="contemplado" class="form-control " id="exampleFirstName" placeholder="">
                      
                      </div> 
                      <div class="col-sm-6">
                      <label>CNPJ da instituição beneficiada:</label>
                        <input type="text" name="cnpj" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                     
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-3 mb-3 mb-sm-0">

                      </div> 
                      <div class="col-sm-6">
                      <label>Número de páginas dos ativos a serem transferidos:</label>
                        <input type="number" name="num_pag" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                     
                    </div> 
              <br>
              
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Gerar Termo
                </button>
              </form>
                <hr>
               
              <div class="text-center">
                <a class="small" href="site.php"><i class="fas fa-fw fa-tachometer-alt"></i> Voltar a Tela principal</a>
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
