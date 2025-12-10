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

    <title>EAA</title>

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
    <p>Få overblik over krav, målgrupper og ansvar i den nye lov</p>
</header>

<main id="main" tabindex="-1" class="container">

    <div class="row g-5">
        <!-- Venstre -->
        <div class="col-lg-8">
            <section class="content-wrapper">

                <article class="mb-5">
                    <h2>Hvad er EAA</h2>
                    <p>
                        Den nye tilgængelighedslov har til formål at sikre at alt digitalt indhold
                        samt elektroniske tjenester gøres tilgængelige for alle borgere i EU.
                        Det skal altså være lettere for mennesker med funktionsnedsættelser at begå sig online,
                        både hvad angår det at handle på diverse hjemmesider, men i lige grad også tilgåelsen af
                        digitale tjenester.
                        Lovgivningen som trådte i kraft 28. juni 2025 og forventes at gavne en betydelig del af
                        befolkningen som i dag har svært ved bruge digitale løsninger.
                    </p>
                </article>

                <article class="mb-5">
                    <h2>Hvem omfatter loven</h2>
                    <p>
                        Tilgængelighedsloven gælder for en lang række digitale produkter samt tjenesteydelser,
                        dette gælder især dem der retter sig mod forbruger.
                        Dette indebær både private virksomheder og offentlige udbydere,
                        hvis de tilbyder følgende typer produkter og eller tjenester:
                    </p>

                    <ul>
                        <li>E-handel og websides<br>Webshops og online tjenester</li>
                        <li>Transport og billetkøb<br>Rejsebooking, tog/fly billetter</li>
                        <li>Selvbetjeningsautomater<br>Informationsskærme, hæveautomater</li>
                        <li>Bank, betaling og forsikring<br>Net- og mobilbank</li>
                        <li>E-bøger og medie indhold<br>Digitale bøger, e-læse-enheder mm.</li>
                        <li>Computere, smartphones og OS<br>Forbruger-computerudstyr</li>
                    </ul>

                    <p>
                        Derudover opfatter loven også et mindre antal fysiske produkter
                        med en digital grænseflade, dette indebær f.eks. Smart tv eller kortterminaler
                    </p>
                </article>

                <article class="mb-5">
                    <h2>Retningslinjer - WCAG 2.1</h2>
                    <p>
                        Når det kommer til at opfylde tilgængelighedskravene handler det om
                        at følge WCAG 2.1 standarden. WCAG er internationale retningslinjer for
                        hvordan man gør webindhold samt apps tilgængelige for personer med forskellige
                        typer af udfordringer og funktionsnedsættelser. WCAG bygger på fire grundprincipper,
                        som er:
                    </p>
                    <ol>
                        <li>Opfatteligt</li>
                        <li>Anvendeligt</li>
                        <li>Forståligt</li>
                        <li>Robust</li>
                    </ol>

                    <p>
                        Disse principper vurderes dernæst efter succeskriterier,
                        som er inddelt i tre niveauer A, AA og AAA.
                        Niveau A, er det mest basale niveau af tilgængelighedskravene, hvor
                        AA omfatter alle A-krav + yderligere kriterier,
                        som tilsammen anses for at give en høj grad af tilgængelighed,
                        mens AAA er det højeste niveau med de mest ambitiøse krav,
                        dette niveau inkludere alle A + AA krav samt yderligere avanceret tilgængelighedskriterier.
                    </p>

                    <p>
                        I praksis er niveau AA det typiske mål i lovgivningen samt den offentlige standard,
                        da AA niveauet balancere omfattende tilgængelighed men med en realistisk tilgang til
                        at virksomheder kan implementere kravene.
                    </p>
                </article>

                <article class="mb-5">
                    <h3>Eksempler på niveau AA succeskriterier:</h3>
                    <ul>
                        <li>Undertekster:<br>
                            Tilføj undertekster på live lydindhold
                        </li>
                        <li>Kontrast:<br>
                            Tekst har et kontrastforhold på mindst 4,5:1
                        </li>
                        <li>Tekstforstørrelse:<br>
                            Teksten kan forstørres op til 200% uden tab af indhold eller
                            funktionalitet
                        </li>
                        <li>Orientering:<br>
                            Indholdet er ikke begrænset til en bestemt visningsretning
                        </li>
                        <li>Ikke-tekstkontrast:<br>
                            Visuelle komponenter har et kontrastforhold på mindst 3:1
                        </li>
                        <li>Tekst afstand:<br>
                            Ingen tab af indhold eller funktionalitet ved ændring af tekstafstand
                        </li>
                        <li>Flere måder:<br>
                            Der er mere end en måde at finde en side på et websted
                        </li>
                        <li>Synlig fokus:<br>
                            Tastaturfokus er synligt for alle komponenter
                        </li>
                    </ul>
                </article>


        </div>

        <!-- Højre -->
        <div class="col-lg-4">

            <aside>
                <figure class="my-5">
                    <img src="img/EAA.png" class="figure-img img-fluid rounded" style="border-radius: 1rem"
                         alt="Deokrativt billede">
                    <figcaption class="figure-caption"></figcaption>
                </figure>
            </aside>

            <aside>
                <figure class="POUR my-5">
                    <img src="img/EAA11.png" class="figure-img img-fluid rounded" style="border-radius: 1rem"
                         alt="Illustration af POUR-principperne på dansk">
                    <figcaption class="figure-caption"></figcaption>
                </figure>
            </aside>

            <aside>
                <figure class="Cirkel2 my-5">
                    <img src="img/cirkler2.png" class="figure-img img-fluid rounded" style="border-radius: 20px"
                         alt="Eksempel på farvekontraster">
                    <figcaption class="figure-caption">Cirkel 1: Lever op til AA succeskriterierne
                        for god kontrast mellem brødtekst og baggrund.<br>Cirkel 2: Lever ikke op til kriterierierne.</figcaption>
                </figure>
            </aside>
        </div>
    </div>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
