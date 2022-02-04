<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <title>Lista de patrimônios</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
  label{
    color: blue;
  }
</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button> 
                  <!-- busca está aqui!!! --><br><br><br>
									<div id="wrapper">
										<div id="content-wrapper" class="d-flex flex-column">
											<div id="content">
												<nav class="navbar navbar-expand-lg navbar-light bg-white ">
													<div class="col">    
														<img src="img/iaa.png">                          
													</div>                        
													<ul class="navbar-nav ml-auto">
														<li class="nav-item active">
															<a class="nav-link" href="site.php">
																<i class="fas fa-fw fa-tachometer-alt"></i>
																<span>Voltar a Tela inicial</span></a>
														</li>
													</ul>
												</nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          

          <!-- DataTales Example -->

          <?php
								include("config.php");
								$select_niveis_acesso = $_REQUEST['select_niveis_acesso'];
                $pesquisar = $_REQUEST['pesquisar'];
                
                

								$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		// aqui que ta a putaria
								$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
								$qnt_result_pg = 10;
								$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
								//$max_result_pag = 1; kkkkkkkk mano era só alinhar o while seu corno manso kkkkkkk
                $result_pesquisa = "SELECT idpatrimonio,num_ativo_sede,idtipo_ativo,descricao_tipo,descricao_ativo,descricao_item_compra,condicao,dt_compra,data_exclusao,
				valor_item_compra,taxa_dolar,valor_dolar_item_compra, descricao_fundo, nome_projeto, nome_funcionario, descricao_localizacao,
				pa.observacao 
						   from tipo_ativo as ta
						 INNER JOIN categoria_ativo as cat ON ta.idtipo_ativo  =  cat.tipo_ativo_idtipo_ativo 
								INNER JOIN ativo as ati ON ati.categoria_ativo_idcategoria_ativo  =  cat.idcategoria_ativo
								  INNER JOIN patrimonio as pa ON pa.ativo_idativo  =  ati.idativo  
								  INNER JOIN funcionario as f ON pa.funcionario_idfuncionario  =  f.idfuncionario 
									 INNER JOIN cargo as carg ON f.cargo_idcargo  =  carg.idcargo 
						   LEFT JOIN projeto as pr ON    pa.Projeto_idProjeto =   pr.idProjeto  
							 LEFT JOIN localizacao as l ON   pa.localizacao_idlocalizacao  =  l.idlocalizacao 
							 LEFT JOIN condicao  as c ON   pa.condicao_idcondicao  =  c.idcondicao 
										  -- até aqui seleciona certo
										  LEFT JOIN item_compra as ic ON pa.item_compra_iditem_compra = ic.iditem_compra
						 LEFT JOIN compra as com ON ic.compra_idcompra = com.idcompra
						 LEFT JOIN fundo as fun ON com.fundo_idfundo = fun.idfundo
						 WHERE  idpatrimonio in ( ".$pesquisar." )";
                								
								$resultado_pesquisa = mysqli_query($conn, $result_pesquisa);
	
								$res = $inicio +10;
								$num_total = $conn->query("SELECT condicao_idcondicao FROM patrimonio where idpatrimonio in ( ".$pesquisar.") ")->num_rows;

                
								print "<p>Exibindo a <b>$pagina</b>ª pagina de resultado(s) de <b>$num_total</b> registros.</p> ";
								print "<div class='card shadow mb-4'>";
								print "<div class='card-header py-3'>";
								print "<h6 class='m-0 font-weight-bold text-primary'></h6>";
								print "</div>";
								
								print "<div class='card-body'>";
								print "<div class='table-responsive'>";
								print "<table  class='table table-bordered table-striped table-hover'  >";
								print "<thead>";
								print "<tr>";
								
									
									print "<th >Nº do ativo</th>";
									print "<th >Nº do ativo SEDE</th>";
									print "<th >Tipo de Ativo</th>";
									print "<th >Ativo Móvel</th>";
									print "<th class='mx-auto' style='width: 1000px;'>Descrição Completa</th>";
									print "<th class='mx-auto' style='width: 800px;'>Situação Ativo</th>";
									print "<th class='mx-auto' style='width: 1000px;'>Dt da Compra</th>";
									print "<th class='mx-auto' style='width: 1000px;'>Dt de Exclusão</th>";
									print "<th style='width: 200px;'>Valor R$</th>";
									print "<th style='width: 200px;'>Taxa U$</th>";
									print "<th class='mx-auto' style='width: 200px;'>Valor U$</th>";
									print "<th class='mx-auto' style='width: 200px;'>Fundo</th>";
									print "<th class='mx-auto' style='width: 200px;'>Projeto</th>";
									print "<th class='mx-auto' style='width: 200px;'>Responsável</th>";
									print "<th class='mx-auto' style='width: 200px;'>Localização</th>";
									print "<th class='mx-auto' style='width: 200px;'>Observação</th>";
									print "<th class='mx-auto' style='width: 10px;'>Ações</th>";
									print "</tr>";
									print "</thead>";
							
								while($row_editar = mysqli_fetch_assoc($resultado_pesquisa)){                                                                  
												print "<tbody>";
												print "<tr>";
												
												$data_bd = $row_editar["dt_compra"];
												$data_bd1 = $row_editar["data_exclusao"];
	
												$data_timestamp = strtotime($data_bd);
												$data_timestamp1 = strtotime($data_bd1);
												/*echo "$data_timestamp1<br>";*/
	
	
												$data_brasileira = date("d/m/Y", $data_timestamp);
												if($data_timestamp1 == null){
													$data_brasileira1 = null;
													/*echo "$data_brasileira1<br>";*/
												}elseif($data_timestamp1 == -62169987208){
													$data_brasileira1 = null;
													/*echo "$data_brasileira1<br>";*/
												}
												else{
													$data_brasileira1 = date("d/m/Y", $data_timestamp1);
													/*echo "$data_brasileira1<br>";*/
												}
												/**/
												
												print "<td>".$row_editar["idpatrimonio"]."</td>";
												print "<td>".$row_editar["num_ativo_sede"]."</td>";
											   print "<td>".$row_editar["descricao_tipo"]."</td>";
												print "<td>".$row_editar["descricao_ativo"]."</td>";
											   print "<td >".$row_editar["descricao_item_compra"]."</td>";
												print "<td>".$row_editar["condicao"]."</td>";
												print "<td>".$data_brasileira."</td>";
												print "<td>".$data_brasileira1."</td>";
												//print "<td>".$dt_compra ."</td>";
												//print "<td>" .$data_exclusao."</td>";
												print "<td>".$row_editar["valor_item_compra"]."</td>";
												print "<td>".$row_editar["taxa_dolar"]."</td>";
												print "<td>".$row_editar["valor_dolar_item_compra"]."</td>";
												print "<td>".$row_editar["descricao_fundo"]."</td>";
												print "<td>".$row_editar["nome_projeto"]."</td>";	
												print "<td>".$row_editar["nome_funcionario"]."</td>";
												print "<td>".$row_editar["descricao_localizacao"]."</td>";
												print "<td>".$row_editar["observacao"]."</td>";
												print "<td>
												
												<button class='btn btn-success' onclick=\"location.href='editar-categoria.php?&idpatrimonio=".$row_editar["idpatrimonio"]."'\" ><i class='fas fa-user-edit'></i></button>  
												
												<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='salvar-patrimonio.php?page=salvar-patrimonio&acao=excluir&idpatrimonio=".$row_editar["idpatrimonio"]."';}else{false;}\"><i class='fas fa-trash-alt'></i></button>
												
												<button class='btn btn-warning' onclick=\"location.href='visualisar.php?&idpatrimonio=".$row_editar["idpatrimonio"]."'\" ><i class='fas fa-eye'></i></button> 
												</td>";
												
										}
										print "</tr>";
										print " </tbody>";
										print "</table>";
										  print "</div>";
							
										  $result_pg = "SELECT COUNT(idativo) AS num_result FROM ativo where descricao_ativo like '%EM USO%'";// aqui começa a magica da divisão de quantas paginas terá em nossa pesquisa
								$resultado_pg = mysqli_query($conn, $result_pg);
								$row_pg = mysqli_fetch_assoc($resultado_pg);
	
								$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);//aqui está a parte que é feita a quebra 
	
	
								$max_links = 2;
									echo "<a href='pesquisa-coluna.php?&select_niveis_acesso=".$_REQUEST["select_niveis_acesso"]."&pesquisar=".$_REQUEST["pesquisar"]."&pagina=1'>Primeira</a> ";
									
									for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
										if($pag_ant >= 1){
											echo "<a href='pesquisa-coluna.php?&select_niveis_acesso=".$_REQUEST["select_niveis_acesso"]."&pesquisar=".$_REQUEST["pesquisar"]."&pagina=$pag_ant'>$pag_ant</a> ";
										}
									}
										
									echo "$pagina ";
									
									for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
										if($pag_dep <= $quantidade_pg){
											echo "<a href='pesquisa-coluna.php?&select_niveis_acesso=".$_REQUEST["select_niveis_acesso"]."&pesquisar=".$_REQUEST["pesquisar"]."&pagina=$pag_dep'>$pag_dep</a> ";
										}
									}
									
									echo "<a href='pesquisa-coluna.php?&select_niveis_acesso=".$_REQUEST["select_niveis_acesso"]."&pesquisar=".$_REQUEST["pesquisar"]."&pagina=$quantidade_pg'>Ultima</a>";
	
							?>
						</div>
					</div>
      <!-- End of Main Content -->
			<?php 
								$select_niveis_acesso = $_REQUEST['select_niveis_acesso'];
                $pesquisar = $_REQUEST['pesquisar'];
								
										echo "<footer class='sticky-footer bg-white'>";
											echo"<div class='container my-auto'>";
													echo"<div class='copyright text-center my-auto'>";
													
                            echo"	<button class='btn btn-danger' onclick=\"location.href='fpdf/relatorios/pesquisa-edit.php?&select_niveis_acesso=".$_REQUEST["select_niveis_acesso"]."&pesquisar=".$_REQUEST["pesquisar"]."'  \">";  
                          
																echo"<i class='far fa-file-pdf fa-3x'></i>";
															echo"</button>";
													echo"</div>";	
											echo"</div>";
											?>
											<br>
									</footer>
							<!-- End of Footer -->

		</div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

					<!-- Scroll to Top Button-->
					<a class="scroll-to-top rounded" href="#page-top">
						<i class="fas fa-angle-up"></i>
					</a>

					<!-- Logout Modal-->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									<a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>