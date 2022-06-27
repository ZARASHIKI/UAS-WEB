<?php
include "header.php"
?>
<<<<<<< HEAD
<div class ="row">
   <div class= "card"> 
       <h2>Tambah Baru</a>
       <form action="index.php" method="post" enctype="multipart/form-data">
           <input type="hidden" name="sepatu" value="insert">
           <input type="text" name="title"><br>
           <input type="text" name="price"><br>
           <input type="file" name="image"><br>
           <textarea name="content" rows="10"></textarea><br>
           <button type="submit">Submit</button>
       </form>
   </div>
=======
       
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
   
>>>>>>> upstream/main

