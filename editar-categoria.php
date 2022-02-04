<?php
	include("config.php");
	$sql = "SELECT *,pa.observacao,com.dt_compra
  from patrimonio as pa
INNER JOIN funcionario as f ON pa.funcionario_idfuncionario  =  f.idfuncionario 
INNER JOIN cargo as carg ON f.cargo_idcargo  =  carg.idcargo 
INNER JOIN projeto as pr ON    pa.Projeto_idProjeto =   pr.idProjeto  
INNER JOIN localizacao as l ON   pa.localizacao_idlocalizacao  =  l.idlocalizacao 
INNER JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
INNER JOIN item_compra as ic ON pa.item_compra_iditem_compra = ic.iditem_compra
INNER JOIN compra as com ON ic.compra_idcompra = com.idcompra
INNER JOIN fundo as fun ON com.fundo_idfundo = fun.idfundo
INNER JOIN ativo as ati ON pa.ativo_idativo = ati.idativo
INNER JOIN categoria_ativo as cat ON ati.categoria_ativo_idcategoria_ativo = cat.idcategoria_ativo
INNER JOIN tipo_ativo as ta ON cat.tipo_ativo_idtipo_ativo = ta.idtipo_ativo
    WHERE idpatrimonio = ".$_REQUEST['idpatrimonio']."
";

	$res = $conn->query($sql) or die($conn->error);
  //$item_c = $conn->query($sql2) or die($conn->error);
  //$ativo = $conn->query($sql3) or die($conn->error);
 // $fundo = $conn->query($sql4) or die($conn->error);
  
	if($res == true){
    $row = $res->fetch_assoc();
   // $itemC = $item_c->fetch_assoc();
    //$ativoC = $ativo->fetch_assoc();
    //$fundoC = $fundo->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Editar Patrimônio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
  img{
    position:absolute;
    left: 125px;
    top: 300px;
}
</style>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src="img/pencil1.png"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Editar Patrimônio</h1>
              </div>

							<form action="salvar-patrimonio.php?page=salvar-patrimonio" method="POST">
								<input type="hidden" name="acao" value="editar">
								<input type="hidden" name="idpatrimonio" value="<?php print $row["idpatrimonio"]; ?>">
									<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<label>Nº do ativo</label>
												<input type="text" name="num_ativo" value="<?php print $row["idpatrimonio"]; ?> " class="form-control form-control-user" disabled>
											</div>
											<div class="col-sm-6">
												<label>Nº do ativo SEDE</label>
												<input type="text" name="num_ativo_sede" value="<?php print $row["num_ativo_sede"]; ?>" class="form-control form-control-user" disabled>
											</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label>Tipo</label>
                            <input type="text" name="descricao_tipo" value="<?php print $row['descricao_tipo']?>" class="form-control form-control-user" disabled>
											
                    </div>
										<div class="col-sm-6">
											<label>Ativo Móvel</label>
											<input type="text" name="ativo_movel" value="<?php print $row["descricao_ativo"]; ?>" class="form-control form-control-user" disabled>
										</div>
									</div>
								
									<div class="form-group">
										<label>Descrição Completa</label>
                  	<input type="text" name="descricao_completa" value="<?php print $row["descricao_item_compra"]; ?>" class="form-control form-control-user" >
									</div>

									<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
									<label>Situação do ativo</label>
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
									


									<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
											<label>Dt da Compra</label>
												<input type="date" name="dt_compra" value="<?php print $row["dt_compra"]; ?>" class="form-control form-control-user"  disabled>
											</div>
										<div class="col-sm-6">
										<label>Dt de Exclusão</label>
											<input type="date" name="data_exclusao" value="<?php print $row["data_exclusao"]; ?>" class="form-control form-control-user"  disabled>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label>Valor R$</label>
											<input type="text" name="valor" value="<?php print $row["valor_item_compra"]; ?>" class="form-control form-control-user" disabled>
                  	</div>
										<div class="col-sm-6">
											<label>Taxa U$</label>
											<input type="text" name="taxa_dolar" value="<?php print $row["taxa_dolar"]; ?>" class="form-control form-control-user"  disabled>
										</div>
                	</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
										<label>Valor U$</label>
											<input type="text" name="valor_dolar" value="<?php print $row["valor_dolar_item_compra"]; ?>" class="form-control form-control-user"  disabled>
										</div>
										<div class="col-sm-6">
										<label>Fundo</label>
											<input type="text" name="fundo" value="<?php print $row["descricao_fundo"]; ?>" class="form-control form-control-user"  disabled>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label>Projeto</label>
											<input type="text" name="projeto" value="<?php print $row["nome_projeto"]; ?>" class="form-control form-control-user" disabled>
                  	</div>
										<div class="col-sm-6">
											<label>Responsável</label>
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
									
									<div class="form-group row">
                  	<div class="col-sm-6 mb-3 mb-sm-0">
											<label>Descrição localização</label>
											
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
                  <div class="col-sm-6">
										<label>Observação</label>
                    <input type="text" name="status" value="<?php print $row["observacao"]; ?>" class="form-control form-control-user"  >
                  </div>
                </div>
									
								<hr>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Salvar
                </button>
             
                
              </form>
              <br>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php
	}
?>