<?php
if (isset($_GET['apagar'])) {

	if ($_GET['apagar'] == "post") {
		$id     = $_GET['id'];
		$query  = "DELETE FROM postagens WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Postagem apagada com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} else if ($_GET['apagar'] == "author") {
		$id     = $_GET['id'];
		$query  = "DELETE FROM autores WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Autor apagado com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} else if ($_GET['apagar'] == "category") {
		$id     = $_GET['id'];
		$query  = "DELETE FROM categorias WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Categoria apagada com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	}

}

?>