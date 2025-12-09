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
    <section class="container g-5">
        <h1>Services</h1>
        <p>Greenly er et digitalt bureau, der stræber efter at forbedre weboplevelser for både privatkunder
            og virksomheder, som gerne vil følge med tiden og sørger for at der bliver designet og redesignet
            hjemmesider,
            som I stolt kan vise frem og kommunikere de værdipunkter, som I står inde for.</p>

        <div class="btn-group" role="group" aria-label="Basic example">
            <div class="gx-5 me-2 bnc-icon icon-trio">
                <button type="button" class="btn btn-BNCsec btn-trio">
                    <i class="fa-solid fa-wheelchair" aria-hidden="true"></i>
                </button>
                <p class="fw-bolder">Webtilgængelighed</p>
            </div>

            <div class="gx-5 me-2 bnc-icon icon-trio">
                <button type="button" class="btn btn-BNCsec btn-trio">
                    <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                </button>
                <p class="fw-bolder"> Bæredygtig kommunikation</p>
            </div>

            <div class="gx-5 me-2 bnc-icon icon-trio">
                <button type="button" class="btn btn-BNCsec btn-trio">
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                </button>
                <p class="fw-bolder">Rådgivning</p>
            </div>
        </div>
    </section>

    <!--hvorfor sektion-->
    <section class="container g-5">
        <div class="row">
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
    </section>

    <!--de tre sektioner med de forskellige services-->
    <section class="container g-5">
        <div class="row">
            <article class="col-md-6">
                <h3>Webtilgængelighed</h3>
                <p>
                    D. 28. juni 2025 trådte de nye regler fra EU i kraft vedrørende digital tilgængelighed og gælder
                    digitale produkter og tjenesteydelse.
                    Loven kommer til at påvirker både private virksomheder og offentlige udbydere, hvis de bruger
                    følgende
                    produkter eller tjenester:
                </p>
                <table class="table table-striped">
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
            </article>

            <figure class="col-md-6">
                <img src="img/webtilgaengelighed.png" class="img-fluid rounded" alt="Screenreader" loading="lazy">
                <figcaption class="text-muted small mt-1">
                    Billede: En person der sidder ved en screen reader.
                    Fotograf: Jonathan Richard.
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="container g-5">
        <div class="row">
            <article class="col-md-6">
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
            </article>
            <figure class="col-md-6">
                <img src="img/vindmoller.png" class="img-fluid rounded" alt="Vindmøller" loading="lazy">
                <figcaption class="text-muted small mt-1">
                    Billede: Vindmøller i landskabet. Fotograf: Vidar Nordii-Mathisen.
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="container g-5">
        <div class="row">
            <article class="col-md-6">
                <h3>Rådgivning</h3>
                <p>Hos Greenly sidder der dygtige designere og marketingsfolk, som har en masse erfaring med at designe,
                    redesigne og rådgive privat- og offentlige virksomheder.
                    De vil hjælpe dig med dataindsamling, markedsanalyse og hjælpe dig med at lave en målrettet digital
                    strategi, så du kan finde det næste skridt for din virksomhed.</p>
                <p>Book en tid hos os og hør nærmere om hvad vi kan gøre for dig.</p>
            </article>
            <figure class="col-md-6 order-md-1">
                <img src="img/radgivning.png" alt="To kvinder, der sidder og snakker." loading="lazy"
                     class="img-fluid rounded">
                <figcaption class="text-muted small mt-1">
                    Billede: To kvinder, der sidder og snakker. Fotograf: Amy Hirschi.
                </figcaption>
            </figure>
        </div>
    </section>

    <!--Kundeudtalelser-->
    <article id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="testimonial-slidet text-center p-4">
                    <img src="img/mianygaard.png" alt="Mia Nygaard" loading="lazy" class="img-fluid rounded-circle">
                    <div class="stars mt-2 mb-3">
                        ★★★★★
                    </div>
                    <p class="lead mt-3">Fra første møde mærkede vi en ægte interesse i at forstå vores behov og
                        mål.</p>
                    <p class="lead mt-3">Resultatet blev en ny hjemmeside og kommunikationen omkring</p>
                    <p class="lead mt-3">vores bæredygtighedsarbejde, der har løftet vores brand markant.</p>
                    <p class="lead mt-3">Processen var tryg, professionel og fuld af god sparring.</p>
                    <h6 class="mt-3 fw-bold">— Mia Nygaard, NordiskSolutions</h6>
                </div>
            </div>

            <div class="carousel-item">
                <div class="testimonial-slide text-center p-4">
                    <img src="img/martinlykke.png" alt="Martin Lykke" loading="lazy" class="img-fluid rounded-circle">
                    <div class="stars mt-2 mb-3">
                        ★★★★★
                    </div>
                    <p class="lead mt-3">Greenly formåede at kombinere kreativt design med en skarp teknisk løsning,</p>
                    <p class="lead mt-3">og samtidig sikre fuld tilgængelighed og SEO-optimering.</p>
                    <p class="lead mt-3">Vi har allerede oplevet en tydelig vækst i trafik og henvendelser.</p>
                    <p class="lead mt-3">De er kompetente, lyttende og meget behagelige at arbejde sammen med.</p>
                    <h6 class="mt-3 fw-bold">— Martin Lykke, FjordSecurity</h6>
                </div>
            </div>

            <div class="carousel-item">
                <div class="testimonial-slide text-center p-4">
                    <img src="img/yasminflint.png" alt="Yasmin Flint" loading="lazy" class="img-fluid rounded-circle">
                    <div class="stars mt-2 mb-3">
                        ★★★★★
                    </div>
                    <p class="lead mt-3">Greenly har hjulpet os med webshops, SoMe-indhold og en samlet digital
                        strategi.</p>
                    <p class="lead mt-3">De arbejder effektivt, er nemme at kommunikere med</p>
                    <p class="lead mt-3">og formår altid at omsætte komplekse idéer til konkrete resultater.</p>
                    <p class="lead mt-3">Vi føler os set, hørt og prioriteret.</p>
                    <h6 class="mt-3 fw-bold">— Yasmin Flint, LivingStudio</h6>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Tidligere</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Næste</span>
            </button>

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                        class="active"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
            </div>

        </div>
    </article>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>