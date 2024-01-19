<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cv web site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- call file fo you needs in you work -->
        <!-- index.php -->
        <a class="nav-link <?php //  call serv
         echo url('/Cv_website/index.php')?'active':'';?> " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php  echo url('/Cv_website/Cv.php')? ' active ':'';?>" href="Cv.php">Cv Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About US</a>
      </li>
      
    </ul>
  </div>
</nav>


