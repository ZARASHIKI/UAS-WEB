<?php
include "header.php"
?>
       
  <div class="card">
  
    <a>Produk Baru</a>
    <table>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <tr>
        <input type="hidden" name="ngapain" value="insert"></tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="title"></td>					
			</tr>	
			<tr>
				<td>Gambar </td>
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
            </form>		
		</table> 
       </div>
   

