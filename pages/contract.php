<?php
include 'php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Page</title>
    <link rel="stylesheet" href="../style/contract.css">
</head>
<body>
    <div class="container">
    <?php  include('../layout/_HEAD.php') ?>

      

            <!-- Client Form -->
            <!-- Main Content -->
            <main>
                <header class="header">
                    <div class="date">27/12/2020 01:37:05</div>
                </header>
                <section class="content">
                    <div class="info-group">
                        <div class="info-box">
                            <h3>Informations client</h3>
                            <label for="client">Client :</label>
                            <select id="client">
                                <option>Anouar</option>
                            </select>
                            <label for="phone">Téléphone :</label>
                            <input type="text" id="phone" value="0612589362">
                            <label for="email">Email :</label>
                            <input type="email" id="email" value="fathiaanouar@gmail.com">
                        </div>
                        <div class="info-box">
                            <h3>Informations voiture</h3>
                            <label for="car">Voiture :</label>
                            <select id="car">
                                <option>1-A-45810</option>
                            </select>
                            <label for="model">Modèle :</label>
                            <input type="text" id="model" value="Ibiza">
                            <label for="brand">Marque :</label>
                            <input type="text" id="brand" value="Seat">
                        </div>
                    </div>
                    <div class="reservation-info">
                        <h3>Informations réservation</h3>
                        <label for="code">Code :</label>
                        <input type="text" id="code" value="7">
                        <label for="start-date">Date de début :</label>
                        <input type="date" id="start-date" value="2016-06-05">
                        <label for="end-date">Date de fin :</label>
                        <input type="date" id="end-date" value="2016-06-12">
                        <button>OK</button>
                        <p>Durée : <span>37 jour(s)</span></p>
                        <p>Montant : <span>11100 DH</span></p>
                        <div class="buttons">
                            <button class="save">Enregistrer</button>
                            <button class="delete">Supprimer</button>
                        </div>
                    </div>
                    <div class="reservation-list">
                        <h3>Liste des réservations</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
             o
                    </div>
                </section>
            </main>
    </div>
</body>
</html>
