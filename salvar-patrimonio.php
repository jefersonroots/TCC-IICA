<?php
include("config.php");
	$nome_categoria         = @$_REQUEST["nome_categoria"];			// -> CATEGORIA_ATIVO(DESCRICAO_CATEGORIA)
	$num_ativo              = @$_REQUEST["num_ativo"];				// -> PATRIMONIO(IDPATRIMONIO)
	$num_ativo_sede         = @$_REQUEST["num_ativo_sede"]; 		// -> PATRIMONIO(NUM_ATIVO_SEDE)
	$tipoAtivo              = @$_REQUEST["tipoAtivo"];				// -> TIPO_ATIVO (DESCRICAO_TIPO)
	$ativo_movel            = @$_REQUEST["ativo_movel"];			//-> ATIVO (DESCRICAO_ATIVO)
	$descricao_completa     = @$_REQUEST["descricao_completa"];		//-> ITEM_COMPRA (DESCRICAO_ITEM_COMPRA)
	$condicao               = @$_REQUEST["condicao"];	   			// -> PATRIMONIO(IDCONDICAO)
	$data_compra            = @$_REQUEST["data_compra"];  			//-> COMPRA ( TAXA_DOLAR)
	$data_excluso           = @$_REQUEST["data_excluso"]; 			// -> PATRIMONIO
	$valor                  = @$_REQUEST["valor"]; 		   			//-> ITEM_COMPRA (VALOR_ITEM_COMPRA)
	$taxa_dolar             = @$_REQUEST["taxa_dolar"];    			//-> ITEM_COMPRA ( TAXA_DOLAR)
	$valor_dolar            = @$_REQUEST["valor_dolar"];			//-> ITEM_COMPRA ( VALOR_DOLAR_ITEM_COMPRA)
	$fundo                  = @$_REQUEST["fundo"];					// ->FUNDO(IDFUNDO)
	$projeto                = @$_REQUEST["projeto"];	   			// -> PATRIMONIO(IDPROJETO)
	$responsavel            = @$_REQUEST["responsavel"];   			// -> PATRIMONIO(IDFUNCIONARIO)
	$descricao_localizacao  = @$_REQUEST["descricao_localizacao"];  // -> PATRIMONIO(IDLOCALIZACAO)
	$status                 = @$_REQUEST["status"];                	// -> PATRIMONIO(OBSERVACAO)


	switch($_REQUEST["acao"]){
		/// -> CADASTRAR

		case "cadastrar":
			if(	$num_ativo_sede == '' and $valor_dolar > 999){
				print "<script>alert('Erro, por favor preencha o Nº do Ativo SEDE');</script>";
				print "<script>location.href='javascript:history.back(-1)';</script>";
			}else{ 

// -> insert de compra 				
				$sqlC = "INSERT INTO compra(idcompra,dt_compra,taxa_dolar,fundo_idfundo)VALUES (DEFAULT,'{$data_compra}','{$taxa_dolar}','{$fundo}') ";
					$res = $conn->query($sqlC) or die($conn->error);
				 $idCompra = 	mysqli_insert_id ($conn );
			// -> insert da categoria
			$sqlca = "INSERT INTO categoria_ativo(descricao_categoria,tipo_ativo_idtipo_ativo)
			VALUES('{$descricao_completa}','{$tipoAtivo}') ";	
				$result = $conn->query($sqlca) or die($conn->error);
				$idcategoria =  mysqli_insert_id ($conn );
// -> insert do ativo(movel ou n )
				$sqlatv = "INSERT INTO ativo(descricao_ativo,categoria_ativo_idcategoria_ativo)
				VALUES ('{$ativo_movel}','{$idcategoria}')";
					$result = $conn->query($sqlatv) or die($conn->error);
					$idativo=  mysqli_insert_id ($conn );
				   
// -> insert do item compra				

				$sqli =" INSERT INTO item_compra(descricao_item_compra, valor_item_compra, valor_dolar_item_compra, compra_idcompra, ativo_idativo)
							   VALUES('{$descricao_completa}','{$valor}','{$valor_dolar}','{$idCompra}','{$idativo}')";
							   
						$result = $conn->query($sqli) or die($conn->error);
					 	$idItemCompra = 	mysqli_insert_id ($conn );
		
// -> insert da tipo do patrimonio (EX: eq. inf)				
				//  $sqlta =" INSERT INTO tipo_ativo(descricao_tipo)
				// 	VALUES('{$tipoAtivo}')";
				// 		$result = $conn->query($sqlta) or die($conn->error);
				// 		$idtipo_ativo = 	mysqli_insert_id ($conn );



				$sql = "INSERT INTO patrimonio ( num_ativo_sede,
												 observacao,
												 data_exclusao, 
												 projeto_idProjeto,
												  condicao_idcondicao,
												  localizacao_idlocalizacao, 
												  item_compra_iditem_compra, 
												  funcionario_idfuncionario, 
												  ativo_idativo) 
			 							VALUES('{$num_ativo_sede}',
										 '{$status}', 
										 NULL, 
										 '{$projeto}',
										  '{$condicao}',
										   '{$descricao_localizacao}',
											 '{$idItemCompra}',
											 '{$responsavel}',
										   '{$idativo}')";

				
		}
			$result = $conn->query($sql) or die($conn->error);
			$qnt_result_pg = 10;
					$result_pg = "SELECT COUNT(idpatrimonio) AS num_result FROM patrimonio where condicao_idcondicao = 3'";
          @$resultado_pg = mysqli_query($conn, $result_pg);
          @$row_pg = mysqli_fetch_assoc($resultado_pg);
					@$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

			if($res==true){
				print "<script>alert('Cadastro realizado com sucesso');</script>";
				print "<script>location.href='listar-patrimonio.php?pagina=$quantidade_pg';</script>";
			}else{
				print "<br><div class='alert alert-danger'><p>Não foi possível cadastrar</p></div>";
			}
			print "<button class='btn btn-warning' onclick='history.back(-1)'>Voltar</button>";
			mysqli_close($conn);
		break;

		/// -> EDITAR 
		
		case "editar":
			$sql = " UPDATE item_compra ic 
			INNER JOIN  patrimonio as pa 
			ON pa.item_compra_iditem_compra = ic.iditem_compra
  			SET  ic.descricao_item_compra   = '{$descricao_completa}',
				 pa.condicao_idcondicao    =  '{$condicao}',
				 pa.funcionario_idfuncionario = '{$responsavel}',
				 pa.localizacao_idlocalizacao = '{$descricao_localizacao}',
				 pa.observacao  =  '{$status}'
				
			where idpatrimonio  = ".$_REQUEST['idpatrimonio']." ";

		// backup	                    
