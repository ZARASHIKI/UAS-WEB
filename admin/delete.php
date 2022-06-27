<?php include "../koneksi.php";
$id = $_GET['id'];
$anime  = $conn->query("select * from post where id='$id'");
$row    = mysqli_fetch_array($anime);
$conn->query("DELETE from Post  WHERE id='$id'");
header("location: index.php");
?>



