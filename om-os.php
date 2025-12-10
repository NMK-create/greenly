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

    <title>Om os</title>

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
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>
<body>
<?php include("includes/navbar.php") ?>

<header class="container mt-5">
    <h1>Mød os bag Greenly</h1>
    <p>Et team drevet af bæredygtighed, innovation og menneskelig indsigt.</p>
</header>

<main id="main" tabindex="-1" class="container">
    <div class="row g-5">

        <!-- Venstre -->
        <div class="col-lg-8">
            <section class="content-wrapper">

                <article class="mb-5">
                    <h2>Hvem er vi?</h2>
                    <p>
                        Greenly er et nyopstartet digitalt bureau med fokus på
                        at skabe en mere bæredygtig og inkluderende digital fremtid.
                        Vi brænder for at hjælpe virksomheder, store som små, med
                        at omsætte deres klimaambitioner til konkrete digitale tiltag
                        og samtidig sikre, at de løsninger vi udvikler kan benyttes af alle.
                        <br><br>
                        Bag Greenly, står et team som kombinere kreativ tænkning,
                        teknisk indsigt og faglig viden. Og vi tror på, at det grønne
                        digitale tilvalg ikke behøver at være kompliceret,
                        derfor arbejder vi også tæt sammen med vores kunder for at
                        forbedre vores processer og skabe de bedst mulige løsninger.
                        Vi tager ansvar både for de mennesker der bruger vores løsninger,
                        og det aftryk vores digitale løsninger efterlader
                    </p>
                </article>

                <article class="mb-5">
                    <h2>Vores fokuspunkter:</h2>
                    <ul>
                        <li>Inklusion, funktionalitet og ansvarlighed</li>
                        <li>Klima kommunikation</li>
                        <li>Optimering og forbedring</li>
                        <li>Formidling af viden</li>
                        <li>Faglig viden</li>
                        <li>Kvalitet og professionalisme</li>
                    </ul>
                </article>


                <article class="mb-5">
                    <h2>Visioner og værdier</h2>
                    <p>
                        Hos Greenly tager vi ansvar for klima og inklusion, og arbejder målrettet efter at gøre
                        bæredygtige og
                        tilgængelige digitale løsninger til standarden, og ikke undtagelsen,
                        vi levere altid løsninger som er brugervenlige og opdateret efter de nyeste lovkrav og derfor er
                        inklusion allerede nu
                        et integreret del af alt hvad vi laver.
                        <br><br>
                        Vi ønsker at arbejde åbent og ærligt, både internt og overfor vores kunder
                        og sikrer at de bæredygtige beslutninger kan følges op og dokumenteres.
                        Men vigtigt af alt arbejder vi fra mottoet om at <br>
                        — alle skal kunne være med, både nu og i fremtiden.
                    </p>
            </section>
        </div>
        <!-- Højre -->
        <div class="col-lg-4">

            <aside>
                <figure class="mt-5">
                    <img src="img/om%20os.png" alt="Billede af en dame hjælper en anden dame"
                         class="figure-img img-fluid rounded" style="border-radius: 1rem"/>
                    <figcaption class="figure-caption"></figcaption>
                </figure>
            </aside>

            <aside>
                    <figure class="mt-5">
                        <img src="img/cirkler.png" class="figure-img img-fluid rounded" style="border-radius: 1rem"
                             alt="Dekorativt billede med cirkler">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
            </aside>
        </div>
    </div>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>