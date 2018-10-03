<?php
include 'header.php';
include 'save.php';
?>
<main >
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Cadastrar Autor</h1>

  </div>
</section>
<section>
	<div class="container">
		<form method="post" action="create-author.php?status=author">
   		 <div class="form-group">
	      <label for="nome">Nome</label>
	      <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" required>
	    </div>
	    <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email" required />
	    </div>
	    <div class="form-group">
	      <label for="descricao">Descrição</label>
	      <textarea class="form-control" id="descricao" rows="3" placeholder="Digite a descrição do autor" name="descricao"></textarea>
	    </div>
	    <button type="submit" class="btn btn-primary">Cadastrar</button>
	  </form>

	</div>
</section>
</main>
<?php include 'footer.php';?>