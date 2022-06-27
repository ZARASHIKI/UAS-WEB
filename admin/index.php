<?php
include "header.php";
<div class="">
<img src="upload/bcd.jpeg" alt="Snow" style="width: 100%;opacity:70% ;height: 500px;">
  <div class="centered" >
  <div class="jumbotron">
  <div class="tcolor">
  <h1 class="display-4">SEPATOS.ID</h1>
  <p class="lead"style="font-size: 16pt;">Gayakan Style Mu Dengan SEPATOS </p>
  <hr class="my-4">
  <p style="font-size: 14pt;">Pakailah Sepatu Untuk Melindungi Kaki Saat Berkendara</p>
  <p></p>
  </div>
</div>
</div>    
</div>
</div>
 
if(isset($_POST["ngapain"]) && $_POST["ngapain"] == 'insert') {   $target_dir = "../upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
   $title = $_POST['title'];
   $content = $_POST['content'];
   $image = $_FILES["image"]["name"];
   $price = $_POST['price'];
   $conn->query("INSERT INTO Post set title='$title', content='$content', image='$image', price='$price'");
}
if(isset($_POST["belajar"]) && $_POST["belajar"] == 'update') {   $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
  $title = $_POST['title'];
  $content = $_POST['content'];
  $image = $_FILES["image"]["name"];
  $id = $_POST['apalah'];
  $conn->query("UPDATE Post set title='$title', content='$content', image='$image' WHERE id='$id'");
}
 
 
$posts = $conn->query("SELECT * FROM Post");
?>
<a href="insert.php">Buat artikel</a>
<?php
while($post = $posts->fetch_object()) {
 ?>
   <div class="card">
       <a href="../post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
       <h5><?php echo $post->createdAt; ?></h5>
       <div><img src="../uploads/<?php echo $post->image?>"width="100%"></div>
       <a href="update.php?id=<?php echo $post->id ?>">Edit</a>
       <a href="delete.php?id=<?php echo $post->id ?>">delete</a>
   </div>
   <?php
}
?>
<?php include "../footer.php" ?>
