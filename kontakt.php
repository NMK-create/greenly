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

    <title>Kontakt os - Greenly</title>

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
    <h1>Fortæl os om din virksomhed</h1>
    <p>Udfyld formularen nedenfor, så vender vi tilbage hurtigst muligt, dog indenfor 24 timer.</p>
</header>

<main id="main" tabindex="-1" class="container">

    <div class="row g-5">
        <!-- Venstre -->
        <div class="col-lg-8">
            <section aria-labelledby="kontakt-formular" class="contact-section">
                <h2 id="kontakt-formular" class="visually-hidden">Kontaktformular</h2>

                <form class="row g-4" action="#" method="post" novalidate>

                    <div class="col-md-6">
                        <label for="name" class="form-label">Navn *</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                               class="form-control" placeholder="Dit fulde navn">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail *</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="form-control" placeholder="din@email.dk">
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Telefon</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel"
                               class="form-control" placeholder="+45 52 52 44 35">
                    </div>

                    <div class="col-md-6">
                        <label for="company" class="form-label">Virksomhed</label>
                        <input id="company" name="company" type="text" autocomplete="organization"
                               class="form-control" placeholder="Dit firmanavn">
                    </div>

                    <fieldset class="col-12 mt-3">
                        <legend class="form-label">Hvad ønsker du hjælp til?</legend>

                        <div class="form-check">
                            <input type="checkbox" id="accessibility" name="services[]" value="accessibility"
                                   class="form-check-input">
                            <label for="accessibility" class="form-check-label">Tilgængelighedsoptimering</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="climate" name="services[]" value="climate"
                                   class="form-check-input">
                            <label for="climate" class="form-check-label">Digital klimakommunikation</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="some" name="services[]" value="some"
                                   class="form-check-input">
                            <label for="some" class="form-check-label">SoMe & Videoproduktion</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="support" name="services[]" value="support"
                                   class="form-check-input">
                            <label for="support" class="form-check-label">Support & vedligeholdelse</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="other" name="services[]" value="other"
                                   class="form-check-input">
                            <label for="other" class="form-check-label">Andet</label>
                        </div>
                    </fieldset>

                    <div class="col-12">
                        <label for="message" class="form-label">Beskriv projekt</label>
                        <textarea id="message" name="message" rows="7"
                                  class="form-control"
                                  placeholder="Fortæl om dit projekt, mål og eventuelle specifikke behov.."></textarea>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-BNCsec text-light" type="submit">
                            Send forespørgsel
                        </button>
                    </div>

                </form>
            </section>
        </div>

        <!-- Højre -->
        <div class="col-lg-4">
            <aside class="contact-info mb-5" aria-labelledby="contact-info-title">
                <h2 id="contact-info-title" class="visually-hidden">Kontaktinformation</h2>

                <ul class="list-unstyled">
                    <li class="mt-4"><strong><i class="fa-solid fa-envelope me-3" aria-hidden="true"></i>Email</strong><br>info@greenly.dk</li>
                    <li class="mt-4"><strong><i class="fa-solid fa-phone me-3" aria-hidden="true"></i>Telefon</strong><br> +45 52 52 44 35<br>Man–Fre 08:00 – 18:00</li>
                    <li class="mt-4"><strong><i class="fa-solid fa-location-dot me-3" aria-hidden="true"></i>Adresse</strong><br>Kommunikationsvej 123<br>4200 Slagelse</li>
                </ul>
            </aside>

            <aside class="process-box" aria-labelledby="process-title">
                <h2 id="process-title">Hvordan foregår processen?</h2>
                <ul class="list-unstyled">
                    <li class="mt-3"><i class="fa-solid fa-1 me-3" aria-hidden="true"></i>Vi gennemgår din forespørgsel</li>
                    <li class="mt-3"><i class="fa-solid fa-2 me-3" aria-hidden="true"></i>Vi kontakter dig<br>- Med eventuelt opfølgende spørgsmål</li>
                    <li class="mt-3"><i class="fa-solid fa-3 me-3" aria-hidden="true"></i>Du modtager et tilbud<br>- Pris, leveringstid og detaljer</li>
                </ul>
            </aside>
        </div>

    </div>
</main>

<!-- FAQ Accordion -->
<section class="faq-section container-md" id="faq" aria-labelledby="faq-title">
    <h2 class="text-center mb-4" id="faq-title"><strong>Ofte stillede spørgsmål</strong></h2>

    <div class="accordion" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    Hvad er webtilgængelighed?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="heading1"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Webtilgængelighed handler om at sikre, at alle – også personer med handicap – kan bruge og forstå
                    dine digitale løsninger uden barrierer.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    Hvad er WCAG, og hvilken version skal jeg opfylde?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="heading2"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    WCAG er de internationale retningslinjer for tilgængelighed. Offentlige hjemmesider skal som minimum
                    leve op til WCAG 2.1 AA.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    Hvad koster det at gøre min hjemmeside tilgængelig?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="heading3"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Prisen afhænger af projektets omfang. Typisk varierer det efter design, funktionalitet og tekniske
                    krav.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    Er min hjemmeside lovpligtig tilgængelig?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="heading4"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Alle offentlige websites og visse private tjenester med samfundskritiske funktioner er underlagt
                    lovgivningen.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                    Hvordan tester I tilgængelighed?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="heading5"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Vi kombinerer automatiske scanninger, manuelle vurderinger og screen reader-tests for at sikre et
                    præcist resultat.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                    Hvad er de mest almindelige tilgængelighedsproblemer?
                </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="heading6"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Manglende alternative tekster, lav kontrast, utilgængelige formularer og tastaturnavigation er
                    blandt de mest hyppige fejl.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                    Kan I hjælpe os med en tilgængelighedserklæring?
                </button>
            </h2>
            <div id="faq7" class="accordion-collapse collapse" aria-labelledby="heading7"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ja, vi kan både udarbejde og opdatere tilgængelighedserklæringer i henhold til lovkravene.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                    Hvad betyder klimakommunikation?
                </button>
            </h2>
            <div id="faq8" class="accordion-collapse collapse" aria-labelledby="heading8"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Klimakommunikation handler om at formidle klimaindsatser klart, troværdigt og målrettet til
                    relevante målgrupper.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                    Hvorfor er klimakommunikation vigtigt for virksomheder?
                </button>
            </h2>
            <div id="faq9" class="accordion-collapse collapse" aria-labelledby="heading9"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Det styrker brandet, øger gennemsigtigheden og hjælper kunder og samarbejdspartnere med at forstå
                    virksomhedens indsats.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                    Hvordan kan I hjælpe med klimakommunikation?
                </button>
            </h2>
            <div id="faq10" class="accordion-collapse collapse" aria-labelledby="heading10"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Vi tilbyder rådgivning, indholdsproduktion, strategisk planlægning og implementering af
                    klimakommunikation.
                </div>
            </div>
        </div>

    </div>
</section>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>