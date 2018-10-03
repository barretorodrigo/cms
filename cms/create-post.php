<?php
include 'header.php';
include 'save.php';
?>
<main >
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Cadastrar Postagem</h1>

  </div>
</section>
<section>
	<div class="container">
		<form method="post" action="create-post.php?status=post">
   		 <div class="form-group">
	      <label for="titulo">Título</label>
	      <input type="text" class="form-control" id="titulo" placeholder="Digite o título do classificado" name="titulo" required>
	    </div>
	    <div class="form-group">
	      <label for="conteudo">Conteúdo</label>
	      <textarea class="form-control" id="conteudo" rows="3" placeholder="Digite o conteudo da postagem" name="conteudo"></textarea>
	    </div>

<?php include 'form-author.php';?>
<?php include 'form-category.php';?>
<button type="submit" class="btn btn-primary">Cadastrar</button>
	  </form>

	</div>
</section>
</main>
<?php include 'footer.php';?>