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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/c32d07d51f.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<a href="#main" class="skip-link visually-hidden-focusable">Spring til hovedindhold</a>
<body class="bg-white">
<?php include("includes/navbar.php") ?>


<main tabindex="-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <section>
                    <h2>Hvem er vi</h2>
                    <p>
                        Greenly er et nyopstartet digitalt bureau med fokus på <br>
                        at skabe en mere bæredygtig og inkluderende digital fremtid. <br>
                        Vir brænder for at hjælpe virksomheder, store som små med <br>
                        at omsætte deres klimaambitioner til konkrete digitale tiltag <br>
                        og samtidig sikre,at de løsninger vi udvikler kan benyttes af alle. <br>
                        <br>
                        Bag Greenly, står et team som kombinere kreativ tænkning,<br>
                        teknisk indsigt og faglig viden. Og vi tror på, at det grønne <br>
                        digitale tilvalg ikke behøver at være kompliceret,<br>
                        derfor arbejder vi også tæt sammen med vores kunder for at <br>
                        forbedre vores processer og skabe de bedst mulige løsninger. <br>
                        Vi tager ansvar både for de mennesker der bruger vores løsninger <br>
                        og det aftryk vores digitale løsninger efterlader
                    </p>
                </section>
                <br>
                <br>
                <section>
                    <h2>Vores fokuspunkter</h2>
                    <ul class="list-group">
                        <li>Inklusion, funktionalitet og ansvarlighed</li>
                        <li>Klima kommunikation</li>
                        <li>Optimering og forbedring</li>
                        <li>Formidling at viden</li>
                        <li>Faglig viden</li>
                        <li>Kvalitet og professionalisme</li>
                    </ul>
                </section>
                <br>
                <br>
                <section>

                    <h2>Visioner og værdier</h2>
                    <p>
                        Hos Greenly tager vi ansvar for klima og inklusion, <br>
                        og arbejder målrettet efter at gøre bæredygtige og <br>
                        tilgængelige digitale løsninger til standarden, og ikke undtagelsen, <br>
                        vi levere altid løsninger som er brugervenlige og opdateret <br>
                        efter de nyeste lovkrav og derfor er inklusion allerede nu <br>
                        en integreret del af alt hvad vi laver. <br>
                        <br>
                        Vi ønsker at arbejde åbent og ærligt, både internt og overfor vores kunder
                        og sikrer at de bæredygtige beslutninger kan følges op og dokumenteres.
                        Men vigtigt at alt arbejder vi fra mottoet om at <br>
                        alle skal kunne være med, både nu og i fremtiden!
                    </p>
                </section>


            </div>
            <div class="col">
                <section>
                    <figure class="figure">
                        <img src="img/om%20os.png" class="figure-img img-fluid rounded" style="border-radius: 20px" alt="Billede">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
                </section>

                <br>
                <br>

                <section>
                    <figure class="figure">
                        <img src="img/cirkler.png" class="figure-img img-fluid rounded" style="border-radius: 20px" alt="Billede">
                        <figcaption class="figure-caption"></figcaption>
                    </figure>
                </section>


            </div>
        </div>
    </div>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
