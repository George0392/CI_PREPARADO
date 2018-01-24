<!--
###########################################################
#
#                    ERROR 404
#
###########################################################
 -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="UTF-8">
		<title>.: 404 Error:.</title>
	</head>
	<body>
		<div class="container">
			<!-- Content Header (Page header) -->
			<section>
				<h1 class="text-danger">
				404 Error
				</h1>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="error-page">
					<h2 class="headline text-yellow"> 404</h2>
					<div class="error-content">
						<h3><i class="fa fa-warning text-yellow"></i> Ooopsss....! no se a encontrado la pagina solicitada.</h3>
						<p>
							No se a encontrado la pagina. Sin embargo puede ir a nuestra pagina Principal
							<a href="../../index.html">Inicio</a>. O buscar una entrada relacionada desde nuestro Buscador .
						</p>
						<form class="search-form">
							<div class="input-group">
								<input type="text" name="search" class="form-control" placeholder="Buscar">
								<div class="input-group-btn">
									<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
									</button>
								</div>
							</div>
							<!-- /.input-group -->
						</form>
					</div>
					<!-- /.error-content -->
				</div>
				<!-- /.error-page -->
			</section>
			<!-- /.content -->
		</div>
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>
<!--
###########################################################
#
#                   fin ERROR 404
#
###########################################################
 -->