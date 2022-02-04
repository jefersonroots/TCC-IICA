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
    top: 100px;
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
                <h1 class="h4 text-gray-900 mb-4">Proposta de Venda</h1>
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                        
                  <label>Número de lotes:</label>
                  <input type="number" name="valorr" class="form-control " id="valor" >       
                </div> 
                <div class="col-sm-6">
                <label> .</label>
                  <button class="btn btn-primary btn-user btn-block" onclick="myFunction()">Gerar lotes</button> 
                  
                </div> 
              </div>
              <script>
              var capturando = 0;
              var num = 0;
              
              function myFunction() {
                capturando = document.getElementById('valor').value;

                while(capturando > num){ 
                  formata= num +1;
                  document.getElementById('valorDigitado').innerHTML += "<div class='form-group row'> <div class='col-sm-6 mb-3 mb-sm-0'>  <label>Lote Nº "+ formata +":</label> <input type='text' name='loten"+formata+"' class='form-control ' id='exampleFirstName' value= "+formata+" >  </div> <div class='col-sm-6'> <label>Nº Patrimônio lote "+formata+":</label> <input type='text'  name='pesquisar"+formata+"' class='form-control' id='exampleFirstName' placeholder='' required> </div> </div>  <div class='form-group row'> <div class='col-sm-6 mb-3 mb-sm-0'> <label>Valor Mínimo:</label> <input type='number' step='any' name='vlr_min"+formata+"' class='form-control' id='exampleFirstName' placeholder='' required> </div> <div class='col-sm-6'> <label>Acessorios Adicionais:</label> <input type='text' name='acessorio"+formata+"' class='form-control' id='exampleFirstName' placeholder='' >  <input type='hidden' name='valorr' value= "+formata+" ></div>  </div> <hr>";
                  num = num + 1;
                }
              }
                
              </script>

              
              <form class="user" method="POST" action="fpdf/ativo-para-venda.php">
              <input type='hidden' name='pesquisar1' value= 0 >  
                  <input type='hidden' name='loten1' value= 0 > 
                  <input type='hidden' name='vlr_min1' value= 0 >
                  <input type='hidden' name='p_lote1' value= 0 >
                  <input type='hidden' name='acessorio1' value= 0 >

                  <input type='hidden' name='pesquisar2' value= 0 >  
                  <input type='hidden' name='loten2' value= 0 > 
                  <input type='hidden' name='vlr_min2' value= 0 >
                  <input type='hidden' name='p_lote2' value= 0 >
                  <input type='hidden' name='acessorio2' value= 0 >

                  <input type='hidden' name='pesquisar3' value= 0 >  
                  <input type='hidden' name='loten3' value= 0 > 
                  <input type='hidden' name='vlr_min3' value= 0 >
                  <input type='hidden' name='p_lote3' value= 0 >
                  <input type='hidden' name='acessorio3' value= 0 >

                  <input type='hidden' name='pesquisar4' value= 0 >  
                  <input type='hidden' name='loten4' value= 0 > 
                  <input type='hidden' name='vlr_min4' value= 0 >
                  <input type='hidden' name='p_lote4' value= 0 >
                  <input type='hidden' name='acessorio4' value= 0 >

                  <input type='hidden' name='pesquisar5' value= 0 >  
                  <input type='hidden' name='loten5' value= 0 > 
                  <input type='hidden' name='vlr_min5' value= 0 >
                  <input type='hidden' name='p_lote5' value= 0 >
                  <input type='hidden' name='acessorio5' value= 0 >
              <p id="valorDigitado" ></p>  
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      
                      
                      </div> 
                      <div class="col-sm-6">
                      <input type='hidden' name='select_niveis_acesso' value='num_ativo'>
                      </div> 
                    </div> 
                    <label>Abertura das propostas em:</label>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Data:</label>
                        <input type="date" name="data" class="form-control " id="exampleFirstName" placeholder="" required>
                      </div> 
                      <div class="col-sm-6">
                        <label>Horário:</label>
                        <input type="time" name="hora" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                    </div>
                    
              <br>
              
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Gerar proposta
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
