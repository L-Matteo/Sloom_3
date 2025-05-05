    <link rel="stylesheet" href="public/css/monCompte.css">
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
    <h2>Votre compte</h2>
    <form action="" method="POST"> <!-- TODO : faire un sorte que cela s'actualise après avoir modifier les infos !--> 
        <label for="lastName">Nom</label> 
        <label for="firstName" id="labelFirstName">Prenom</label> <br>
        <input type="text" id="lastName" name="lastNameCompte" value="<?php echo $_SESSION["nom_user"]; ?>">
        <input type="text" id="firstName" name="firstNameCompte" value="<?php echo $_SESSION["prenom_user"]; ?>"> <br>
        <label for="raisonSocial">Raison Social</label> 
        <label for="tel" id="labelTel">Téléphone</label> <br>
        <input type="text" id="raisonSocial" name="rsCompte" value="<?php echo $_SESSION["rs"]; ?>">
        <input type="text" id="tel" name="telCompte" value="<?php echo $_SESSION["tel_user"]; ?>"> <br>
        <label for="mail" id="labelMail">Adresse Email</label> <br>
        <input type="email" id="mail" name="mailCompte" value="<?php echo $_SESSION["mail_user"]; ?>"> <br>
        <label for="password">Mot de passe</label> <br>
        <input type="password" id="password" name="passwordCompte" disabled> <br> <!-- TODO : afficher le mdp !-->
        <input type="submit" value="Modifier" class="btn btn-primary" name="modif"> 
    </form>
    <form action="" method="POST">
        <input type="submit" name="deco" id="deco" value="Se déconnecter" class="btn btn-danger">
    </form>