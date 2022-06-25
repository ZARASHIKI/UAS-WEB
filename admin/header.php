<?php require "../koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS</title>
    <link rel="stylesheet" href="../123.css">
    <link rel="stylesheet" href="../art.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

  </head>
  <body>
  <div class="header">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <a class="btn btn-outline-light" href="login.php" role="button" style="position: absolute;
    left: 85%;top: 7px;">LOGIN</a>
  <a class="btn btn-outline-light" href="login.php" role="button" style="position: absolute;
    left: 91%;top: 7px;">REGISTER</a>
  <a class="btn btn-outline-light" href="insert.php" role="button" style="position: absolute;
    left: 47%;top: 7px;">Buat Produk Baru</a>
  </div>
  
  <script>
  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
} 
  </script>

<div id="mySidenav" class="sidenav">
<a href="index.php">HOME</a>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
</body>
</html>



