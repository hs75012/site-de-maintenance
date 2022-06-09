<?php
    $menu = array(
        'Notre technicité' => 'index.html',
        'About' => 'about.php',
        'Course' => 'course.php',
        'Blog'  => 'blog.php',
        'Contact' => 'contact.php',
    );
?>
<nav>
    <a href="index.html"><img src="images/logo.png"></a>
     <div class="nav-links" id="navLinks">  
            <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">Notre technicité</a></li>
                    <li><a href="about.php">Nos valeurs</a></li>
                    <li><a href="course.php">Nos domaines</a></li>
                    <li><a href="blog.php">Notre entreprise</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
    </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
        <?php foreach($menu as $titreMenu => $lienMenu): ?>
            <li>
              <a href="<?= $lienMenu ?>" class="nav-links"><?= $titreMenu ?></a>
            </li>
        <?php endforeach; ?>
</nav>   