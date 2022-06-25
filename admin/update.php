<?php include "header.php";
$id = $_GET['id'];
$anime  = $conn->query("select * from post where id='$id'");
$row        = mysqli_fetch_array($anime);
?>
<div class="card">
<h2>Edit</br>
<form action="index.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="submit" value="update">
    <input type="hidden" value="<?php echo $row['id'];?>" name="id_anime">
    <input type="hidden" name="submit" value="update">
    <h4>Nama</br>
    <input type="text" name="title"><br>
    <input type="file" name="image"><br>
    <textarea name="content" rows="10"></textarea><br>
    <button type="submit">Kirim</button>
</form>
</div>

