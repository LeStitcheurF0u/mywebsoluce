<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Boite à outils</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="shortcut icon" href="assets/img/Logo-Blue.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php" class='desk'>
                <img src="assets/img/MyWebSoluce-Logo-Ligne-Blue.png" alt="Logo MyWebSoluce">
            </a>
            <a href="index.php" class='mobile'>
                <img src="assets/img/MyWebSoluce-Logo-White.png" alt="Logo MyWebSoluce">
            </a>
        </div>
        <nav id="menu">
            <ul class="menu__desktop">
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="about.php">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="prestations.php">Prestations</a>
                </li>
                <li>
                    <a href="outils.php" class='active'>Boîte à outils</a>
                </li>
                <li>
                    <a href="real.php">Réalisations</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="menu__mobile">
                <span class="menu__mobile__trigger">
                    <svg viewBox="0 0 175 80" width="40" height="40">
                        <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                        <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                        <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    </svg>
                    <span>MENU</span>
                </span>
                <ul class="menu__mobile__list">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="about.php">Qui suis-je ?</a>
                    </li>
                    <li>
                        <a href="prestations.php">Prestations</a>
                    </li>
                    <li>
                        <a href="outils.php" class="active">Boîte à outils</a>
                    </li>
                    <li>
                        <a href="real.php">Réalisations</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <?php
        include 'import/social.html';
        ?>
        <section class="card">
            <p>
                <span>
                    <a href="https://geneqrtor.mywebsoluce.fr">
                        <img src="assets/img/pointer.png" alt="Accéder au générateur de QR-Code">
                        <span>Accéder</span>
                    </a>
                    <a href="#">
                        <img src="assets/img/about.png" alt="En savoir plus">
                        <span>En savoir plus</span>
                    </a>
                </span>
            </p>
            <p><span>
                    <a href="https://mentions.mywebsoluce.fr">
                        <img src="assets/img/pointer.png" alt="Accéder au générateur de mentions légales">
                        <span>Accéder</span>
                    </a>
                    <a href="#">
                        <img src="assets/img/about.png" alt="En savoir plus">
                        <span>En savoir plus</span>
                    </a>
                </span></p>
            <p><span>A venir</span></p>
        </section>
    </main>
    <footer>

    </footer>

    <script>
        let nav = document.querySelector('nav');
        let trigger = document.querySelector('.menu__mobile__trigger');

        trigger.addEventListener('click', function() {
            nav.classList.toggle('open');
        });
    </script>
</body>

</html>