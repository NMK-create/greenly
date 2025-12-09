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
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>
<?php include("includes/navbar.php") ?>

<header class="container">
    <h1>DEI - Diversity, Inclusion & Equity</h1>
    <p>Diversitet, Lighed & Inklusion</p>
</header>

<main id="main" tabindex="-1" class="container">

<div class="row g-5">

    <!-- Venstre -->
    <div class="col-lg-8">
        <section aria-labelledby="dei-info" class="dei-info">
            <h2 id="dei-info" class="visually-hidden">Information om DEI</h2>

            <article class="mb-5">
                <h3 class="h3">Hvad er DEI?</h3>
                <p>DEI handler om at skabe miljøer, hvor alle mennesker – uanset baggrund, erfaring eller funktionsevne – føler sig set, respekteret og har lige mulighed for at deltage og udvikle sig. Det er en strategisk tilgang, hvor organisationer aktivt anerkender forskelligheder og fjerner barrierer, så alle kan bidrage på lige vilkår.</p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvad bruges DEI til?</h3>
                <p>Det hjælper med at skabe inkluderende og retfærdige arbejdsmiljøer, der styrker innovation, kreativitet og samarbejde. DEI øger trivsel, tryghed og engagement blandt medarbejdere og forbedrer virksomheders omdømme og sociale ansvar.</p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvorfor er DEI vigtigt?</h3>
                <p>Organisationer fungerer bedre, når alle føler sig hørt og respekteret. Mangfoldige teams træffer bedre beslutninger, performer bedre og bidrager til mere innovative løsninger. Samtidig forventer kunder, samarbejdspartnere og samfundet ansvarlighed og etik, og DEI sikrer, at disse forventninger imødekommes på en meningsfuld måde.</p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvordan implementerer vi DEI i vores virksomhed og hos vores kunder?</h3>
                <p>Vi arbejder med at integrere DEI-principper i både design, processer og kultur:

                    Tilgængelige digitale løsninger: Vi følger WCAG og EAA-standarder for at sikre, at vores websites og digitale service kan bruges af alle. 
                    Inkluderende team- og organisationsdesign:  Vi sikrer diversitet og repræsentation på tværs af teams og projekter. 
                    Proces- og kulturvurdering: Vi analyserer og justerer procedurer, praksisser og kultur for at fjerne barrierer.
                </p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvad gør vi for at sikre inklusion?</h3>
                <p>Vi skaber miljøer, hvor alle kan bidrage og føler sig trygge og værdsatte. Det betyder:
                    Lytning og anerkendelse af forskellige perspektiver
                    Fjernelse af barrierer, der kan ekskludere nogen
                    Sikring af repræsentation i alle beslutningsprocesser
                </p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvad er målet med DEI i design?</h3>
                <p>Målet er digitale løsninger, der er tilgængelige og brugbare for alle, uanset baggrund, erfaring eller funktionsevne.
                    Det inkluderer:
                    Tilgængelige websites og apps i overensstemmelse med WCAG og EAA
                    Inkluderende sprog og kommunikation
                    Navigation og struktur, der fungerer for alle brugere
                </p>
            </article>

            <article class="mb-5">
                <h3 class="h3">Hvad begrænser DEI?</h3>
                <p>DEI kan begrænses af:
                    Bias: Bevidste og ubevidste fordomme, der påvirker beslutninger og behandling af mennesker 
                    Fastlåste strukturer og vaner: Indgroede processer, der ekskluderer visse grupper
                    Manglende ressourcer eller ledelsesopbakning: Uden engagement fra topledelsen kan indsatsen mislykkes</p>
            </article>


        </section>
    </div>

    <!-- Højre -->
    <div class="col-lg-4">
        <aside class="dei-aside" aria-label="DEI illustrationer">
            <figure class="text-center mb-5">
                <img src="img/diversity.png" alt="#" class="img-fluid"/>
                <figcaption class="mt-2 fw-semibold">DI•VER•SI•TY<br><small>Alle de måder, hvorpå mennesker er forskellige</small></figcaption>
            </figure>

            <figure class="text-center mb-5">
                <img src="img/diversity.png" alt="#" class="img-fluid"/>
                <figcaption class="mt-2 fw-semibold">EQ•UI•TY<br><small>Retfærdig behandling,
                        adgang og muligheder for alle
                        – uden at identitet bestemmer resultatet</small></figcaption>
            </figure>

            <figure class="text-center mb-5">
                <img src="img/diversity.png" alt="#" class="img-fluid"/>
                <figcaption class="mt-2 fw-semibold">IN•CLU•SION<br><small>Forskellige mennesker har indflydelse,
                        stemme og beslutningskraft</small></figcaption>
            </figure>


        </aside>
    </div>

</div>
<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>