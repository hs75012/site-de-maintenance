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

    <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2625.076630709886!2d2.3966722156401055!3d48.856749108776455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1654654437066!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></>" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Agence Paris</h5>
                            <p>17 rue des Orteaux 75020 Paris</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>01 43 42 42 21</h5>
                            <p>Lundi au Vendredi de 8h00 à 18h00</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>easyconditionning@gmail.com</h5>
                            <p>Envoyez-nous vos demandes d'informations</p>
                        </span>
                    </div>
                    
                </div>
                <div class="contact-col">
                    <form action="contact-form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Entrez votre nom" required>
                    <input type="email" name="email" placeholder=" Entrez votre adresse email" required>
                    <input type="text" name="subject" placeholder="Entrez le sujet" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Envoyez le message</button>
                    </form> 
                    
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
