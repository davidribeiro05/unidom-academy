<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/boot.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,300&display=swap"
          rel="stylesheet">
    <title><?= $title; ?></title>


</head>
<body>
<!--HEADER-->
<?php if ($_SERVER["REQUEST_URI"] == "/unidomacademy/"): ?>
    <nav class="first_nav">
        <img class="logo" src="<?= theme("/assets/icons/logo.svg"); ?>" alt="logo">
    </nav>
<?php else : ?>
    <nav class="first_nav">
        <div class="logo_img">
            <a href="<?= url("/"); ?>">
                <span><img class="logo" src="<?= theme("/assets/icons/logo.svg"); ?>" alt="logo"></span>
            </a>
        </div>
        <div class="btn-back">
            <a href="<?= url("/sistema/bem-vindo"); ?>">
                <img src="<?= theme("/assets/icons/btn-back.svg"); ?>" alt="">
            </a>
        </div>
    </nav>
<?php endif; ?>

<!--CONTENT-->

<?= $v->section("content"); ?>


<!--FOOTER-->
<?php if ($_SERVER["REQUEST_URI"] == "/unidomacademy/"): ?>
    <footer>
        <div class="footer">
            <div class="footer_logo">
                <img class="logo" src="<?= theme("/assets/icons/logo.svg"); ?>" alt="">
            </div>
            <div class="adrress">
                <img src="<?= theme("/assets/icons/location.svg"); ?>" alt="Ícone de localização">
                <p>Rua A.C.M 01 Nº 76, <br>Comércio - Salvador Bahia. </p>
            </div>
            <div class="section_contact">
                <div class="contact">
                    <div class="contact_icon">
                        <img src="<?= theme("/assets/icons/telefone.svg"); ?>" alt="Ícone de localização">
                    </div>
                    <div class="contact_text">
                        <p>+55 75 1 1234-5678</p>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact_icon">
                        <img src="<?= theme("/assets/icons/mail.svg"); ?>" alt="Ícone de localização">
                    </div>
                    <div class="contact_text">
                        <p>contato@unidomacademy.com</p>
                    </div>
                </div>
            </div>
            <div class="developer">
                <p>Desenvolvido por David Ribeiro</p>
            </div>
        </div>
    </footer>
<?php endif; ?>

<script src="<?= theme("/assets/js/scripts.js"); ?>"></script>

<?= $v->section("scripts"); ?>

</body>
</html>