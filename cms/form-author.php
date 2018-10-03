<?php
$sql    = "SELECT * FROM autores";
$result = mysqli_query($conn, $sql);
?>
<div class="form-group">
	<label for="autor">Autor</label>
		<select class="form-control" id="autor" name="autor">
		<option>Selecione o autor</option>
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