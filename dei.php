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

    <title>DEI - Diversitet, Equity & Inclusion</title>

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
    <h1><span lang="en">DEI - Diversity, Equity & Inclusion</span></h1>
    <p>Diversitet, Lighed & Inklusion</p>
</header>

<main id="main" tabindex="-1" class="container">

    <div class="row g-5">

        <!-- Venstre -->
        <div class="col-lg-8">
            <section aria-labelledby="dei-info" class="dei-info content-wrapper">
                <h2 id="dei-info" class="visually-hidden">Information om DEI</h2>

                <article class="mb-5">
                    <h3>Hvad er DEI?</h3>
                    <p>DEI handler om at skabe miljøer, hvor alle mennesker – uanset baggrund, erfaring eller
                        funktionsevne, føler sig set respekteret og har lige mulighed for at deltage og udvikle sig.
                        Det er en strategisk tilgang, hvor organisationer aktivt anerkender forskelligheder og fjerner
                        barrierer, så alle kan bidrage på lige vilkår.</p>
                </article>

                <article class="mb-5">
                    <h3>Hvad bruges DEI til?</h3>
                    <p>Det hjælper med at skabe inkluderende og retfærdige arbejdsmiljøer, der styrker innovation,
                        kreativitet og samarbejde. DEI øger trivsel, tryghed og engagement blandt medarbejdere og
                        forbedrer virksomheders omdømme og sociale ansvar.</p>
                </article>

                <article class="mb-5">
                    <h3>Hvorfor er DEI vigtigt?</h3>
                    <p>Organisationer fungerer bedre, når alle føler sig hørt og respekteret. Mangfoldige teams træffer
                        bedre beslutninger, præsterer bedre og bidrager til mere innovative løsninger. Samtidig
                        forventer kunder, samarbejdspartnere og samfundet ansvarlighed og etik, og DEI sikrer, at disse
                        forventninger imødekommes på en meningsfuld måde.</p>
                </article>

                <article class="mb-5">
                    <h3>Hvordan implementerer vi DEI i vores virksomhed og hos vores kunder?</h3>
                    <p>Vi arbejder med at integrere DEI-principper i både design, processer og kultur:</p>

                    <h4>Tilgængelige digitale løsninger:</h4>
                    <ul>
                        <li>Vi følger WCAG og EAA-standarder for at sikre, at vores websites og digitale services kan
                            bruges af alle.
                        </li>
                    </ul>

                    <h4>Inkluderende team- og organisationsdesign:</h4>
                    <ul>
                        <li>Vi sikrer diversitet, og repræsentation på tværs af teams og projekter.</li>
                    </ul>

                    <h4>Proces- og kulturvurdering:</h4>
                    <ul>
                        <li>Vi analyserer og justerer procedurer, praksisser og kultur, for at fjerne barrierer.</li>
                    </ul>
                </article>

                <article class="mb-5">
                    <h3>Hvad gør vi for at sikre inklusion?</h3>
                    <p>Vi skaber miljøer, hvor alle kan bidrage og føler sig trygge og værdsatte. Det betyder:</p>
                    <ul>
                        <li>Lytning og anerkendelse af forskellige perspektiver</li>
                        <li>Fjernelse af barrierer, der kan ekskludere nogen</li>
                        <li>Sikring af repræsentation i alle beslutningsprocesser</li>
                    </ul>
                </article>

                <article class="mb-5">
                    <h3>Hvad er målet med DEI i design?</h3>
                    <p>Målet er digitale løsninger, der er tilgængelige og brugbare for alle, uanset baggrund, erfaring
                        eller funktionsevne. Det inkluderer:</p>
                    <ul>
                        <li>Tilgængelige websites og apps i overensstemmelse med WCAG og EAA</li>
                        <li>Inkluderende sprog og kommunikation</li>
                        <li>Navigation og struktur, der fungerer for alle brugere</li>
                    </ul>
                </article>

                <article class="mb-5">
                    <h3>Hvad begrænser DEI?</h3>
                    <p>DEI kan begrænses af:</p>
                    <ul>
                        <li><strong>Bias:</strong> Bevidste og ubevidste fordomme, der påvirker beslutninger og behandling af
                            mennesker.
                        </li>
                        <li><strong>Fastlåste strukturer og vaner:</strong> Processer, der ekskluderer visse grupper.</li>
                        <li><strong>Manglende ressourcer eller ledelsesopbakning:</strong> Uden engagement fra topledelsen kan
                            indsatsen mislykkes.
                        </li>
                    </ul>
                </article>


            </section>
        </div>

        <!-- Højre -->
        <div class="col-lg-4">
            <aside class="dei-aside" aria-label="DEI illustrationer">
                <figure class="text-center mb-5">
                    <img src="img/Diversity.png" alt="Illustration af diversitet med farverige små cirkler"
                         class="img-fluid"/>
                    <figcaption class="mt-2 fw-semibold">DI • VER • SI • TY<br><small>Alle de måder, hvorpå mennesker er
                            forskellige</small></figcaption>
                </figure>

                <figure class="text-center mb-5">
                    <img src="img/Equity.png" alt="Illustration af lighed med farverige små cirkler"
                         class="img-fluid"/>
                    <figcaption class="mt-2 fw-semibold">EQ • UI • TY<br><small>Retfærdig behandling, adgang og
                            muligheder for alle<br>
                            – uden at identitet bestemmer resultatet</small></figcaption>
                </figure>

                <figure class="text-center mb-5">
                    <img src="img/Inclusion.png" alt="Illustration af inklusion med farverige små cirkler"
                         class="img-fluid"/>
                    <figcaption class="mt-2 fw-semibold">IN • CLU • SION<br><small>Forskellige mennesker har
                            indflydelse,
                            stemme og beslutningskraft</small></figcaption>
                </figure>


            </aside>
        </div>
    </div>
