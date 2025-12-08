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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/c32d07d51f.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include("includes/navbar.php") ?>

<main tabindex="-1">
    <br>
    <br>
    <h1>EAA-Den Europæiske tilgængelighedlov</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <section></section>
                <h2>Hvad er EAA</h2>
                <p>
                    Den nye tilgængelighedslov har til formål at sikre at alt digitalt indhold
                    samt elektroniske tjenester gøres tilgængelige for alle borgere i EU.
                    Det skal altså være lettere for mennesker med funktionsnedsættelser at begå sig online,
                    både hvad angår det at handle på diverse hjemmesider
                    men i ligeså høj grad også tilgåelsen af digitale tjenester.
                    Lovgivningen som trådte i kraft 28 juni 2025 og forventes at gavne
                    en betydelig del af befolkningen som i dag har svært ved bruge digitale løsninger

                </p>
                </section>
                <br>
                <br>
                <section>
                    <h2>Hvem omfatter loven</h2>
                    <p>
                        Tilgængelighedsloven gælder for en lang række digitale produkter samt tjenesteydelser,
                        dette gælder især dem der retter sig mod forbruger.
                        Dette indebær både private virksomheder og offentlige udbydere
                        hvis de tilbyder følgende typer produkter og eller tjenester:
                    </p>
                </section>
                <br>
                <section></section>
                <ul class="list-group">
                    <li>E-handel og websides - webshops og online tjenester </li>
                    <li>Transport og billetkøb - rejsebooking, tog/fly billetter </li>
                    <li>Selvbetjeningsautomater - informationsskærme, hæveautomater </li>
                    <li>Bank, betaling og forsikring - netbank, mobilbank</li>
                    <li>E-bøger og medie indhold - digitale bøger, e-læse-enheder mm.</li>
                    <li>Computere, smartphones og OS - forbruger-computerudstyr </li>
                </ul>
                <br>
                <p>
                    Derudover opfatter loven også et mindre antal fysiske produkter
                    med en digital grænseflade, dette indebær f.eks. Smart tv eller kortterminaler
                </p>
                </section>
                <br>
                <br>
                <section>

                    <h2>Retningslinjer - WCAG 2.1</h2>
                    <p>
                        Når det kommer til at opfylde tilgængelighedskravene handler det om
                        at følge WCAG 2.1 standarden. WCAG er internationale retningslinjer for
                        hvordan man gør webindhold samt apps tilgængelige for personer med forskellige
                        typer af udfordringer og funktionsnedsættelser. WCAG bygger på fire grundprincipper,
                        Indholdet skal være:
                    </p>
                    <ol class="list-group">
                        <li>Opfatteligt</li>
                        <li>Anvendeligt</li>
                        <li>Forståligt</li>
                        <li> Robust</li>
                    </ol>
                    <br>
                    <p>
                        Disse principper vurderes dernæst efter succeskriterier,
                        som er inddelt i tre niveauer A, AA og AAA.
                        Niveau A, er det mest basale niveau af tilgængelighedskravene,
                        AA omfatter alle A-krav + yderligere kriterier,
                        som tilsammen anses for at give en høj grad af tilgængelighed,
                        mens AAA er det højeste niveau med de mest ambitiøse krav,
                        dette niveau inkludere alle A + AA krav samt yderligere avanceret tilgængelighedskriterier.
                    </p>
                    <br>
                    <p>
                        I praksis er niveau AA det typiske mål i lovgivningen samt den offentlige standard,
                        da AA niveauet balancere omfattende tilgængelighed men med en realistisk tilgang til
                        at virksomheder kan implementere kravene.
                    </p>
                </section>
                <br>
                <br>
                <section>
                    <h2>Eksempler på niveau AA succeskriterier</h2>
                    <ul class="list-group">
                        <li>Undertekster - tilføj undertekster på live lydindhold </li>
                        <li>Kontrast - tekst hat et kontrastforhold på mindst 4,5:1 </li>
                        <li>Tekstforstørrelse - teksten kan forstørres op til 200% uden tab af indhold eller funktionalitet </li>
                        <li>Orientering - indholdet er ikke begrænset til en bestemt visningsretning </li>
                        <li>Ikke-tekstkontrast - visuelle komponenter har et kontrastforhold på mindst 3:1</li>
                        <li>Tekst afstand - ingen tab af indhold eller funktionalitet ved ændring af tekstafstand </li>
                        <li>Flere måder - der er mere end en måde at finde en side på et websted </li>
                        <li>Synlig fokus - tastaturfokus er synligt for alle komponenter </li>
                    </ul>
                </section>

                <br>
                <br>


            </div>
            <div class="col">
                <br>
                <br>
                <br>
                <section>
                    <figure class="figure">
                        <img src="img/EAA.png" class="figure-img img-fluid rounded" style="border-radius: 20px" alt="Billede">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br> <br><br>
                </section>

                <section>
                    <figure class="figure" >
                        <img src="img/EAA11.png" class="figure-img img-fluid rounded" style="border-radius: 20px" alt="Billede">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
                    <br><br><br><br>
                    <br><br><br>
                    <br><br> <br> <br>
                    <br> <br>
                </section>

                <section>
                    <figure class="figure">
                        <img src="img/EAA6.png" class="figure-img img-fluid rounded" style="border-radius: 20px" alt="Billede">
                        <figcaption class="figure-caption" >Cirkel 1 lever op til AA succeskriterierne
                            for en god kontrast mellem brødtekst og baggrund, det gør cirkel 2 ikke</figcaption>
                    </figure>
                </section>
                <br>
            </div>
        </div>
    </div>

</main>
<br>
<br>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
