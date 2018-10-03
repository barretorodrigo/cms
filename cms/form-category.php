<?php
$sql    = "SELECT * FROM categorias";
$result = mysqli_query($conn, $sql);
?>
<div class="form-group">
	<label for="categoria">Autor</label>
		<select class="form-control" id="categoria" name="categoria">
		<option>Selecione a categoria</option>
<?php
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {?>
									<option value="<?php echo $row["id"];?>"> <?php echo $row["nome"];
		?></option>
		<?php }
} else {
	echo "0 results";
}

?>

	</select>
</div>