</main>

<!-- Den Sociale Handicapmodel -->
<section class="container" aria-labelledby="handicapmodel-title">
    <h2 id="handicapmodel-title" class="text-center">
        Vi anvender den Sociale Handicapmodel i vores arbejde
    </h2>

    <div class="row my-5">
        <div class="col-12 d-flex justify-content-center">
            <figure class="d-flex flex-column align-items-center mt-3">
                <img src="img/Handicapmodel-Sort.png"
                     alt="Illustration af den sociale handicapmodel"
                     class="img-fluid dei-light scaled-img">

                <figcaption class="visually-hidden">Diagram over den Sociale Handicapmodel</figcaption>
            </figure>
        </div>
    </div>

    <!-- Visually-hidden tekst til skærmlæsere -->
    <div class="visually-hidden" aria-label="Uddybende beskrivelse af den Sociale Handicapmodel">
        <h3>Omgivelser</h3>
        <ul>
            <li>Utilgængelig infrastruktur</li>
            <li>Mangel på tjenester</li>
            <li>Dårlig kommunikation</li>
        </ul>

        <h3>Strukturer</h3>
        <ul>
            <li>Mangel på beskæftigelsesmuligheder</li>
            <li>Ekskluderende lovgivning, regler og procedurer</li>
            <li>Mangel på uddannelsesmuligheder</li>
        </ul>

        <h3>Holdninger</h3>
        <ul>
            <li>Negative stereotyper</li>
            <li>Manglende forståelse</li>
            <li>Øget social isolation</li>
        </ul>
    </div>
</section>

<section class="container" aria-labelledby="model-info-title">
    <div class="row g-5">
        <!-- Venstre kolonne -->
        <div class="col-lg-6">
            <section aria-labelledby="model-info-left" class="model-info content-wrapper">
                <h2 id="model-info-left" class="visually-hidden">Mere information om den Sociale Handicapmodel</h2>

                <article class="mb-5">
                    <h3>Vi anvender den Sociale Handicapmodel</h3>
                    <p>
                        Hos Greenly Digital Bureau skaber vi digitale løsninger uden barrierer.
                        Den Sociale Handicapmodel er en central del af vores tilgang til tilgængelighed — fordi vi tror
                        på, at godt digitalt design skal være inkluderende og brugbart for alle.
                    </p>
                    <p>
                        Modellen hjælper os med at forstå, at handicap ikke stammer fra personen selv, men fra de
                        barrierer, som samfundet og omgivelserne skaber. Derfor fokuserer vi på at tilpasse omgivelser,
                        systemer og teknologi — frem for at tilpasse mennesket.
                    </p>
                </article>

                <article class="mb-5">
                    <h3>Hvad er modellen?</h3>
                    <p>
                        Den Sociale Handicapmodel forklarer, at handicap ikke skyldes en persons funktionsnedsættelse,
                        men de barrierer, som omgivelser, holdninger og strukturer skaber:
                    </p>

                    <h4>Omgivelser</h4>
                    <ul>
                        <li>Utilgængelig infrastruktur eller teknologi</li>
                        <li>Manglende tjenester og ressourcer</li>
                        <li>Dårlig kommunikation eller uforståelig information</li>
                    </ul>

                    <h4>Holdninger</h4>
                    <ul>
                        <li>Negative stereotyper og fordomme</li>
                        <li>Manglende forståelse for forskellige behov</li>
                        <li>Social isolation som følge af misforståelser eller udelukkelse</li>
                    </ul>

                    <h4>Strukturer</h4>
                    <ul>
                        <li>Begrænsede beskæftigelses- og uddannelsesmuligheder</li>
                        <li>Ekskluderende regler, procedurer eller lovgivning</li>
                        <li>Systemer, der ubevidst udelukker visse grupper</li>
                    </ul>

                    <p>
                        På den måde hjælper modellen os med at identificere, hvor barrierer opstår, og hvordan de kan
                        fjernes.
                    </p>
                </article>
            </section>
        </div>

        <!-- Højre kolonne -->
        <div class="col-lg-6">
            <section aria-labelledby="model-info-right" class="model-info content-wrapper">
                <h2 id="model-info-right" class="visually-hidden">Mere information om den Sociale Handicapmodel</h2>

                <article class="mb-5">
                    <h3>Hvad bruges modellen til?</h3>
                    <ul>
                        <li>Identificere og fjerne barrierer, så alle kan deltage på lige vilkår</li>
                        <li>Udvikle digitale løsninger, der fungerer for alle brugere</li>
                        <li>Hjælpe virksomheder og organisationer med at arbejde inkluderende</li>
                        <li>Skabe bedre oplevelser for brugere, kunder og medarbejdere</li>
                    </ul>
                </article>

                <article class="mb-5">
                    <h3>Hvordan bruger vi modellen hos Greenly Digital Bureau?</h3>
                    <ul>
                        <li>Tilgængelige webdesigns baseret på WCAG og EAA-krav</li>
                        <li>Brugervenlig struktur og navigation</li>
                        <li>Teknisk og visuel tilgængelighed</li>
                        <li>Inkluderende sprog og kommunikation</li>
                        <li>Test og feedback fra rigtige brugere</li>
                    </ul>
                    <p>
                        Målet er digital ligestilling — hvor alle kan deltage, bidrage og navigere uden begrænsninger.
                    </p>
                </article>
            </section>
        </div>
    </div>
</section>


<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>