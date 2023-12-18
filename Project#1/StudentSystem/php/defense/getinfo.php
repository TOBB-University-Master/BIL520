<?php include_once("unsafe.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="style_home.css" type="text/css" rel="stylesheet">

  <!-- Browser Tab title -->
  <title>TOBB ETU BIL520</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #fd7e14;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <img src="../tobb_etu.png.png" style="height: 40px; width: 200px;" alt="TOBB ETU BIL520"></a>
    </div>
  </nav>
  <div class='container'>
  <h2>Information returned from the database</h2>
  <ul>
    <li>ID:     <b><?=$id?></b></li> 
    <li>Name:   <b><?=$name?></b></li> 
    <li>EID:    <b><?=$eid?></b></li> 
    <li>Salary: <b><?=$salary?></b></li> 
    <lI>Social Security Number: <b><?=$ssn?></b></li>
  </ul>
  </div>
</body>
</html>
