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

    <title>Greenly - Forside</title>

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
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>
<?php include("includes/navbar.php")?>

<section class="hero-section position-relative">
    <img src="img/hero-stor.png" class="hero-img" alt="" aria-hidden="true">

    <div class="hero-overlay"></div>

    <div class="hero-content container text-center">
        <h1 class="display-5 fw-bold">
            Digitale løsninger uden barrierer<br>
            – tilgængeligt, inkluderende og brugervenligt
        </h1>

        <p class="lead mt-3">
            Et digitalt bureau, der hjælper virksomheder med design og webudvikling. <br>
            Vi skaber digitale løsninger, der er tilgængelige for alle<br>
            – uanset baggrund, erfaring eller funktionsevne.
        </p>

        <div class="mt-4">
            <a href="kontakt.php" class="btn btn-BNCsec btn-lg me-2">Få et tilbud</a>
            <a href="service.php" class="btn btn-BNCpri btn-lg">Se services</a>
        </div>
    </div>
</section>


<main id="main" tabindex="-1">
    <section class="services-section py-5" aria-labelledby="services-heading">
        <div class="container">

            <h2 id="services-heading" class="text-center fw-bold mb-5">
                Hvad kan vi hjælpe dig med?
            </h2>

            <div class="row g-4">

                <!-- Hjemmeside -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-desktop service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Hjemmeside</h3>
                        <p class="service-divider"></p>
                        <p>Udvikling af brugervenlige og tilgængelige websites, custom kodet eller WordPress.</p>
                    </div>
                </div>

                <!-- Webshop -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-store service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Webshop</h3>
                        <p class="service-divider"></p>
                        <p>Design og opsætning af skalerbare og konverteringsoptimerede webshops.</p>
                    </div>
                </div>

                <!-- Markedsføring -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-chart-line service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Markedsføring</h3>
                        <p class="service-divider"></p>
                        <p>Datadrevet digital-markedsføring med fokus på synlighed, engagement og målbare
                            resultater.</p>
                    </div>
                </div>

                <!-- SoMe -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-bullhorn service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">SoMe Content</h3>
                        <p class="service-divider"></p>
                        <p>Kreativt indhold til sociale medier, opslag og videoer.</p>
                    </div>
                </div>

                <!-- SEO -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-magnifying-glass-chart service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">SEO</h3>
                        <p class="service-divider"></p>
                        <p>Optimering der forbedrer organiske placeringer og øger trafikken.</p>
                    </div>
                </div>

                <!-- Nyhedsbrev -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-envelope-open-text service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Nyhedsbrev</h3>
                        <p class="service-divider"></p>
                        <p>Opsætning af professionelle nyhedsbreve, der styrker jeres relation til kunder.</p>
                    </div>
                </div>

                <!-- Klimakommunikation -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-earth-europe service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Klimakommunikation</h3>
                        <p class="service-divider"></p>
                        <p>Fokus på grøn kommunikation baseret på fakta og dokumentation.</p>
                    </div>
                </div>

                <!-- Tilgængelighed -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-universal-access service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Tilgængelighed</h3>
                        <p class="service-divider"></p>
                        <p>Implementering af WCAG- og EAA-standarder, så alle kan bruge jeres digitale løsninger.</p>
                    </div>
                </div>

                <!-- Grafisk Design -->
                <div class="col-md-4 d-flex align-items-start">
                    <i class="fa-solid fa-palette service-icon" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h3 class="h5 fw-bold">Grafisk Design</h3>
                        <p class="service-divider"></p>
                        <p>Visuel identitet, logo og grafiske materialer, der styrker jeres brand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="divider">
    <div class="divider-fade mb-5"></div>
</div>

<!--Nye regler om webtilgængelighed-->
<section class="container">
    <h2 class="text-center">Nye regler om webtilgængelighed</h2>
    <p class="text-center">Webtilgængelighed blev et lovkrav i 2025,</p>
    <p class="text-center">Derfor skal alle hjemmesider og digitale services leve op til kravene i EAA og WCAG.</p>

    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-scale-balanced fa-2x"></i>
                    <div class="ms-3">
                        <h3>Lovkrav</h3>
                        <p>Mange virksomheder skal nu opfylde EAA og WCAG 2.1 AA for digitale løsninger. Kravene skærpes
                            fra
                            2025 og omfatter både offentlige og private aktører.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-users-viewfinder fa-2x"></i>
                    <div class="ms-3">
                        <h3>Målgruppe</h3>
                        <p>Ca. 15-20% af befolkningen lever med en form for funktionsnedsættelse. Tilgængelighed
                            betyder, at ingen kunder tabes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                    <div class="ms-3">
                        <h3>SEO</h3>
                        <p>God struktur, semantisk HTML og korrekt brug af alt-tekster forbedrer søgeplaceringer.
                            Tilgængelighed
                            og SEO går hånd i hånd og styrker synlighed</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-heart fa-2x"></i>
                    <div class="ms-3">
                        <h3>Brandimage</h3>
                        <p>Inkluderende virksomheder opfattes som ansvarlige, moderne og troværdige. Det styrker
                            omdømmet og
                            differentierer fra konkurrence.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-mobile-screen fa-2x"></i>
                    <div class="ms-3">
                        <h3>Brugeroplevelse</h3>
                        <p>Tilgængelige websites er nemmere at navigere for alle - i alle situationer og på alle
                            enheder. Det
                            øger tilfredshed, engagement og konverteringer.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 d-flex align-items-start p-3">
                    <i class="fa-solid fa-circle-check fa-2x"></i>
                    <div class="ms-3">
                        <h3>Undgå bøder</h3>
                        <p>Manglende overholdelse kan føre til klager, påbud og økonomiske sanktioner. At handle i tide
                            er
                            billigere end at rette bagud.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="divider">
    <div class="divider-fade mb-5"></div>
</div>

<?php include_once 'includes/kundeudtalelser.php'; ?>

<div class="divider">
    <div class="divider-fade mb-5"></div>
</div>

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
<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
