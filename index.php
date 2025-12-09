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
    
    <title>Sigende titel</title>
    
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

<h1>TEST 🥳</h1>





















<section>
<div>
<h3 class="text-center">Få tips, guides og ny viden om digial udvikling</h3>
    <p class="text-center">Tilmeld dig, og få nyttig viden om digital udvikling,
    trends, cases og konkrete værktøjer, du kan bruge i dit arbejde</p>
<form class="row g-3 ">
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
    </div>
    <div class="col-auto text-center">
        <label for="inputPassword2" class="visually-hidden">Email</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Din Email">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-BNCsec mb-3 text-BNCbg">Tilmeld</button>
    </div>
</form>
</div>
</section>

<?php include("includes/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
