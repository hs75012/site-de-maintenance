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
            <h1>Nos habilitations</h1>
    </section>
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <img src="images/certificate.jpg">
        <h2>Nos certifications</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus. Donec sit amet nisl non justo malesuada fermentum. Donec eget felis dolor. Suspendisse condimentum vestibulum ex ac cursus.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus. Donec sit amet nisl non justo malesuada fermentum. Donec eget felis dolor. Suspendisse condimentum vestibulum ex ac cursus. Nam pharetra viverra efficitur. Sed pellentesque luctus arcu, quis finibus nibh luctus mattis. Vivamus diam turpis, pellentesque vel magna sit amet, sollicitudin efficitur tortor. Etiam ornare lacinia iaculis. Cras nec dui eu nibh pharetra condimentum. Vestibulum ultrices sapien vitae arcu varius volutpat. Integer rhoncus a massa ut aliquam. Sed aliquet, nibh non dictum ullamcorper, orci arcu posuere tortor, vitae ultrices nulla tortor nec sapien. Vestibulum ac nibh at leo maximus molestie.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus. Donec sit amet nisl non justo malesuada fermentum. Donec eget felis dolor. Suspendisse condimentum vestibulum ex ac cursus. Nam pharetra viverra efficitur. Sed pellentesque luctus arcu, quis finibus nibh luctus mattis. Vivamus diam turpis, pellentesque vel magna sit amet, sollicitudin efficitur tortor. Etiam ornare lacinia iaculis. Cras nec dui eu nibh pharetra condimentum.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus. Donec sit amet nisl non justo malesuada fermentum. Donec eget felis dolor. Suspendisse condimentum vestibulum ex ac cursus. Nam pharetra viverra efficitur. Sed pellentesque luctus arcu.</p>
        
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
        
            <h3>Habilitations</h3>
            <div>
                <span>Attestation de capacité catégorie 1</span>
            </div>
            <div>
                <span>Attestation d'aptitude de nos techniciens</span>    
            </div>
            <div>
                <span>Habiligaz</span>
            </div>
            <div>
                <span>ISO 9001</span>
            </div>
            <div>
                <span>ISO 14001</span>
            </div>
            <div>
                <span>Habilitation CPCU</span>
            </div>
            <div>
                <span>Habilitation contrôle des disconnecteurs</span>
            </div>
           
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