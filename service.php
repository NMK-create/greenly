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

<main tabindex="-1">
    <!--hero H1 med tekst vedr service-->
    <section class="container my-5">
        <h1>Services</h1>
        <p>
            Greenly er et digitalt bureau, der stræber efter at forbedre weboplevelser for både privatkunder
            og virksomheder, som gerne vil følge med tiden og sørger for at der bliver designet og redesignet
            hjemmesider,
            som I stolt kan vise frem og kommunikere de værdipunkter, som I står inde for.
        </p>
        <section class="btn-group" role="group" aria-label="Basic example">
            <div class="row gx-5">
                <button type="button" class="btn btn-BNCsec">
                    <i class="fa-solid fa-wheelchair" aria-hidden="true"></i>
                </button>
                <p>Webtilgængelighed</p>
            </div>
            <div class="row gx-5">
                <button type="button" class="btn btn-BNCsec">
                    <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                </button>
                <p>Bæredygtig kommunikation</p>
            </div>
            <div class="row gx-5">
                <button type="button" class="btn btn-BNCsec">
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                </button>
                <p>Rådgivning</p>
            </div>
        </section>
    </section>

    <!--hvorfor sektion-->
    <section class="container row" tabindex="-2">
        <figure class="col-md-6">
            <img src="img/hvorfor.png" class="img-fluid rounded" alt="Billede af kontor" class="img-fluid" loading="lazy">
            <figcaption class="text-muted small mt-1">
                Billede: Billede af kontor.
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
    </section>

    <article>
        <!--de tre sektioner med de forskellige services-->
        <article>

        </article>

        <!--Kundeudtalelser-->
        <aside>

        </aside>
    </article>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>