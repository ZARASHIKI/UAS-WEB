<?php include "header.php";?>
<div class="">
<img src="../upload/bcd.jpeg" alt="Snow" style="width: 100%;opacity:70% ;height: 500px;">
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
<?php
if(isset($_POST["ngapain"]) && $_POST["ngapain"] == 'insert')

if($_POST["ngapain"] == 'insert') {
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES["image"]["name"];
    $harga = $_POST['harga'];
    $conn->query("INSERT INTO Post set title='$title', content='$content', image='$image', harga = '$harga'");
 }
if(isset($_POST["submit"]) && $_POST["submit"] == 'update') 

if($_POST["submit"] == 'update'){
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $title = $_POST['title'];
    $gmb = $_FILES["image"]["name"];
    $id = $_POST['id_anime'];
    $content = $_POST['content'];
    $harga = $_POST['harga'];
    $conn->query("UPDATE Post set title='$title',content='$content', image='$gmb', harga = '$harga' WHERE id='$id'");
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

<?php
while($post = $posts->fetch_object()) {
 ?>
 <div class="">
    <div class="column">
    <div class="card">
    <div><img src ="../upload/<?php echo $post->image ?>"width= "100%"></div>
      <a href="../post.php?id=<?php echo $post->id ?>"><h2 class="btn btn-outline-secondary"><?php echo $post->title; ?></h2></a>
      <p class="price"><?php echo $post->harga; ?></p>
      <p><?php echo $post->short; ?></p>
       <div class = "flex"> 
       <a class="btn btn-outline-light" style = "background-color: #876445;" href="update.php?id=<?php echo $post->id ?>">Edit</a>
       <a class="btn btn-outline-light" style = "background-color: #876445;" href="delete.php?id=<?php echo $post->id ?>" onclick ="return confirm('Apakah kamu yakin akan menghapus?')">Delete</a>
   </div>
   </div>
</div>
   <?php
}
?>
