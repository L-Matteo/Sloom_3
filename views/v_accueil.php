    
    <link rel="stylesheet" href="public/css/accueil.css">
</head>

<body>
    <section id="accueil">
        <nav class="row">
            <div class="col-3">
                <a href="index.php?action=accueil" id="firstA">SLOOM</a>
            </div>
            <div class="col-8">
                <a href="index.php?action=reservation" id="otherA">Réservations</a>
                <a href="index.php?action=reserver" class="a">Réserver</a>
                <a href="index.php?action=compte" class="a">Mon compte</a>
            </div>
        </nav>
        <h1>Bienvenue sur Sloom</h1>
        <p>Gérez vos réservations de salles <br>simplement et efficacement</p>
        <a href="#Salles" class="btn btn-primary" id="firstBtn">Voir les salles</a>
        <a href="index.php?action=reserver" class="btn btn-outline-primary" id="secondBtn">Réserver une salle</a>
    </section>
    <section id="about">
        <h2>Présentation rapide</h2>
        <div class="presentation">
            <div class="card">
                <h3>Large choix de salles</h3>
                <p>Des salles pour <br>tous vos besoins</p>
            </div>
            <div class="card">
                <h3>Gestion intuitive</h3>
                <p>Réservez et gérez <br>vos réservations en <br>quelques clics</p>
            </div>
            <div class="card">
                <h3>Connexion sécurisée</h3>
                <p>Accedez à votre <br>compte facilement</p>
            </div>
        </div>
    </section>
    <section id="Salles">
        <h2>Aperçu</h2>
        <div id="lesSalles">
            <div class="uneSalle">
                <img src="public/img/conference-room.jpg" alt="" id="img1">
                <h3>CollaboHub</h3>
                <p>Salle de conférence <br>50 personnes</p>
            </div>
            <div class="uneSalle">
                <img src="public/img/formation-room.jpg" alt="" id="img2">
                <h3>SkillsLab</h3>
                <p>Salle de formation <br>30 personnes</p>
            </div>
            <div class="uneSalle">
                <img src="public/img/creative-room.jpg" alt="" id="img3">
                <h3>ChillLounge</h3>
                <p>Salle de détente <br>30 personnes</p>
            </div>
        </div>
        <a href="" class="btn btn-outline-primary" id="btnSalles">Voir toutes les salles</a>
    </section>
    <footer>
        <a href="index.php?action=ml" id="footerFirstA">Mentions légales</a>
        <a href="index.php?action=contact">Contact</a>
    </footer>