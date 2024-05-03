<?php
include_once 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
 // Post data not empty insert a new record
 // Set-up the variables that are going to be inserted, we must check
 // the POST variables exist if not we can default them to blank
 // $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
 // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
 $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
 $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
 $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
 $question = isset($_POST['question']) ? $_POST['question'] : '';


 // Insert new record into the contacts table
 $stmt = $pdo->prepare('INSERT INTO ecommerce (nom,mail,phone,question) VALUES (?, ?, ?, ?)');
 $stmt->execute([$nom, $mail, $phone, $question]);
 // Output message
 $msg = 'Created Successfully!';
}
?>
<?=template_header('Create')?>

<?php if ($msg): ?>
<p><?=$msg?></p>
<?php endif; ?>
</div>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        XYZ
    </title>
    <link rel="shortcut Icon" href="./assets/images/favicon.png" type="images/png">
    <!-- Bootstrap-5 CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- wow Animation  -->
    <link rel="stylesheet" href="./assets/css/animate.css">
    <!--  Flat Icon CSS -->
    <link rel="stylesheet" href="./assets/font/flaticon.css">
    <!--  BoxIcons CSS -->
    <link rel="stylesheet" href="./assets/css/boxicons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

</head>

<body>
    <!-- Début de la zone de contact-->
    <div id="contact" class="contact-area section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 m-auto">
                    <div class="section-inner-content text-center">
                        <div class="section-title">
                            <h2 class="wow animate fadeInUp" data-wow-duration="900ms" data-wow-delay="0s">
                                contactez-<span>nous</span></h2>
                            <span class=" wow animate fadeInUp" data-wow-duration="1200ms" data-wow-delay="0s"></span>
                        </div>
                        <h6 class="sub-title wow animate fadeInUp" data-wow-duration="1400ms" data-wow-delay="0s">
                            N'hésitez pas à nous contacter,si vous avez la moindre question.
                        </h6>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="contact-lines">
                        <div class="single-contact-box text-left wow animate fadeInUp" data-wow-duration="600ms"
                            data-wow-delay="0s">
                            <h6 class="phone pc">
                                <i class="flaticon-phone-call-1"></i>
                                <span>Téléphone :</span>
                            </h6>
                            <p>
                                </a>01 99 99 99 99 <br>

                            </p>
                        </div>

                        <div class="single-contact-box text-left wow animate fadeInUp" data-wow-duration="900ms"
                            data-wow-delay="0s">
                            <h6 class="email pc">
                                <i class="flaticon-black-back-closed-envelope-shape"></i>
                                <span>Email :</span>
                            </h6>
                            <p>
                                <a href="mailto:info@example.com">xyz@gmail.com</a> <br>

                            </p>
                        </div>

                        <div class="single-contact-box text-left wow animate fadeInUp" data-wow-duration="1200ms"
                            data-wow-delay="0s">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-8">
                    <!-- questionnaire-->
                    <form class="contact-mailform text-left" data-form-output="form-output-global"
                        data-form-type="contact" method="post" action="create.php">


                        <div class="form-wrap input_area wow animate fadeInUp" data-wow-duration="600ms"
                            data-wow-delay="0s">
                            <input class="form-input form-control" id="contact-name" type="text" name="nom"
                                placeholder="Nom" required>
                        </div>

                        <div class="form-wrap input_area wow animate fadeInUp" data-wow-duration="800ms"
                            data-wow-delay="0s">
                            <input class="form-input form-control" id="contact-email" type="email" name="mail"
                                placeholder="Mail" required>
                        </div>

                        <div class="form-wrap input_area wow animate fadeInUp" data-wow-duration="1000ms"
                            data-wow-delay="0s">
                            <input class="form-input form-control" id="contact-phone" type="text" name="phone"
                                placeholder="Numéro de téléphone" autocomplete="on" required>
                        </div>

                        <div class="form-wrap input_area wow animate fadeInUp" data-wow-duration="1200ms"
                            data-wow-delay="0s">
                            <textarea class="form-input" id="contact-message" name="question"
                                placeholder="Écrire un message" rows="4" required></textarea>
                        </div>

                        <div class="form-button animated-btn group-sm text-left">
                            <div class="pikachu">
                                <img src="./assets/images/pikachu3.gif" class="img-fluid" alt="animate img">
                            </div>

                            <button type="submit" class="btn btn-submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                </form>
            </div>
            <?=template_footer()?>