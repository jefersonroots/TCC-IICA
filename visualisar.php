<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Visualizar</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          
          
        
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
        <a class="nav-link" href="site.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Voltar a Dashboard</span></a>
      </li>

          </ul>

        </nav>			 
			 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Gera QRcode</h1>

          <div class="row">

            <div class="col-lg-6">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Resultado</h6>
										</div>
										<?php
										include("config.php");
										$sql = "SELECT *,pa.observacao,com.dt_compra,c.condicao
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
                  where idpatrimonio = ".$_REQUEST["idpatrimonio"];
										
										$res = $conn->query($sql) or die($conn->error);
										
										if($res == true){
											$row = $res->fetch_assoc();
									?>
									
									<form action="site.php?page=salvar-categoria" method="POST">
										<input type="hidden" name="acao" value="editar">
										<input type="hidden" name="id_categoria" value="<?php print $row["idcategoria_ativo"]; ?>">
										<div class="card" style="width: 18rem;">
											<img src="img/<?php print $row["idpatrimonio"]; ?>.png" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">QrCode</h5>
                      <p class="card-text">Numero do ativo: <?php print $row["idpatrimonio"]; ?> 
                      <br>Descrição: <?php print $row["descricao_item_compra"]; ?> 
                      <br> Responsavel: <?php print $row["nome_funcionario"]; ?></p>
											<a href="#" class="btn btn-primary">butão funcional</a>
										</div>
									</div>
										<div class="form-group">
											<button class="btn btn-success" type="submit">
												Enviar
											</button>
										</div>
									</form>
									<?php
										}
									?>
                </div>
							</div>			
						</div>
					</div>
				</div>
						
							<footer class="sticky-footer bg-white">
								<div class="container my-auto">
									<div class="copyright text-center my-auto">
									<button class="btn btn-primary" type="button">
										<a href="listar-patrimonio.php">
										<i class="fas fa-angle-double-left fa-3x">
										</a>
										</i>
									</div>
									</button>
								</div>
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
