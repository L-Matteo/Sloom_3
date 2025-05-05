    <link rel="stylesheet" href="public/css/contact.css">
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
    <h2>Contactez - nous !</h2>
    <form action="" method="POST">
        <label for="lastNameContact">Nom*</label> 
        <label for="firstNameContact" id="labelFirstName">Prenom</label> <br>
        <input type="text" name="lastNameContact" id="lastNameContact" required>
        <input type="text" name="firstNameContact" id="firstNameContact"> <br>
        <label for="mailContact">Email*</label> <br>
        <input type="email" id="mailContact" name="mailContact" required> <br>
        <label for="message">Message*</label> <br>
        <textarea name="message" id="message"></textarea> <br> 
        <input type="submit" class="btn btn-primary">
    </form>