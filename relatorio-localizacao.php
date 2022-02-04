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
    left: 120px;
    top: 50px;
}
#select {
  height: 50px;
  border-radius: 25px;
  font-size: 14px;
}
</style>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src='img/localiza.png'></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Busca por Localização</h1>
              </div>
              
              <form class="user" method="POST" action="pesquisa-para-relatorios.php">
                <div class="form-group row">
                  <div class="">
                    <input type='hidden' name='select_niveis_acesso' value='descricao_localizacao'>
                    <input type='hidden' name='acao' value='like'>
                    <input type='hidden' name='relatorio' value='localizacao'>
                    <input type='hidden' name='relatorioc' value='localizacao-c'>
                    <input type='hidden' name='nomeCompleto' value=''>
                  </div>
                    
                  </div>
                  <div class="form-group">
                    
                        <select id='select' name="pesquisar" class="form-control " placeholder="Selecione" required>
                          <option value='' selected>Selecione a Localização</option>                        
                          <option value="TÉRREO ADMINISTRAÇÃO" >TÉRREO ADMINISTRAÇÃO</option>

                            <option value="TÉRREO ADMINISTRADOR">TÉRREO ADMINISTRADOR</option>

                            <option value="TÉRREO ALMOXARIFADO">TÉRREO ALMOXARIFADO</option>

                            <option value="TÉRREO APOIO">TÉRREO APOIO</option>

                            <option value="TÉRREO AQUISIÇÕES E CONTRATOS">TÉRREO AQUISIÇÕES E CONTRATOS</option>

                            <option value="TÉRREO ARQUIVO">TÉRREO ARQUIVO</option>

                            <option value="TÉRREO AUDITÓRIO AURELIANO MATOS">TÉRREO AUDITÓRIO AURELIANO MATOS</option>

                            <option value="TÉRREO AUDIÓRIO MANUEL OTERO">TÉRREO AUDIÓRIO MANUEL OTERO</option>

                            <option value="TÉRREO CASEIRO">TÉRREO CASEIRO</option>

                            <option value="TÉRREO CIAT">TÉRREO CIAT</option>

                            <option value="TÉRREO CONSULTORIA">TÉRREO CONSULTORIA</option>

                            <option value="TÉRREO COPA">TÉRREO COPA</option>

                            <option value="TÉRREO COPA ADMINISTRAÇÃO">TÉRREO COPA ADMINISTRAÇÃO</option>

                            <option value="TÉRREO ESTAÇÃO MULTIMÍDIA">TÉRREO ESTAÇÃO MULTIMÍDIA</option>

                            <option value="TÉRREO FINANCEIRO">TÉRREO FINANCEIRO</option>

                            <option value="TÉRREO INCLUSÃO DIGITAL">TÉRREO INCLUSÃO DIGITAL</option>

                            <option value="TÉRREO MOTORISTAS">TÉRREO MOTORISTAS</option>

                            <option value="TÉRREO PROTOCOLO">TÉRREO PROTOCOLO</option>

                            <option value="TÉRREO RECEPÇÃO">TÉRREO RECEPÇÃO</option>

                            <option value="TÉRREO RECURSOS HUMANOS">TÉRREO RECURSOS HUMANOS</option>

                            <option value="TÉRREO SALA DE REUNIÃO 3">TÉRREO SALA DE REUNIÃO 3</option>

                            <option value="TÉRREO SALA MATERIAIS DE LIMPEZA">TÉRREO SALA MATERIAIS DE LIMPEZA</option>

                            <option value="TÉRREO SALA NOBREAKS">TÉRREO SALA NOBREAKS</option>

                            <option value="TÉRREO SERVIÇOS GERAIS">TÉRREO SERVIÇOS GERAIS</option>

                            <option value="TÉRREO TESOURARIA">TÉRREO TESOURARIA</option>

                            <option value="TÉRREO VARANDA">TÉRREO VARANDA</option>

                            <option value="1º ANDAR ESTAÇÃO MULTIMÍDIA">1º ANDAR ESTAÇÃO MULTIMÍDIA</option>

                            <option value="1º ANDAR RECEPÇÃO">1º ANDAR RECEPÇÃO</option>

                            <option value="1º ANDAR SALA 1 SECRETÁRIAS">1º ANDAR SALA 1 SECRETÁRIAS</option>

                            <option value="1º ANDAR SALA 2 REUNIÃO DA REPRESENTAÇÃO">1º ANDAR SALA 2 REUNIÃO DA REPRESENTAÇÃO</option>

                            <option value="1º ANDAR SALA 3 REPRESENTANTE">1º ANDAR SALA 3 REPRESENTANTE</option>

                            <option value="1º ANDAR SALA 4 RECURSOS NATURAIS">1º ANDAR SALA 4 RECURSOS NATURAIS</option>

                            <option value="1º ANDAR SALA 5 COMUNICAÇÃO">1º ANDAR SALA 5 COMUNICAÇÃO</option>

                            <option value="1º ANDAR SALA 5 SANIDADE AGROPECUÁRIA">1º ANDAR SALA 5 SANIDADE AGROPECUÁRIA</option>

                            <option value="1º ANDAR SALA 6 ÁREA TÉCNICA">1º ANDAR SALA 6 ÁREA TÉCNICA</option>

                            <option value="1º ANDAR SALA 7 GESTÃO DO CONHECIMENTO">1º ANDAR SALA 7 GESTÃO DO CONHECIMENTO</option>

                            <option value="1º ANDAR SALA 7 GEDTÃO DO CONHECIMENTO SERVIDORES">1º ANDAR SALA 7 GEDTÃO DO CONHECIMENTO SERVIDORES</option>

                            <option value="2º ANDAR COPA">2º ANDAR COPA</option>

                            <option value="EMU2º ANDAR SALA DE REUNIÃO 1SO">2º ANDAR SALA DE REUNIÃO 1</option>

                            <option value="2º ANDAR SALA DE REUNIÃO 2">2º ANDAR SALA DE REUNIÃO 2</option>

                            <option value="DEPÓSITO">DEPÓSITO</option>

                            <option value="IRON MOUNTAIN">IRON MOUNTAIN</option>

                            <option value="REPRESENTAÇÃO DO IICA NO BRASIL">REPRESENTAÇÃO DO IICA NO BRASIL</option>
                        </select>
                   
                  <!-- espaço da condição -->
                  </div>
                    <br>
                <div>
                      <input type="checkbox" id="myCheckr" onclick="myFunctio()"> Relatório resumido
                      <input type='hidden' id="resumo" name='resumo' value='0'>
                      <script> 
                        function myFunctio() {
                          var checkBox = document.getElementById("myCheckr");
                          var resumo = document.getElementById("resumo");
                          if (checkBox.checked === true){
                            console.log('resumo = 1');
                            resumo.value = "1";
                          }else{
                            console.log('resumo = 0');
                            resumo.value = "0";
                          }
                        }  
                      </script>
                  </div> 
              
              <br>
              
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Buscar
                </button>
              </form>
                <hr>
               
              <div class="text-center">
                <a class="small" href="site.php">Voltar a Tela inicial<i class="fas fa-fw fa-tachometer-alt"></i></a>
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