// UPDATE item_compra ic 
// INNER JOIN  patrimonio as pa 
// ON pa.item_compra_iditem_compra = ic.iditem_compra
//   SET  ic.descricao_item_compra   = '{$descricao_completa}',
// 	 pa.condicao_idcondicao    =  '{$condicao}',
// 	 pa.funcionario_idfuncionario = '{$responsavel}',
// 	 pa.localizacao_idlocalizacao = '{$descricao_localizacao}',
// 	 pa.observacao  =  '{$status}',
// 	 pa.idtipo_ativo = ''
// where idPatrimonio  = ".$_REQUEST['idpatrimonio']." ";
			//backup
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='listar-patrimonio.php';</script>";
			}else{
				print "<br><div class='alert alert-danger'><p>Não foi possível editar</p></div>";
			}
			print "<button class='btn btn-warning' onclick='history.back(-1)'>Voltar</button>";
		break;
		/// -> EXCLUIR  
		case "excluir":
			$sqlDelete = "UPDATE patrimonio
			SET condicao_idcondicao = 4,
				data_exclusao = CURDATE()
			  WHERE idpatrimonio = ".$_REQUEST['idpatrimonio']."
			  ";
			
			$ressqlDelete = $conn->query($sqlDelete) or die($conn->error);
			
			if($ressqlDelete==true){
				print "<script>alert('Conseguiu excluir');</script>";
				print "<script>location.href='javascript:history.back()';</script>";
			}else{
				print "<br><div class='alert alert-danger'><p>Não foi possível excluir.</p></div>";
			}
		break;
		// EXCLUIR OS LOTES
		case "excluDE":
			$sql = "UPDATE patrimonio
			SET condicao_idcondicao = 4,
				data_exclusao = CURDATE()
			  WHERE idpatrimonio IN (".$_REQUEST['idpatrimonio'].")";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<script>alert('Patrimônios excluidos');</script>";
				print "<script>location.href='javascript:history.back()';</script>";
			}else{
				print "<br><div class='alert alert-danger'><p>Não foi possível excluir.</p></div>";
			}
		break;
	}
?>











