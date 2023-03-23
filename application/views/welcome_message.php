<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
</head>

<body>
	<form action="insertar.php" method="POST">

		<input type="text" name="Nombre" placeholder="Nombre">
		<input type="text" name="Apellidos" placeholder="Apellidos">
		<input type="text" name="Telefono" placeholder="Teléfono">

		<button>Añadir nuevo usuario</button>
	</form>


	<table class="default">

		<tr>

			<td>Nombre</td>

			<td>Apellidos</td>

			<td>Teléfono</td>

		</tr>

		<?php foreach ($personas as $persona) : ?>
			<tr>
				<td><?= $persona->Nombre; ?></td>
				<td><?= $persona->Apellidos; ?></td>
				<td><?= $persona->Telefono; ?></td>
				<td><button>Editar usuario</button></td>
				<td><button onclick="javascript:eliminarUsuario(<?= $persona->id ?>)">Eliminar usuario</button></td>
			</tr>
		<?php endforeach; ?>

	</table>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
	function eliminarUsuario(id) {
		var userselection = confirm("Are you sure you want to close this account permanently?");

		if (userselection == true) {

			$.ajax({
					url: "<?=base_url()?>Welcome/delete",
					type:"POST",
					data:{
						usuarioid:id
					}
				})
				.done(function() {
					alert("Your Account deleted!");
					window.location.reload();

				}).fail(function(xhr){
					alert("Ha ocurrido un error!");

				});

		} else {

			alert("Your account is not deleted!");
		}
	}
</script>

</html>