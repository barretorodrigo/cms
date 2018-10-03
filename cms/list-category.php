<?php
include 'header.php';
include 'delete.php';
$sql    = "SELECT * FROM categorias";
$result = mysqli_query($conn, $sql);
?>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Lista de Categorias</h1>

  </div>
</section>


<section class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

<?php

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {?>
															<tr>
															      <td scope="col"> <?php echo $row["id"];?></td>
															      <td scope="col"><?php echo $row["nome"];?></td>
															      <td scope="col"><?php echo $row["descricao"];?></td>
															      <td scope="col"><?php echo "<a href='?apagar=category&id=".$row['id']."'><button type='button' class='btn btn-danger'>Apagar</button></a>";?></td>
															</tr>

		<?php }
} else {
	echo "0 results";
}
?>
</tbody>
</table>

</section>

<?php
include 'footer.php';
?>