<section class="hero">

    <div class="hero-overlay"></div>

    <div class="container-fluid hero-header">
        <div class="row align-items-center">

            <div class="col-3">
                <img src="./images/Logos_Anolix/Logo_Blanc_Rouge 2.svg" alt="Anolix" class="logo">
            </div>

            <div class="col-6 d-flex justify-content-center">
                <nav class="custom-navbar navbar navbar-expand-md">
                    <button class="navbar-toggler menu-mobile-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#menuAccueil" aria-controls="menuAccueil" aria-expanded="false"
                        aria-label="Ouvrir le menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menuAccueil">
                        <ul class="navbar-nav">
                            <li><a href="index.php?uc=presentation">L’entreprise</a></li>
                            <li><a href="#">Savoir-faire</a></li>
                            <li><a href="#">Solutions techniques</a></li>
                            <li><a href="#">Domaines métiers</a></li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-3 d-flex justify-content-center">
                <a href="#" class="lang-link">UK</a>
            </div>

        </div>
    </div>

    <div class="container hero-content">
        <img src="./images/img_Home-page.png" alt="image Home Anolix">
    </div>
</section>

<section class="main fade-section">
    <div class="container main-title text-center">
        <h1><strong>Ce que vous ne verrez jamais <br>
                fait toute la <span>différence</span></strong></h1>

        <p>Chez Anolix, nous concevons et proposons des solutions adhésives techniques invisibles mais indispensables.
            <br>
            Discrètes mais essentielles, elles renforcent la compétitivité des entreprises industrielles grâce à plus de
            <br>
            robustesse, de fiabilité et de gain de temps dans les process. <br>
            <strong>Notre raison d’être : participer à l’évolution technologique, maintenir et développer la
                compétitivité de <br>
                l’industrie en France, et accompagner nos clients dans leurs défis de demain</strong>
        </p>
    </div>
</section>

<section class="stats-section fade-section">
    <div class="stat-box">
        <div class="stat-line"></div>
        <p>37</p>
        <span>collaborateurs</span>
    </div>

    <div class="stat-box">
        <div class="stat-line"></div>
        <p><small>+de</small> 50</p>
        <span>ans d'expérience</span>
    </div>

    <div class="stat-box">
        <div class="stat-line"></div>
        <p>11 millions</p>
        <span>m² traités</span>
    </div>

    <div class="stat-box">
        <div class="stat-line"></div>
        <p>4</p>
        <span>sites</span>
    </div>
</section>

<section class="actualites-section fade-section text-center">
    <div class="container actualites-title">
        <h2><strong> Actualités </strong></h2>
        <span>Découvrez les dernières actualités d’Anolix</span>
    </div>

    <?php
    $fichierActus = __DIR__ . '/../Json_actu/Actualites.Json';
    $actus = [];

    if (file_exists($fichierActus)) {
        $actus = json_decode(file_get_contents($fichierActus), true);

        if (!is_array($actus)) {
            $actus = [];
        }
    }
    ?>

    <div class="carousel-wrapper">
        <div class="carousel-track">

            <?php for ($i = 0; $i < 2; $i++): ?>
                <?php foreach ($actus as $actu): ?>
                    <article class="carousel-card">
                        <img src="<?= htmlspecialchars($actu['image']) ?>" alt="<?= htmlspecialchars($actu['titre']) ?>">

                        <div class="carousel-card-content">
                            <p><?= htmlspecialchars($actu['description']) ?></p>
                            <h3><?= htmlspecialchars($actu['titre']) ?></h3>

                            <a href="<?= htmlspecialchars($actu['lien']) ?>">
                                Voir les détails →
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endfor; ?>

        </div>
    </div>

    <a href="#" class="btn-actu">Toutes les actualités</a>
</section>

<section class="certif-section fade-section text-center">
    <div class="container certif-title">
        <h4>Anolix est transformateur agréé et certifié par les principaux fabricants reconnus dans le monde entier</h4>
        <div class="certif-img row">
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_3M.svg" alt="Certifications">
            </div>
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_tesa.svg" alt="Certifications">
            </div>
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_Nitto.svg" alt="Certifications">
            </div>
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_Saint_Gobain.svg" alt="Certifications">
            </div>
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_Aderis.png" alt="Certifications">
            </div>
            <div class="col-md-2 col-lg-2">
                <img src="./images/logos_partenaires/logo_Kligspor.svg" alt="Certifications">
            </div>
        </div>
    </div>
</section>

<section class="slogan-section">
    <div class="slogan-text fade-section text-center">
        <h1> <strong> Anolix </strong>, <br>
            <span>Vous allez adhérer !</span>
        </h1>
    </div>
</section>


<script>
    const sections = document.querySelectorAll('.fade-section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }

        });
    }, {
        threshold: 0.15
    });

    sections.forEach(section => {
        observer.observe(section);
    });
</script>