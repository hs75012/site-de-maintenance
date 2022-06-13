<?php
include 'includes/header.php';
include '_inc.php';
include 'captcha.php';

$name = "";
$email = "";
$subject = "";
$message = "";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $recaptchaResponse = $_POST["g-recaptcha-response"];
    $userIp = $_SERVER["REMOTE_ADDR"];

    $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);
    if ($json->success == "true") {
        $msg = "Bonjour {$name}, vous avez {$message} réussi votre recaptcha";
    } else {
        $msg = "You have failed to pass recaptcha. What does this means? ROBOT!";
    }
}

?>

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
            <?php if (array_key_exists('errors', $_SESSION)) : ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if (array_key_exists('success', $_SESSION)) : ?>
                <div class="alert alert-primary" style="background-color: #d4edda!important;padding: 10px; color: #216136">
                    Votre message a bien été envoyé
                </div>
            <?php
                if ($_SESSION['success'] == 1) unset($_SESSION['success']);
            endif;
            ?>

            <form action="contact-form-handler.php" method="post">
                <input type="text" name="name" placeholder="Entrez votre nom" required>
                <input type="email" name="email" placeholder=" Entrez votre adresse email" required>
                <input type="text" name="subject" placeholder="Entrez le sujet" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                
                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                
                <button type="submit" class="hero-btn red-btn">Envoyez le message</button>
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                 async defer>
                 </script>
            </form>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>