<?php include "header.php";?>
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
<?php $posts = $conn->query("SELECT * FROM Post");
while($post = $posts->fetch_object()) {
  ?>
<div class="">
  <div class="column">
  <div class="card">
  <div><img src ="upload/<?php echo $post->image ?>"width= "100%"></div>
  <a href="post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
  <p class="price"><?php echo $post->harga; ?></p>
  <p><?php echo $post->short; ?></p>
  <p><button>Buy Now</button></p>
  </div>
</div>
</div>
<?php
}
?>


<?php include "footer.php";?>

   