<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kontakt os - Greenly</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/c32d07d51f.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include("includes/navbar.php") ?>
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>

<header class="container">
    <h1>Fortæl os om din virksomhed</h1>
    <p>Udfyld formularen nedenfor, så vender vi tilbage hurtigst muligt, dog indenfor 24 timer.</p>
</header>

<section aria-labelledby="kontakt-formular" class="contact-section">
    <h2 id="kontakt-formular" class="visually-hidden">Kontaktformular</h2>

    <form class="row g-4" action="#" method="post" novalidate>

        <div class="col-md-6">
            <label for="name" class="form-label">Navn *</label>
            <input id="name" name="name" type="text" autocomplete="name" required class="form-control" placeholder="Dit fuldenavn">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail *</label>
            <input id="email" name="email" type="email" autocomplete="email" required class="form-control" placeholder="din@email.dk">
        </div>

        <div class="col-md-6">
            <label for="phone" class="form-label">Telefon</label>
            <input id="phone" name="phone" type="tel" autocomplete="tel" class="form-control" placeholder="+45 52 52 44 35">
        </div>

        <div class="col-md-6">
            <label for="company" class="form-label">Virksomhed</label>
            <input id="company" name="company" type="text" autocomplete="organization" class="form-control" placeholder="Dit firmanavn">
        </div>




    </form>
</section>

<main id="main" tabindex="-1" class="container">

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>