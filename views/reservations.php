    <link rel="stylesheet" href="public/css/reservations.css">
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
    <h2>Vos réservations</h2>
    <section id="VosReservations">
        <h3>Vos réservations</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom Salle</th>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lesReserv as $uneReserv) { ?>
                    <tr>
                        <th scope="row"><?php echo $uneReserv["id"]; ?></th>
                        <td><?php echo $uneReserv["nomEspace"]; ?></td>
                        <td><?php echo $uneReserv["dateDebReser"]; ?></td>
                        <td><?php echo $uneReserv["dateFinReser"]; ?></td>
                        <td><a href="index.php?action=reservation&id=<?php echo $uneReserv["id"]; ?>"><img src="public/img/poubelle.png" alt=""></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <p>Pour réserver une autre salle, cliquez <a href="index.php?action=reserver" class="sectionA">ici</a></p>
    </section>

    <section id="enAttente">
        <h3>Vos réservations en attente</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom Salle</th>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </section>
