<?
if(!empty($_POST['name'])) {

	$result = mysqli_query($connection, "SELECT * FROM students");
	$name = $_POST['name'];
	$tele = $_POST['tele'];
	if(mysqli_query($connection, "INSERT INTO angajati (name, tele, group_id) VALUES ('$name', '$tele', '$_POST['group']')")) {
		echo 'Succes';
	} else {
		echo 'Eroare '.mysqli_error($connection);
	}
} else {

?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br><br>
	Telefon <input type="text" name="tele">
	<br>
	Id_group <input type="text" name="group">
	<br>
	<br>
	<input type="submit">
</form>

<?}?>