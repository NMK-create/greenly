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
    
    <title>Sigende titel</title>
    
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

<!--Skip to content-->
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>

<main id="main" tabindex="-1">

<!--Nye regler om webtilgængelighed-->
<article class="container">
    <h2 class="text-center">Nye regler om webtilgængelighed</h2>
    <p class="text-center">Webtilgængelighed blev et lovkrav i 2025,</p>
    <p class="text-center">derfor skal alle hjemmesider og digitale services leve op til kravene i EAA og WCAG.</p>
    <div class="container d-flex row">
        <div class="col-md-6">
            <i class="fa-solid fa-scale-balanced"></i>
            <h3>Lovkrav</h3>
            <p>Mange virksomheder skal nu opfylde EAA og WCAG 2.1 AA for digitale løsninger. Kravene skærpes fra 2025 og omfatter både offentlige og private aktører.</p>
        </div>
        <div class="col-md-6">
            <i class="fa-solid fa-users-viewfinder"></i>
            <h3>Målgruppe</h3>
            <p>Ca. 15-20% af befolkningen lever med en form for funktionsnedsættelse. Tilgængelighed betyder, at ingen kunder tabes.</p>
        </div>
        <div class="col-md-6">
            <i class="fa-solid fa-magnifying-glass"></i>
            <h3>SEO</h3>
            <p>God struktur, semantisk HTML og korrekt brug af alt-tekster forbedrer søgeplaceringer. Tilgængelighed og SEO går hånd i hånd og styrker synlighed</p>
        </div>
        <div class="col-md-6">
            <i class="fa-solid fa-heart"></i>
            <h3>Brandimage</h3>
            <p>Inkluderende virksomheder opfattes som ansvarlige, moderne og troværdige. Det styrker omdømmet og differentierer fra konkurrence.</p>
        </div>
        <div class="col-md-6">
            <i class="fa-solid fa-mobile-screen"></i>
            <h3>Brugeroplevelse</h3>
            <p>Tilgængelige websites er nemmere at navigere for alle - i alle situationer og på alle enheder. Det øger tilfredshed, engagement og konverteringer.</p>
        </div>
        <div class="col-md-6">
            <i class="fa-solid fa-circle-check"></i>
            <h3>Undgå bøder</h3>
            <p>Manglende overholdelse kan føre til klager, påbud og økonomiske sanktioner. At handle i tide er billigere end at rette bagud.</p>
        </div>
    </div>
</article>

    <?php include_once 'includes/kundeudtalelser.php'; ?>

<section>
<div>
<h3 class="text-center">Få tips, guides og ny viden om digial udvikling</h3>
    <p class="text-center">Tilmeld dig, og få nyttig viden om digital udvikling,
    trends, cases og konkrete værktøjer, du kan bruge i dit arbejde</p>
<form class="row g-3 ">
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
    </div>
    <div class="col-auto text-center">
        <label for="inputPassword2" class="visually-hidden">Email</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Din Email">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-BNCsec mb-3 text-BNCbg">Tilmeld</button>
    </div>
</form>
</div>
</section>
</main>
<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
