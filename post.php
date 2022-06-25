<?php
include "header.php";
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM Post WHERE id=$id");
$post = $result->fetch_object();
?>
<div class="de">
<div><img src ="upload/<?php echo $post->image ?>"width= "100%"></div>
</div>
<div class="card2">
<div style="font-size: 32pt;"><?php echo $post->title;?></div>
<p class="price"><?php echo $post->harga; ?></p>
<p class=""><?php echo $post->content ?></p>
</div>
<?php include "footer.php" ?>
