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

    <title>EAA - Den Europæiske Tilgængelighedslov</title>

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
<?php include("includes/navbar.php") ?>

<header class="container mt-5">
    <h1>EAA - Den Europæiske Tilgængelighedslov</h1>
    <p>Få overblik over krav og ansvar i den nye lov</p>
</header>

<main id="main" tabindex="-1" class="container" role="main">
    <div class="row g-5">

        <div class="col-lg-8">
            <section aria-labelledby="eaa-intro">

                <article class="mb-5" aria-labelledby="eaa-hvad">
                    <h2 id="eaa-hvad">Hvad er EAA?</h2>
                    <p>
                        Den nye tilgængelighedslov har til formål at sikre, at alt digitalt indhold
                        samt elektroniske tjenester gøres tilgængelige for alle borgere i EU.
                        Det skal være lettere for mennesker med funktionsnedsættelser at begå sig online,
                        både hvad angår handel på hjemmesider
                        og adgang til digitale tjenester.
                        Loven trådte i kraft den 28. juni 2025 og forventes at gavne en betydelig del af
                        befolkningen, som i dag har svært ved at bruge digitale løsninger.
                    </p>
                </article>

                <article class="mb-5" aria-labelledby="eaa-omfatter">
                    <h2 id="eaa-omfatter">Hvem omfatter loven?</h2>
                    <p>
                        Tilgængelighedsloven gælder for mange digitale produkter og tjenesteydelser,
                        især dem der retter sig mod forbrugere. Dette indebærer både private virksomheder
                        og offentlige udbydere, hvis de tilbyder følgende typer produkter eller tjenester:
                    </p>

                    <ul>
                        <li><strong>E-handel og websider:</strong> Webshops og digitale tjenester</li>
                        <li><strong>Transport og billetkøb:</strong> Rejsebooking, tog- og flybilletter</li>
                        <li><strong>Selvbetjeningsautomater:</strong> Informationsskærme og hæveautomater</li>
                        <li><strong>Bank, betaling og forsikring:</strong> Netbank og mobilbank</li>
                        <li><strong>E-bøger og medieindhold:</strong> Digitale bøger og læseenheder</li>
                        <li><strong>Computere, smartphones og OS:</strong> Forbrugerrettet computerudstyr</li>
                    </ul>

                    <p>
                        Loven omfatter også et mindre antal fysiske produkter med digital grænseflade,
                        fx smart-tv eller kortterminaler.
                    </p>
                </article>

                <article class="mb-5" aria-labelledby="wcag">
                    <h2 id="wcag">Retningslinjer – WCAG 2.1</h2>
                            <p>
                                For at opfylde tilgængelighedskravene skal man følge WCAG 2.1 standarden,
                                som er internationale retningslinjer for webindhold og apps, tilpasset personer
                                med forskellige typer af funktionsnedsættelser.
                                WCAG bygger på fire grundprincipper: indholdet skal være:
                            </p>

                            <ol>
                                <li>Opfatteligt</li>
                                <li>Anvendeligt</li>
                                <li>Forståeligt</li>
                                <li>Robust</li>
                            </ol>

                            <p>
                                Disse principper vurderes efter succeskriterier inddelt i niveauerne A, AA og AAA.
                                Niveau A er det mest basale, AA inkluderer alle A-krav plus yderligere kriterier,
                                mens AAA er det højeste niveau med alle A+AA krav plus avancerede kriterier.
                                I praksis er niveau AA det typiske mål i lovgivningen, da det balancerer tilgængelighed
                                med realistisk implementering.
                            </p>
                </article>

                <article class="mb-5" aria-labelledby="wcag-eksempler">
                    <h2 id="wcag-eksempler">Eksempler på niveau AA succeskriterier</h2>
                    <ul>
                        <li><strong>Undertekster:</strong> Live indhold skal have undertekster</li>
                        <li><strong>Kontrast:</strong> Minimum 4,5:1 for brødtekst</li>
                        <li><strong>Tekstforstørrelse:</strong> Op til 200% uden funktionstab</li>
                        <li><strong>Orientering:</strong> Indhold må ikke låse skærmretningen</li>
                        <li><strong>Ikke-tekstlig kontrast:</strong> Mindst 3:1</li>
                        <li><strong>Tekstafstand:</strong> Må ikke give indholdstab</li>
                        <li><strong>Flere måder:</strong> Undersider skal kunne findes på flere måder</li>
                        <li><strong>Synligt fokus:</strong> Fokusmarkering skal være tydelig</li>
                    </ul>
                </article>
            </section>
        </div>

        <!-- Højre side -->
        <div class="col-lg-4">
            <aside aria-label="Dekorative illustrationer">
                <figure class="my-5">
                    <img src="img/EAA.png" class="figure-img img-fluid rounded mb-5" style="border-radius: 1rem" alt="" aria-hidden="true">
                </figure>

                <figure class="figure my-5">
                    <img src="img/EAA11.png" class="img-fluid rounded mt-5 mb-5" alt="Illustration af WCAG’s fire principper: Opfatteligt, Anvendeligt, Forståeligt og Robust">
                </figure>

                <figure class="my-5">
                    <img src="img/cirkler2.png" class="img-fluid rounded mt-5" alt="To farvecirkler. Den første opfylder tilgængelighedskravene for kontrast, den anden gør ikke.">
                    <figcaption class="figure-caption mt-3">
                        Eksempel på korrekt og forkert farvekontraster i niveau AA.
                    </figcaption>
                </figure>
            </aside>
        </div>

    </div>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>