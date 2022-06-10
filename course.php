<html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Air Conditionning</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

<?php include 'includes/header.php'; ?>
    
    <section class="course">
        <h1>Expertise</h1>
        <p>Confiez vos problématiques à nos experts.</p>
        <div class="row">
            <div class="course-col">
                <h3>Traitement d'air</h3>
                <p>Notre équipe se compose de 20 techniciens sur le périmètre. Ils seront capables de répondre à vos problématiques. L'amélioration en continue de vos process est notre priorité.</p>
            </div>
            <div class="course-col">
                <h3>Chaufferie</h3>
                <p>Nos opérationnels assurent le suivi complet de vos chaufferies en suivant la réglementation. Le suivi est en coordination permanente avec notre siège afin d'assurer une traçabilité lors de nos réunions hebdomadaires. </p>
            </div>
            <div class="course-col">
                <h3>Ingénierie des contrats</h3>
                <p>Easy air conditionning s'assure dans le cadre d'un mandat bi-partie de la bonne exécution de votre contrat. Ainsi la prestation d'une tierce personne est bien contrôlée.</p>
            </div>
                
        </div>
    </section>
    
    <section class="facility">
        <h1>Nos réalisations</h1>
        <p>Nous mettons l'accent sur l'excellence au quotiden.</p>
            <div class="row">
                <div class="facility-col">
                    <img src="images/chaufferie.png">
                    <h3>Chaufferie Poissy</h3>
                    <p>Nos équipes ont réalisées un amélioratif au niveau du comptage de l'énergie. Réduisant ainsi l'empreinte carbonne de notre client.</p>
                </div>
                <div class="facility-col">
                    <img src="images/centrale.png">
                    <h3>Centrale de traitement SAP</h3>
                    <p>Dans le cadre de son renouvellement d'équipement le groupe SAP, nous a mandaté afin de réaliser la mise au point de leurs centrales de traitement d'air.</p>
                </div>
                <div class="facility-col">
                    <img src="images/comptage.png">
                    <h3>Comptage particulaire Jenkins</h3>
                    <p>Nos techniciens hygiénistes réalisent le comptage particulaire auprès de clients spécialisés. Le but est de croiser nos données afin de palier à la moindre erreur.</p>
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