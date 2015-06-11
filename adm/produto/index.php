<?php
	error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- metas -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Alexandre Guimarães Colonato Giuliani">
	<meta name="author" content="Alexandre Guimarães Colonato Giuliani">
	<meta charset="utf-8">

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="../../images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="../../images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
	<link rel="manifest" href="../../images/favicon/manifest.json">
	<link rel="icon" href="../../images/favicon/favicon.ico">

	<title>Microsuture - Produto</title>

    <!-- css -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/bootstrap-table.css">

    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<div class="container-fluid">

		<div class="table-responsive">
			<table id="content_0" class="table table-striped table-hover table-condensed table-bordered" 
				data-toggle="table" data-show-toggle="true"
				data-cache="false" data-height="479"
				data-show-columns="true" data-minimum-count-columns="2" 
				data-striped="true" data-search="true" data-show-refresh="true"
				data-sort-name="dia" data-sort-order="desc"
				data-pagination="true" data-page-list="[20, 50, 75]">
				<thead>
					<tr>
						<th class="col-xs-1" data-field="codigo" data-align="center" data-sortable="true">
							<i class="glyphicon glyphicon-barcode"></i> Código
						</th>
						<th class="col-xs-1" data-field="modelo_fio" data-formatter="modeloFormatter" data-align="center" data-sortable="true" data-switchable="false">
							Modelo
						</th>
						<th class="col-xs-2" data-field="estrutura_fio" data-align="center" data-sortable="true">
							Estrutura
						</th>
						<th class="col-xs-2" data-field="cor_fio" data-align="center" data-sortable="true">
							Tonalidade
						</th>
						<th class="col-xs-2" data-field="caracteristica_fio" data-align="center" data-sortable="true">
							Característica
						</th>
						<th class="col-xs-1" data-field="especialidade_fio" data-align="center" data-sortable="true" data-switchable="false">
							Especialidade
						</th>
						<th class="col-xs-1" data-field="material_fio" data-align="center" data-sortable="true">
							Material
						</th>
						<th class="col-xs-1" data-field="diametro_fio" data-align="center" data-sortable="true">
							Diâmetro
						</th>
						<th class="col-xs-1" data-field="comprimento_fio" data-align="center" data-sortable="true">
							Comprimento do Fio
						</th>
						<th class="col-xs-1" data-field="curvatura_agulha" data-align="center" data-sortable="true">
							Curvatura Agulha
						</th>
						<th class="col-xs-1" data-field="comprimento_agulha" data-align="center" data-sortable="true">
							Comprimento da Agulha
						</th>
						<th class="col-xs-1" data-field="ponta_agulha" data-align="center" data-sortable="true">
							Ponta da Agulha
						</th>
						<!--
						<th class="col-xs-1" data-field="action" data-align="center" data-formatter="actionFormatter" data-events="actionEvents">
							<i class="glyphicon glyphicon-cog"></i> Ação
						</th>
						-->
					</tr>
				</thead>
			</table>
		</div>

	</div>

	<!-- js -->
	<script src="../../js/jquery-1.11.2.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/bootstrap-table.js"></script>
	<script src="../../js/bootstrap-table-pt-BR.js"></script>
	<script src="./index.js"></script>

</body>
</html>