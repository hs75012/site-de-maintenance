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
    
<?php include 'includes/header.php'; ?>
<?php include 'includes/data.php'; ?>
<?php
$title = $titleList[5];
?>
 
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