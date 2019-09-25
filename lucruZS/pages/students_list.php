<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM angajati WHERE id = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}

$result = mysqli_query($connection, "SELECT * FROM angajati");
?>
<table border="1">
<? while($angajat = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $angajat['name']?></td>
	<td><?= $angajat['tele']?></td>
    <td></td>
	<td>
    <a href="?page=students_list&action=delete&id=<?= $angajat['id']?>" onclick="return confirm('Doriti sa stergeti inregistrarea?')">x</a>
    <a href="?page=students_edit&id=<?= $angajat['id']?>">m</a>
  </td>
</tr>
<? }?>
