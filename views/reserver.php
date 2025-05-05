    <link rel="stylesheet" href="public/css/reserver.css">
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
    <h2>Réserver une salle</h2>
    <p>Pour réserver une salle, veuillez remplir <br>le formulaire ci-dessous :</p>
    <form action="" method="POST">
        <div>
            <label for="salle" class="form-label">Salle* : </label>
            <select name="salle" id="salle" class="form-control" required>
                <option value="— Sélectionnez une commande —">— Sélectionnez une salle —</option>
                <?php
                foreach($lesSalles as $uneSalle) { ?>
                    <option value="<?php echo $uneSalle["id"]; ?>"><?php echo $uneSalle["nomEspace"]; ?></option>
                <?php
                } ?>
            </select>
        </div>
        <div>
            <label for="debut" class="form-label">Date de début* : </label> 
            <input type="datetime-local" name="debut"  id="debut" class="form-control" required> 
        </div>
        <div>
            <label for="fin" class="form-label">Date de fin* : </label>
            <input type="datetime-local" id="fin" name="fin" class="form-control" required>
        </div>
        <input type="submit" value="Réserver" class="btn btn-primary">
    </form>