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

    <title>Greenly - Service</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/c32d07d51f.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include("includes/navbar.php") ?>

<!--Skip to content-->
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>

<main id="main" tabindex="-1">
    <!--hero H1 med tekst vedr service-->
    <article class="container g-5">
        <h1>Services</h1>
        <p class="col-md-6">Greenly er et digitalt bureau, der stræber efter at forbedre weboplevelser for både privatkunder
            og virksomheder, som gerne vil følge med tiden og sørger for at der bliver designet og redesignet
            hjemmesider,
            som I stolt kan vise frem og kommunikere de værdipunkter, som I står inde for.</p>

        <div class="container btn-group" role="group" aria-label="Basic example">

            <div class="gx-5 me-2 bnc-icon icon-trio text-center">
                <a href="#webtilgængelighed" class="btn btn-BNCsec btntrio px-3 ms-3">
                    <i class="fa-solid fa-wheelchair" aria-hidden="true"></i>
                </a>
                <p class="fw-bolder">Webtilgængelighed</p>
            </div>

            <div class="gx-5 me-2 bnc-icon icon-trio text-center">
                <a href="#bæredygtig kommunikation" class="btn btntrio btn-BNCsec px-3 ms-3">
                    <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                </a>
                <p class="fw-bolder">Bæredygtig kommunikation</p>
            </div>

            <div class="gx-5 me-2 bnc-icon icon-trio text-center">
                <a href="#rådgivning" class="btn btntrio btn-BNCsec px-3 ms-3">
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                </a>
                <p class="fw-bolder">Rådgivning</p>
            </div>
        </div>
    </article>

    <!--hvorfor sektion-->
    <article class="container g-5 ">
        <div class="row gx-5">
            <figure class="col-md-6">
                <img src="img/hvorfor.png" class="img-fluid rounded" alt="Billede af kontor" loading="lazy">
                <figcaption class="text-muted small mt-1">
                    Billede: Kontor.
                    Fotograf: Raj Rana.
                </figcaption>
            </figure>
            <article class="col-md-6" id="hvorfor">
                <h2>Hvorfor?</h2>
                <p>
                    I en tid, hvor der er mere og mere opmærksomhed på både vores klima og tilgængelighed,
                    så er det vigtigt for dig, som virksomhed, at du følger med tiden.
                </p>
            </article>
        </div>
    </article>

    <!--de tre sektioner med de forskellige services-->
    <article class="container g-5">
        <div class="row gx-5">
            <article id="webtilgængelighed" class="col-md-6">
                <h3>Webtilgængelighed</h3>
                <p>
                    D. 28. juni 2025 trådte de nye regler fra EU i kraft vedrørende digital tilgængelighed og gælder
                    digitale produkter og tjenesteydelse.
                    Loven kommer til at påvirker både private virksomheder og offentlige udbydere, hvis de bruger
                    følgende
                    produkter eller tjenester:
                </p>
                <table class="table table-striped col-md-6">
                    <tr>
                        <td>E-handel og websites</td>
                        <td>Transport og billetkøb</td>
                    </tr>
                    <tr>
                        <td>Selvbetjeningsautomater</td>
                        <td>E-bøger og medieindhold</td>
                    </tr>
                    <tr>
                        <td>Bank, betaling og forsikring</td>
                        <td>Computere, smartphones og OS</td>
                    </tr>
                </table>
                <p>Derfor hjælper vi dig i gang med at optimere din hjemmesider, så den bliver mere tilgængelig og
                    brugervenlig for dine brugere og kunder.</p>
                <a href="kontakt.php" class="btn btn-BNCsec">Book tid for at høre mere</a>
            </article>

            <figure class="col-md-6">
                <img src="img/webtilgaengelighed.png" class="img-fluid rounded" alt="Screenreader" loading="lazy">
                <figcaption class="text-muted small mt-1">
                    Billede: En person der sidder ved en screen reader.
                    Fotograf: Jonathan Richard.
                </figcaption>
            </figure>
        </div>
    </article>

    <article class="container g-5">
        <div class="row gx-5">
            <article id="bæredygtig kommunikation" class="col-md-6">
                <h3>Bæredygtig kommunikation</h3>
                <p>Når vi snakker bæredygtig kommunikation, så handler det om at sørger for at man som virksomhed har
                    styr
                    hvor man står henne, når det kommer til bæredygtighed.</p>
                <p>Det hjælper ikke længere at skrive ”Vi er bæredygtige” eller ”Vi er CO2-neutrale”. Når vi leverer et
                    produkt i dag, så skal vi også have papirerne og dokumentationen
                    på, at der bliver gjort det vi siger, der bliver gjort. Det gælder i bund og grund om at tage
                    ansvar,
                    for de påstande, der bliver lavet.</p>
                <p>Hos Greenly hjælper vi dig på vej ved at guide dig igennem processen om at blive mere bæredygtig.</p>
                <a href="kontakt.php" class="btn btn-BNCsec">Book tid for at høre mere</a>
            </article>
            <figure class="col-md-6">
                <img src="img/vindmoller.png" class="img-fluid rounded" alt="Vindmøller" loading="lazy">
                <figcaption class="text-muted small mt-1">
                    Billede: Vindmøller i landskabet. Fotograf: Vidar Nordii-Mathisen.
                </figcaption>
            </figure>
        </div>
    </article>

    <article class="container g-5">
        <div id="rådgivning" class="row gx-5">
            <article class="col-md-6">
                <h3>Rådgivning</h3>
                <p>Hos Greenly sidder der dygtige designere og marketingsfolk, som har en masse erfaring med at designe,
                    redesigne og rådgive privat- og offentlige virksomheder.
                    De vil hjælpe dig med dataindsamling, markedsanalyse og hjælpe dig med at lave en målrettet digital
                    strategi, så du kan finde det næste skridt for din virksomhed.</p>
                <p>Book en tid hos os og hør nærmere om hvad vi kan gøre for dig.</p>
                <a href="kontakt.php" class="btn btn-BNCsec">Book tid for at høre mere</a>
            </article>

            <figure class="col-md-6 order-md-1">
                <img src="img/radgivning.png" alt="To kvinder, der sidder og snakker." loading="lazy" class="img-fluid rounded">
                <figcaption class="text-muted small mt-1">
                    Billede: To kvinder, der sidder og snakker. Fotograf: Amy Hirschi.
                </figcaption>
            </figure>
        </div>
    </article>

    <?php include_once 'includes/kundeudtalelser.php'; ?>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>