<nav class="navbar navbar-expand-lg d-flex justify-content-center py-3" role="navigation"
     aria-label="Hovednavigation">
    <div class="container-fluid">


        <a class="navbar-brand" href="/index.php" aria-label="Til forsiden">
            <img src="/img/websitelogo.png" alt="Logo som fører til forside" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                aria-expanded="false" aria-label="Åbn navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-3" href="/service.php">Service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="/om-os.php">Om os</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="/kontakt.php">Kontakt</a>
                </li>
            </ul>

            <a class="btn btn-BNCsec px-3 ms-3" href="/kontakt.php">Få tilbud</a>

            <button id="theme-toggle" class="btn btn-BNCsec px-3 ms-3" aria-label="Skift til mørk tilstand"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Skift tema">
                <i id="theme-icon" class="fa-sharp fa-solid fa-moon"></i>
            </button>
        </div>
    </div>
</nav>


<script>
    // Load stored theme
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
    }


    // Elements
    const toggleBtn = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');


    function applyTheme() {
        const isDark = document.body.classList.contains('dark-mode');
        icon.className = isDark
            ? 'fa-sharp fa-solid fa-sun'
            : 'fa-sharp fa-solid fa-moon';
        toggleBtn.setAttribute('aria-label', isDark ? 'Skift til lys tilstand' : 'Skift til mørk tilstand');
    }


    applyTheme();


    toggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        const isDark = document.body.classList.contains('dark-mode');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        applyTheme();
    });


    // Bootstrap tooltip activation
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>