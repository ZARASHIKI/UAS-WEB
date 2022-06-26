<?php require "koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS</title>
    <link rel="stylesheet" href="123.css">
    <link rel="stylesheet" href="art.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

  </head>
  <body>
  <div class="header">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <a href=index.php style="position: absolute;left: 93%;bottom: -20px;"><img src="upload/logo1.png" alt="Snow" style="width: 100%;opacity:70% ;"></a>
  
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
  <a href="about.php">About</a>
  <a class="dropdown" href="#">Contact
  <div class="dropdown-content">
    <p>+0361-12387</p>
  </div>
  
  <a href="admin/login.php" style="position: relative;
    top: 63%;border-top-style: solid;
    border-top-width: 1px;font-size: 12pt;width: 150px;">ADMIN</a>
  </a>

</div>
</body>
</html>



