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

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block "></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Termo de Empréstimo</h1>
              </div>
              
              <form class="user" method="POST" action="fpdf/controle ativos/emprestimo.php">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                      <div class="col-sm-6">
                        <label>Cargo/Função:</label>
                        <input type="text" name="cargo" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                    </div> 
                
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Local do Uso:</label>
                        <input type="text" name="local" class="form-control " id="exampleFirstName" placeholder="">
                          <input type='hidden' name='select_niveis_acesso' value='num_ativo'>
                      </div>
                        <div class="col-sm-6">
                          <label>Digite o número do patrimônio:</label>
                          <input type="text" name="pesquisar" class="form-control " id="exampleLastName" placeholder="" required>
                          
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  
                    <label>Data de retirada:</label>
                      <input type="date" name="datai" class="form-control " id="exampleLastName" placeholder="dd/mm/aaaa" required>
                    </select>
                  </div><br><br>
                    <div class="col-sm-6">
                      <label>Data de devolução:</label>
                      <input type="date" name="dataf" class="form-control " id="exampleLastName" placeholder="dd/mm/aaaa" required>
                    </div>
                </div> 
                    <div class="form-group ">
                     
                      <label>Justificativa:</label>
                          <input type="text" name="justificativa" class="form-control " id="exampleLastName" placeholder="" required>                           
                      </div>
                        <div class="col-sm-6">
                          
                          
                        </div>
                    </div>
                        
                <button class="btn btn-primary btn-user btn-block" type="submit" >
                  Gerar Termo
                </button>
              </form>
                <hr> 
               
              <div class="text-center">
                <a class="small" href="site.php"><i class="fas fa-fw fa-tachometer-alt"></i> Voltar a Tela principal</a>
              </div>
              <br>
              
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
