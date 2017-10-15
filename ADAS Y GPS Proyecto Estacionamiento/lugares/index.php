<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/global.css">
		<link type="text/css" rel="stylesheet" href="../css/font-awesome.min.css">
	<title>Proyecto Estacionamiento</title>
</head>
<body>
	<header>
		<nav class="">				
			<ul class="navbar-right">
				<li><a href="#">Login</a></li>
				<li><a href="#">Signin</a></li> 
			</ul>						
		</nav>
	</header>
	<main>
		<section id="sctnAltaLugares">
			<form id="frmAltaLugares" method="POST">
				<label for="txtCodigoLugar">Codigo: </label>								
				<input type="text" id="txtCodigoLugar">
				<label for="txtDescripcionLugar">Descripcion: </label>
				<input type="text" id="txtDescripcionLugar">
				<label for="txtTipoLugar">Tipo: </label>				
				<input type="text" id="txtTipoLugar">
				<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<button id="btnAgregarLugar" onclick="agregarLugar()">Agregar</button>				
			</form>
		</section>
		<section id="sctnLugaresCreados">
			<table id="tblLugares">
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Descripcion</th>
						<th>Tipo</th>
						<th>Disponible</th>
					</tr>
					<tbody>
						<!--tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr-->
					</tbody>
				</thead>
			</table>
		</section>
	</main>
	<footer></footer>
</body>
</html>