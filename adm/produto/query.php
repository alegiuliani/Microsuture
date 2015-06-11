<?php

	error_reporting(0);

	require_once ('../framework/db.php');

	$ref = $_GET['ref'];
	$calendar = $_GET['c'];
    $json_response = array();

	$querys = array(
		'SELECT codigo, modelo_fio, estrutura_fio, cor_fio, caracteristica_fio, especialidade_fio, material_fio, diametro_fio, comprimento_fio, comprimento_agulha, curvatura_agulha, ponta_agulha FROM produtos',
		''
	);

	$query = $querys[$ref];

	if(empty($calendar)) {
		$query = str_replace('@calendar', '', $query);
	} else {
		$query = str_replace('@calendar', ' WHERE Quando = ' . $calendar, $query);
	}

	$database = Database::getInstance('microsuture');
	$stmt = $database -> select($query);

	while ($row = $stmt->fetch(PDO::FETCH_NAMED, PDO::FETCH_ORI_NEXT)) {

		if(array_key_exists('codigo', $row)) {
			$row_array['codigo'] = $row['codigo'];
		}
		if(array_key_exists('modelo_fio', $row)) {
			$row_array['modelo_fio'] = $row['modelo_fio'];
		}
		if(array_key_exists('estrutura_fio', $row)) {
			$row_array['estrutura_fio'] = $row['estrutura_fio'];
		}
		if(array_key_exists('cor_fio', $row)) {
			$row_array['cor_fio'] = $row['cor_fio'];
		}
		if(array_key_exists('caracteristica_fio', $row)) {
			$row_array['caracteristica_fio'] = $row['caracteristica_fio'];
		}
		if(array_key_exists('especialidade_fio', $row)) {
			$row_array['especialidade_fio'] = $row['especialidade_fio'];
		}
		if(array_key_exists('material_fio', $row)) {
			$row_array['material_fio'] = $row['material_fio'];
		}
		if(array_key_exists('diametro_fio', $row)) {
			$row_array['diametro_fio'] = $row['diametro_fio'];
		}
		if(array_key_exists('comprimento_fio', $row)) {
			$row_array['comprimento_fio'] = $row['comprimento_fio'];
		}
		if(array_key_exists('comprimento_agulha', $row)) {
			$row_array['comprimento_agulha'] = $row['comprimento_agulha'];
		}
		if(array_key_exists('curvatura_agulha', $row)) {
			$row_array['curvatura_agulha'] = $row['curvatura_agulha'];
		}
		if(array_key_exists('comprimento_fio', $row)) {
			$row_array['comprimento_fio'] = $row['comprimento_fio'];
		}

		array_push($json_response, $row_array);
	}

	echo json_encode($json_response);

?>