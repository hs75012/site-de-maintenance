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