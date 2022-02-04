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
    top: 195px;
}
</style>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src='img/search.png'></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Busca Completa</h1>
              </div>
              
              <form class="user" method="REQUEST" action="fpdf/relatorios/completo2.php">
                <div>
                  <input type="checkbox" id="myCheckd" onclick="myFunction1()"> Data de cadastro do documento entre
                    <input type='hidden' id="data_entre" name='data_entre' value='0'>
                    <script> 
                    function myFunction1() {
                       var checkBox = document.getElementById("myCheckd");
                       var data_entre = document.getElementById("data_entre");
                       if (checkBox.checked === true){
                         console.log('data_entre = 1');
                         data_entre.value = "1";
                       }else{
                         console.log('data_entre = 0');
                         data_entre.value = "0";
                       }
                    }  
                    </script>
                </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                       
                        <input type="date" name="datai" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                      <div class="col-sm-6">
                       
                        <input type="date" name="dataf" class="form-control " id="exampleFirstName" placeholder="">
                      </div> 
                     
                    </div> 

                  <div>
                      <input type="checkbox" id="myChecks" onclick="myFunction2()"> Situação do ativo
                        <input type='hidden' id="situa_atv" name='situa_atv' value='0'>
                        <script> 
                        function myFunction2() {
                          var checkBox = document.getElementById("myChecks");
                          var situa_atv = document.getElementById("situa_atv");
                          if (checkBox.checked === true){
                            console.log('situa_atv = 1');
                            situa_atv.value = "1";
                          }else{
                            console.log('situa_atv = 0');
                            situa_atv.value = "0";
                          }
                        }  
                        </script>
                  </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <select id='select' name="situa" class="form-control " placeholder="Selecione">
                          <option selected>Selecione a situação do ativo</option>
                            <option value="EM USO" >EM USO</option>
                            <option value="EXCLUIDO">EXCLUIDO</option>
                            <option value="QUEBRADO">QUEBRADO</option>
                            <option value="DESUSO">DESUSO</option>
                            <option value="PARA VENDA">PARA VENDA</option>
                            <option value="EM MANUTENÇÃO" >EM MANUTENÇÃO</option>
                          </select> 
                      </div>
                      
                      <div class="col-sm-6">
                        
                      </div>
                    </div> 
                  
                    <div>
                      <input type="checkbox" id="myCheckt" onclick="myFunction3()"> Tipo do ativo
                        <input type='hidden' id="tipo_atv" name='tipo_atv' value='0'>
                          <script> 
                            function myFunction3() {
                              var checkBox = document.getElementById("myCheckt");
                              var tipo_atv = document.getElementById("tipo_atv");
                                if (checkBox.checked === true){
                                  console.log('tipo_atv = 1');
                                  tipo_atv.value = "1";
                                }else{
                                  console.log('tipo_atv = 0');
                                  tipo_atv.value = "0";
                                }
                            }  
                          </script>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      
                        <select id='select' name="tipo" class="form-control " placeholder="Selecione" >
                          <option selected >Selecione o tipo do ativo</option>
                            
                            <option value="1">1 - Eq. Escritório</option>
                            <option value="2">2 - Eq. informática</option>
                            <option value="3">3 - Veículos</option>
                            <option value="4">4 - Mobiliário</option>
                            <option value="5">5 - Eq. Comunicação</option>
                        </select>
                      </div> 
                       
                    </div> 
                  <div>           
                    <input type="checkbox" id="myCheckp" onclick="myFunction4()"> Projeto
                      <input type='hidden' id="projeto" name='projeto' value='0'>
                        <script> 
                          function myFunction4() {
                            var checkBox = document.getElementById("myCheckp");
                            var projeto = document.getElementById("projeto");
                            if (checkBox.checked === true){
                              console.log('projeto = 1');
                              projeto.value = "1";
                            }else{
                              console.log('projeto = 0');
                              projeto.value = "0";
                            }
                          }  
                        </script>
                  </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="projet" class="form-control " id="exampleFirstName" placeholder="" value=''>
                      </div>
                    </div>

                  <div>           
                    <input type="checkbox" id="myCheckr" onclick="myFunction5()"> Responsável
                      <input type='hidden' id="responsavel" name='responsavel' value='0'>
                        <script> 
                          function myFunction5() {
                            var checkBox = document.getElementById("myCheckr");
                            var responsavel = document.getElementById("responsavel");
                            if (checkBox.checked === true){
                              console.log('responsavel = 1');
                              responsavel.value = "1";
                            }else{
                              console.log('responsavel = 0');
                              responsavel.value = "0";
                            }
                          }  
                        </script>
                  </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="respons" class="form-control " id="exampleFirstName" placeholder="" value=''>
                      </div>
                    </div>
                  <div>   
                  
                    <input type="checkbox" id="myCheckv" onclick="myFunctio()"> Valor acima R$
                      <input type='hidden' id="vlr_entre" name='vlr_entre' value='0'>
                      <script> 
                        function myFunctio() {
                          var checkBox = document.getElementById("myCheckv");
                          var vlr_entre = document.getElementById("vlr_entre");
                          if (checkBox.checked === true){
                            console.log('vlr_entre = 1');
                            vlr_entre.value = "1";
                          }else{
                            console.log('vlr_entre = 0');
                            vlr_entre.value = "0";
                          }
                        }  
                      </script>
                  </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="valor" class="form-control " id="exampleFirstName" placeholder="" value=''>
                      </div>             
                    </div>
                    
                    
              <br>
              
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Buscar
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
