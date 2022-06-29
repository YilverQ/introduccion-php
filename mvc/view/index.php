<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="view/estilos.css">
	<title>MVC</title>
</head>
<body>
	<h1>MVC: Películas.</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<th>País</th>
			<th>Género</th>
			<th>Producción</th>
		</tr>
		<?php foreach ($rowset as $row): ?>
			<tr>
				<td><?php print_r($row->getName()) ?></td>
				<td><?php print_r($row->getCountry()) ?></td>
				<td><?php print_r($row->getTag()) ?></td>
				<td><?php print_r($row->getProduction()) ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>