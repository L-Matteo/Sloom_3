    <link rel="stylesheet" href="public/css/createAccount.css">
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
    <h2>Créer un compte</h2>
    <form action="" method="POST">
        <label for="lastName">Nom*</label> 
        <label for="firstName" id="labelFirstName">Prenom*</label> <br>
        <input type="text" id="lastName" name="lastName" required>
        <input type="text" id="firstName" name="firstName" required> <br>
        <label for="raisonSocial">Raison Social*</label> 
        <label for="tel" id="labelTel">Téléphone</label> <br>
        <input type="text" id="raisonSocial" name="raisonSocial" required>
        <input type="text" id="tel" name="tel"> <br>
        <label for="mail" id="labelMail">Adresse Email*</label> <br>
        <input type="email" id="mail" name="mail" required> <br>
        <label for="password">Mot de passe*</label> <br>
        <input type="password" id="password" name="password" required> <br>
        <p>Vous avez déjà un compte ? <a href="index.php?action=compte" id="connexion">Se connecter</a></p>
        <input type="submit" value="Créer un compte" class="btn btn-primary">
    </form>