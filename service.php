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
    <header class="container my-5">
        <h1>Services</h1>
        <p>
            Greenly er et digitalt bureau, der stræber efter at forbedre weboplevelser for både privatkunder
            og virksomheder, som gerne vil følge med tiden og sørger for at der bliver designet og redesignet
            hjemmesider,
            som I stolt kan vise frem og kommunikere de værdipunkter, som I står inde for.
        </p>
        <div>
           <button type="button" class="btn btn-BNCacc">
               <i class="fa-solid fa-wheelchair"></i> Webtilgængelighed
           </button>
           <button type="button" class="btn btn-BNCacc">
               <i class="fa-solid fa-leaf"></i> Bæredygtig kommunikation
           </button>
           <button type="button" class="btn btn-BNCacc">
               <i class="fa-solid fa-user-tie"></i> Rådgivning
           </button>
        </div>
    </header>

    <!--hvorfor sektion-->
    <section class="container">

    </section>

    <article>
        <!--de tre sektioner med de forskellige services-->
        <div>

        </div>

        <!--Kundeudtalelser-->
        <div>

        </div>
    </article>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>