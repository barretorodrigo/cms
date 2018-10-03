<?php
if (isset($_GET['status'])) {

	if ($_GET['status'] == 'author') {
		$nome      = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$email     = $_POST['email'];
		$data      = date('Y-m-d');

		$query = "INSERT INTO autores (nome, descricao, email)
	        VALUES ('$nome', '$descricao', '$email')";

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Autor cadastrado com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} elseif ($_GET['status'] == 'category') {
		$nome      = $_POST['nome'];
		$descricao = $_POST['descricao'];

		$query = "INSERT INTO categorias (nome, descricao)
	        VALUES ('$nome', '$descricao')";

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Categoria cadastrada com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} elseif ($_GET['status'] == 'post') {
		$titulo    = $_POST['titulo'];
		$conteudo  = $_POST['conteudo'];
		$autor     = $_POST['autor'];
		$categoria = $_POST['categoria'];
		$data      = date('Y-m-d');

		$query = "INSERT INTO postagens (titulo, conteudo, data, autor, categoria)
	        VALUES ('$titulo', '$conteudo', '$data', '$autor', '$categoria')";

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Postagem cadastrada com sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	}
}

?>