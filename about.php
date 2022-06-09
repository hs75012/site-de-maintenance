<html>
<html lang="fr">   
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy air conditionning</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header">
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
        </nav>   
            <h1>Ingénierie du traitement d'air</h1>
    </section>
       
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>Expert des process du traitement d'air</h1>     
            <p> Conscient des enjeux liés au traitelent de l'air. Nos experts terrains vous aident à mettre en place dans les meilleurs délais dans vos mises en conformité de vos process. 
            Le comptage particulaire constitue un élément essentiel de la perennité de vos installations et de votre écosystème d'affaires.</p>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1" class="hero-btn red-btn">Vidéo de présentation</a>
        </div>
        <div class="about-col">
            <img src="images/about.jpg">
        </div>
    </div>    
</section>
    
<?php include 'includes/footer.php'; ?>

<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    