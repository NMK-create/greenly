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
        <div>
           <button type="button" class="btn btn-BNCsec">
               <i class="fa-solid fa-wheelchair" aria-hidden="true"></i> Webtilgængelighed
           </button>
           <button type="button" class="btn btn-BNCsec">
               <i class="fa-solid fa-leaf" aria-hidden="true"></i> Bæredygtig kommunikation
           </button>
           <button type="button" class="btn btn-BNCsec">
               <i class="fa-solid fa-user-tie" aria-hidden="true"></i> Rådgivning
           </button>
        </div>
    </section>

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

    <section id="contrast-report" aria-labelledby="contrast-report-form"
             class="contrast-report my-5 p-3 rounded shadow-sm">
        <h6 id="contrast-report-form">Kontrast rapport</h6>
        <table class="table table-sm">
            <tbody>
            <tr>
                <th>Element</th>
                <th>Baggrund</th>
                <th>Tekst</th>
                <th>Kontrast</th>
                <th>Resultat</th>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>Body tekst</td>
                <td class="bg-color"></td>
                <td class="text-color"></td>
                <td class="contrast"></td>
                <td class="result"></td>
            </tr>
            <tr>
                <td>Navbar link</td>
                <td class="bg-color"></td>
                <td class="text-color"></td>
                <td class="contrast"></td>
                <td class="result"></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>