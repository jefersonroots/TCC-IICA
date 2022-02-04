<?php
	include("config.php");
	$sql = "SELECT * FROM usuarios ";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res == true){
		$row = $res->fetch_assoc();
?>

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
#select {
  height: 50px;
  border-radius: 25px;
  font-size: .8rem;
  color: #858796;
}
#data {
  height: 50px;
  border-radius: 25px;
  font-size: .8rem;
  color: #858796;
}
label{
  font-size: 14px;
  align: center;
}
#name{
  color: #858796;
}
</style>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <div class="col-md-3 d-none d-lg-block "> </div>
          <div class="col-lg-7">
            <div class="p-4">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Cadastrar Patrimônio</h1>
              </div>
              <!-- o bixo começa a pegar aqui -->
              <form class="user" action="salvar-patrimonio.php?page=salvar-patrimonio" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="form-group row">
                  <div class="col-sm-5">
                  <div align="center">
                  <label> Nº do Ativo SEDE</label>
                  </div>
                    <input type="text" class="form-control form-control-user"  name="num_ativo_sede" placeholder="" >
                  </div>
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="hidden" class="form-control form-control-user"  name="" placeholder="Nº do Ativo">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label> Tipo</label>
                  </div>
                  <select required  id='select' name="tipoAtivo" class="form-control " placeholder="Selecione" >
                        <option value='' >Escolha uma opção</option>
                          
                        <?php
                        include "config.php";
                          $result_pesquisa = "SELECT * FROM tipo_ativo ";
                          $resultado_niveis_acesso = mysqli_query($conn, $result_pesquisa);
                          while($row_pesquisa = mysqli_fetch_array($resultado_niveis_acesso)){         
                            ?>
                            <option value="<?php echo $row_pesquisa['idtipo_ativo']; ?>"><?php echo  $row_pesquisa['descricao_tipo'];?></option> 
                        <?php
                         }
                        ?>
                        </select>
                  </div>
                  <div class="col-sm-6">
                  <div align="center">
                  <label> Ativo Móvel</label>
                  </div>
                    <select id='select' name="ativo_movel" class="form-control " placeholder="Selecione" required>
                        <option value='' selected>Escolha uma opção</option>      

                            <option value="SIM">SIM</option> 
                            <option value="NAO">NÃO</option> 
                       
                               
                                              
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label> Situação do ativo</label>
                  </div>
                      <select id='select' name="condicao" class="form-control " placeholder="Selecione" required>
                        <option value='' selected>Escolha uma opção</option>

                        <?php
                          $result_pesquisa = "SELECT DISTINCT condicao,idcondicao FROM `condicao` WHERE `condicao` != 'NULL' order by `condicao` ASC";
                          $resultado_niveis_acesso = mysqli_query($conn, $result_pesquisa);
                          while($row_pesquisa = mysqli_fetch_assoc($resultado_niveis_acesso)){ 
                  
                            ?>
                            <option value="<?php echo $row_pesquisa['idcondicao']; ?>"><?php echo $row_pesquisa['condicao']; ?></option> 
                        <?php
                          }
                        ?>        
                      </select>
                  </div>
                  <!-- espaço da condição -->
                </div>
                <div class="form-group">
                <div align="center">
                  <label> Descrição Completa</label>
                  </div>
                  <input type="text" class="form-control form-control-user"  name="descricao_completa" placeholder="" required>
                </div>
               
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label> Data de Compra</label>
                  </div>
                    <input type="date" id='data_compra' class="form-control form-control-user"  name="data_compra" placeholder="data compra" required>
                  </div>
                  <div class="col-sm-6">
                  <div align="center">
                  
                  </div>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label> Valor R$</label>
                  </div>
                    <input type="text" class="form-control form-control-user" name="valor" placeholder="" required>
                  </div>
                  <div class="col-sm-6">
                  <div align="center">
                  <label>Taxa U$</label>
                  </div>
                    <input type="text" class="form-control form-control-user"  name="taxa_dolar" placeholder="" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label>Valor U$</label>
                  </div>
                    <input type="text" class="form-control form-control-user" name="valor_dolar" placeholder="" required>
                  </div>
                  <div class="col-sm-6">
                  <div align="center">
                  <label>Fundo</label>
                  </div>
                  <select   id='select' name="fundo" class="form-control " placeholder="Selecione" required>
                    <option value='' selected>Escolha uma opção</option>
                        <?php
                          $result_pesquisa = "SELECT * FROM fundo";
                          $resultado= mysqli_query($conn, $result_pesquisa);
                          while($row_Fundo = mysqli_fetch_assoc($resultado)){ 
                  
                            ?>
                            <option value="<?php echo $row_Fundo['idfundo']; ?>"><?php echo $row_Fundo['descricao_fundo']; ?></option> 
                        <?php
                          }
                        ?>      
                         
                  </select>
                 </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <div align="center">
                  <label>Projeto</label>
                  </div>
                  <select id='select' name="projeto" class="form-control " placeholder="Selecione" required>
                        <option value='' selected>Escolha uma opção</option>

                        <?php
                          $result_pesquisa = "SELECT DISTINCT nome_projeto,idProjeto FROM `projeto` WHERE `idProjeto` != 'NULL' order by `nome_projeto` ASC";
                          $resultado_niveis_acesso = mysqli_query($conn, $result_pesquisa);
                          while($row_pesquisa = mysqli_fetch_assoc($resultado_niveis_acesso)){ 
                  
                            ?>
                            <option value="<?php echo $row_pesquisa['idProjeto']; ?>"><?php echo $row_pesquisa['nome_projeto']; ?></option> 
                        <?php
                          }
                        ?>        
                      </select>
                  </div>
                  <div class="col-sm-6">
                  <div align="center">
                  <label>Responsável</label>
                  </div>
                  <select id='select' name="responsavel" class="form-control " placeholder="Selecione" required>
                        <option value='' selected>Escolha uma opção</option>

                        <?php
                          $result_pesquisa = "SELECT nome_funcionario,idfuncionario FROM funcionario WHERE `nome_funcionario` != 'NULL' order by `nome_funcionario` ASC";
                          $resultado_niveis_acesso = mysqli_query($conn, $result_pesquisa);
                          while($row_pesquisa = mysqli_fetch_assoc($resultado_niveis_acesso)){ 
                  
                            ?>
                            <option value="<?php echo $row_pesquisa['idfuncionario']; ?>"><?php echo $row_pesquisa['nome_funcionario']; ?></option> 
                        <?php
                          }
                        ?>        
                      </select>
                  </div>
                </div>

                <div class="form-group">
                <div align="center">
                  <label>Descrição da Localização </label>
                  </div>
                  
                  <select   id='select' name="descricao_localizacao" class="form-control " placeholder="Selecione" required>
                    <option value='' selected>Escolha uma opção</option>
                        <?php
                          $result_pesquisa = "SELECT DISTINCT descricao_localizacao,idlocalizacao FROM localizacao WHERE `descricao_localizacao` != 'NULL' order by `descricao_localizacao` ASC";
                          $resultado_niveis_acesso = mysqli_query($conn, $result_pesquisa);
                          while($row_pesquisa = mysqli_fetch_assoc($resultado_niveis_acesso)){ 
                  
                            ?>
                            <option value="<?php echo $row_pesquisa['idlocalizacao']; ?>"><?php echo $row_pesquisa['descricao_localizacao']; ?></option> 
                        <?php
                          }
                        ?>      
                         
                  </select>
                 
                </div>
                <div class="form-group">
                <div align="center">
                  <label>Observação</label>
                  </div>
                  <input type="text" class="form-control form-control-user"  name="status" placeholder="" >
                </div>
                <hr>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Cadastrar
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
<?php
	}
?>