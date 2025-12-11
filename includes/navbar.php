<nav class="navbar navbar-expand-lg py-3" role="navigation" aria-label="Hovednavigation">
    <div class="container-fluid">

        <a class="navbar-brand" href="/index.php" aria-label="Til forsiden">
            <img src="/img/greenlyhvid.png" alt="Logo som fører til forside"
                 class="d-inline-block align-text-top navbar-logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                aria-expanded="false" aria-label="Åbn navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link px-3" href="/service.php">Service</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/om-os.php">Om os</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="/kontakt.php">Kontakt</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                <a class="btn btn-BNCsec px-3 navbar-cta" href="/kontakt.php">Få tilbud</a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Bootstrap tooltip activation
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>