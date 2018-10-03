<?php
include 'header.php';
include 'delete.php';
$sql    = "SELECT * FROM postagens";
$result = mysqli_query($conn, $sql);

?>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Lista de Postagens</h1>
</section>

<section class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Data</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

<?php

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {?>
													<tr>
													      <td scope="col"> <?php echo $row["id"];?></td>
													      <td scope="col"><?php echo $row["titulo"];?></td>
													      <td scope="col"><?php echo $row["autor"];?></td>
										            <td scope="col"><?php echo $row["categoria"];?></td>
													      <td scope="col"><?php echo $row["data"];?></td>
													      <td scope="col"><?php echo "<a href='?apagar=post&id=".$row['id']."'><button type='button' class='btn btn-danger'>Apagar</button></a>";?></td>
													</tr>

		<?php }
} else {
	echo "0 results";
}
?>
</tbody>
</table>

</section>

  </div>



<?php
include 'footer.php';
?>