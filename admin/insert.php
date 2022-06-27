<?php
include "header.php";
?>
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

