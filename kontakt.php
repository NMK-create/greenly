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
<main id="main" tabindex="-1" class="container">
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

        <fieldset class="col-12">
            <legend class="form-label">Hvad ønsker du hjælp til?</legend>
            <div class="form-check">
                <input type="checkbox" id="webapp" name="services[]" value="webapp" class="form-check-input"/>
                <label for="webapp" class="form-check-label">Hjemmeside</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="webshop" name="services[]" value="webshop" class="form-check-input"/>
                <label for="webshop" class="form-check-label">Webshop</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="accessibility" name="services[]" value="accessibility" class="form-check-input"/>
                <label for="accessibility" class="form-check-label">Tilgængelighed</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="marketing" name="services[]" value="marketing" class="form-check-input"/>
                <label for="marketing" class="form-check-label">Markedsføring</label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="other" name="services[]" value="other" class="form-check-input"/>
                <label for="other" class="form-check-label">Andet, beskriv nedenfor</label>
            </div>
        </fieldset>

        <div class="col-12">
            <label for="message" class="form-label">Besked</label>
            <textarea id="message" name="message" rows="5" class="form-control" placeholder="Fortæl om dit projekt, mål og eventuelle specifikke behov.."></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-BNCsec text-light" type="submit">Send forespørgsel</button>
        </div>
    </form>
</section>

    <aside class="contact-info" aria-labelledby="contact-info-title">
        <h2 id="contact-info-title" class="visually-hidden">Kontaktinformation</h2>

        <div class="info-box">
            <ul class="list-unstyled">
                <li class="mt-5"><strong>Email</strong> <br> kontakt@greenly.dk</li>
                <li class="mt-3"><strong>Telefon</strong> <br> +45 52 52 44 35 <br> Man-Fre 08:00 - 18:00</li>
                <li class="mt-3"><strong>Adresse</strong> <br> Kommunikationsvej 123 <br> 4200 Slagelse</li>
            </ul>
        </div>
    </aside>

    <aside class="process-box" aria-labelledby="process-box">
        <h2>Hvordan foregår processen?</h2>
        <ul class="list-unstyled">
            <li class="mt-3">Vi gennemgår din forespørgsel</li>
            <li class="mt-3">Vi kontakter dig <br> - Med eventuelt opfølgende spørgsmål</li>
            <li class="mt-3">Du modtager et tilbud <br> - Pris, leveringstid og detaljer</li>
        </ul>

    </aside>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>