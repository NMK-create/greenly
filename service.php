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
<!--Skip to content-->
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>
<?php include("includes/navbar.php") ?>

<header class="container mt-5" aria-labelledby="service-intro">
    <h1 id="service-intro">Services</h1>
    <p>Greenly er et digitalt bureau, der stræber efter at forbedre weboplevelser for både privatkunder
        og virksomheder, som gerne vil følge med tiden og sørger for at der bliver designet og redesignet
        hjemmesider,
        som I stolt kan vise frem og kommunikere de værdipunkter, som I står inde for.</p>
</header>

<main id="main" tabindex="-1">

    <section>
        <nav class="flex-wrap btn-group" aria-label="Services">
            <div class="bnc-icon icon-trio text-center">
                <a href="#webtilgaengelighed" class="btn btn-BNCsec btntrio" role="button" aria-label="Gå til webtilgængelighed" data-bs-toggle="tooltip" title="Gå til webtilgængelighed">
                    <i class="fa-solid fa-wheelchair" aria-hidden="true"></i>
                </a>
                <p id="label-webtilgaengelighed" class="fw-bolder">Webtilgængelighed</p>
            </div>

            <div class="bnc-icon icon-trio text-center">
                <a href="#baeredygtig-kommunikation" class="btn btntrio btn-BNCsec" role="button" aria-label="Gå til bæredygtig kommunikation" data-bs-toggle="tooltip" title="Gå til bæredygtig kommunikation">
                    <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                </a>
                <p id="label-baeredygtig-kommunikation" class="fw-bolder">Bæredygtig kommunikation</p>
            </div>

            <div class="bnc-icon icon-trio text-center">
                <a href="#raadgivning" class="btn btntrio btn-BNCsec" role="button" aria-label="Gå til rådgivning" data-bs-toggle="tooltip" title="Gå til rådgivning">
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                </a>
                <p id="label-raadgivning" class="fw-bolder">Rådgivning</p>
            </div>
        </nav>
    </section>

    <div class="divider">
        <div class="divider-fade my-5"></div>
    </div>

    <!--hvorfor sektion-->
    <section class="container g-5 py-5 my-5" aria-label="hvorfor-sektion">
        <div class="row gx-5">
            <figure class="col-md-6">
                <img src="img/hvorfor.png" class="img-fluid rounded" alt="Billede af kontor" loading="lazy">
                <figcaption class="small mt-1">
                    Kontor <br>
                    Fotograf: Raj Rana.
                </figcaption>
            </figure>
            <article class="col-md-6" id="hvorfor">
                <h2 id="hvorfor-overskrift">Hvorfor?</h2>
                <p>
                    I en tid, hvor der er mere og mere opmærksomhed på både vores klima og tilgængelighed,
                    så er det vigtigt for dig, som virksomhed, at du følger med tiden.
                </p>
            </article>
        </div>
    </section>

    <!--de tre sektioner med de forskellige services-->
    <section class="container section-spacing" aria-labelledby="webtilgaengelighed-heading">
        <div class="row gx-5">
            <div id="webtilgaengelighed" class="col-md-6">
                <h3 id="webtilgaengelighed-heading">Webtilgængelighed</h3>
                <p>
                    D. 28. juni 2025 trådte de nye regler fra EU i kraft vedrørende digital tilgængelighed og gælder
                    digitale produkter og tjenesteydelse.
                    Loven kommer til at påvirker både private virksomheder og offentlige udbydere, hvis de bruger
                    følgende
                    produkter eller tjenester:
                </p>
                <div class="row py-3 my-3">
                    <ul class="col list-unstyled service-list" role="list">
                        <li class="my-2">E-handel og websites</li>
                        <li class="my-2">Selvbetjeningsautomater</li>
                        <li class="my-2">Bank, betaling og forsikring</li>
                        <li class="my-2">Transport og billetkøb</li>
                        <li class="my-2">E-bøger og medieindhold</li>
                        <li class="my-2">Computere, smartphones og OS</li>
                    </ul>
                </div>
                <p>Derfor hjælper vi dig i gang med at optimere din hjemmesider, så den bliver mere tilgængelig og
                    brugervenlig for dine brugere og kunder.</p>
                <button href="kontakt.php" class="btn btn-BNCsec p-3 my-4" aria-label="Book tid for at høre mere">Book tid for at høre mere</button>
            </div>

            <figure class="col-md-6">
                <img src="img/webtilgaengelighed.png" class="img-fluid rounded" alt="Screenreader" loading="lazy">
                <figcaption class="small mt-1">
                    En person der sidder ved en screen reader <br>
                    Fotograf: Jonathan Richard.
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="container section-spacing" aria-labelledby="baeredygtig-kommunikation-heading">
        <div class="row gx-5">
            <div id="baeredygtig-kommunikation" class="col-md-6">
                <h3 id="baeredygtig-kommunikation-heading">Bæredygtig kommunikation</h3>
                <p>Når vi snakker bæredygtig kommunikation, så handler det om at sørger for at man som virksomhed har
                    styr
                    hvor man står henne, når det kommer til bæredygtighed.</p>
                <p>Det hjælper ikke længere at skrive ”Vi er bæredygtige” eller ”Vi er CO2-neutrale”. Når vi leverer et
                    produkt i dag, så skal vi også have papirerne og dokumentationen
                    på, at der bliver gjort det vi siger, der bliver gjort. Det gælder i bund og grund om at tage
                    ansvar,
                    for de påstande, der bliver lavet.</p>
                <p>Hos Greenly hjælper vi dig på vej ved at guide dig igennem processen om at blive mere bæredygtig.</p>
                <button href="kontakt.php" class="btn btn-BNCsec p-3 my-4" aria-label="Book tid for at høre mere">Book tid for at høre mere</button>
            </div>
            <figure class="col-md-6">
                <img src="img/vindmoller.png" class="img-fluid rounded" alt="Vindmøller" loading="lazy">
                <figcaption class="small mt-1">
                    Vindmøller i landskabet <br> Fotograf: Vidar Nordii-Mathisen.
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="container section-spacing" aria-labelledby="raadgivning-heading">
        <div id="raadgivning" class="row gx-5">
            <div class="col-md-6">
                <h3 id="raadgivning-heading">Rådgivning</h3>
                <p>Hos Greenly sidder der dygtige designere og marketingsfolk, som har en masse erfaring med at designe,
                    redesigne og rådgive privat- og offentlige virksomheder.
                    De vil hjælpe dig med dataindsamling, markedsanalyse og hjælpe dig med at lave en målrettet digital
                    strategi, så du kan finde det næste skridt for din virksomhed.</p>
                <p>Book en tid hos os og hør nærmere om hvad vi kan gøre for dig.</p>
                <button href="kontakt.php" class="btn btn-BNCsec p-3 my-4" aria-label="Book tid for at høre mere">Book tid for at høre mere</button>
            </div>

            <figure class="col-md-6 order-md-1">
                <img src="img/radgivning.png" alt="To kvinder, der sidder og snakker." loading="lazy" class="img-fluid rounded">
                <figcaption class="small mt-1  text-muted">
                    To kvinder, der sidder og snakker <br> Fotograf: Amy Hirschi.
                </figcaption>
            </figure>
        </div>
    </section>

    <div class="divider">
        <div class="divider-fade my-5"></div>
    </div>

    <?php include_once 'includes/kundeudtalelser.php'; ?>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>