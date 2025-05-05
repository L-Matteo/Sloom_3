    <link rel="stylesheet" href="public/css/connexion.css">
</head>

<body>
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
    <h2>Connexion</h2>
    <form action="" method="POST">
        <label for="mail">Identifiant</label> <br>
        <input type="email" id="mail" name="mailConnexion" required> <br>
        <label for="password" id="secondLabel">Mot de passe</label> <br>
        <input type="password" id="password" name="passwordConnexion" required> <br>
        <p>Vous n'avez pas de compte ? <a href="index.php?action=createAccount" id="createAccount">Créer un compte</a></p>
        <input type="submit" value="Se connecter" class="btn btn-primary">
    </form>