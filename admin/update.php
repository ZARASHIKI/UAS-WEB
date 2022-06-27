<?php include "header.php";
$id = $_GET['id'];
$anime  = $conn->query("select * from post where id='$id'");
$row        = mysqli_fetch_array($anime);
?>
<div class="card">
<a>Edit Produk</br>
<form action="index.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="submit" value="update">
    <input type="hidden" value="<?php echo $row['id'];?>" name="id_anime">
    <input type="hidden" name="submit" value="update">
        <table>
            <tr>
				<td>Nama </td>
				<td><input type="text" name="title"></td>					
			</tr>	
			<tr>
				<td>Gambar</td>
				<td style = "position: relative; left: 50px;"><input type="file" name="image"></td>					
			</tr>
			<tr>
				<td>Content</td>
				<td><textarea name="content" rows = "10"></textarea></td>					
			</tr>
            <tr>
				<td>Harga</td>
				<td><input type="int" name="harga"></td>		
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>			
			</tr>
</table>
</form>
</div>