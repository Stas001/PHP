<?
$result = mysqli_query($connection, "SELECT * FROM angajati WHERE id = {$_GET['id']}");
$angajat = mysqli_fetch_assoc($result);

if(!empty($_POST['name'])) {


	$result = mysqli_query($connection, "SELECT * FROM angajati");

	if(mysqli_query($connection, "UPDATE angajati SET name = '{$_POST['name']}', tele = {$_POST['tele']} WHERE id = {$_GET['id']}")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name" value="<?= $angajat['name']?>">
	<br>
	Telefon <input type="text" name="tele" value="<?= $angajat['tele']?>">
	<br>
	<br>
	<input type="submit">
</form>

<?}?>
