<html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Air Conditionning</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
</head>
<body>
<?php
include 'includes/data.php';
$host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
if (strpos($host, '/index.php') !== false){
?>
<section class="header">
<?php } else {?>
<section class="sub-header">
  <?php } ?>
  
  <nav>
    <a href="index.php"><img src="images/logo.png"></a>
    <div class="nav-links" id="navLinks">
      <i class="fa fa-close" onclick="hideMenu()"></i>
      <ul>
        <?php for ($i = 0; $i < count($titleList); $i++) {
           ?><li><a href="<?= $titleList[$i][0] ?>.php"><?= $titleList[$i][1] ?></a></li>
        <?php } ?>
      </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>
  <?php 
  if (strpos($host, '/about.php') !== false) echo '<h1>Nos domaines</h1>';
  if (strpos($host, '/blog.php') !== false) echo '<h1>Notre entreprise</h1>';
  if (strpos($host, '/contact.php') !== false) echo '<h1>Contact</h1>';
  if (strpos($host, '/course.php') !== false) echo '<h1>Nos compétences</h1>';
  ?>
</section>