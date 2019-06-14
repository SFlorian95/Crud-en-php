<?php
$mysqli = new Mysqli("localhost", "Florian", "adminadmin", "immobilier");
    ?>

<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<meta name="description" content="">


<title>Agence Back-Office</title>

<!--Bootstrap CSS-->
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!--jQuery / Popper.js CDN-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<!--Bootstrap Javascript-->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<!-- Custom styles for this template -->
<link href="sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
    <header>
  <!-- Fixed navbar -->
  
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">    
    <a class="navbar-brand" href="accueil.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="agence.php">Agence<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Personne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Demande</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<br><br>