<?php
include 'php.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Car Dashboard</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="dashboard">
      <?php  include('../layout/_HEAD.php') ?>

        <!-- Main Content -->
        <main>
            <header class="header">
                <div>27/12/2020 01:37:05</div>
                <button class="logout-btn">Logout</button>
            </header>

            <!-- Statistics -->
            <section class="statistics">
                <div class="stat-card revenue">
                    <p>CHIFFRE D'AFFAIRES</p>
                    <h2>301100 DH</h2>
                </div>
                <div class="stat-card cars">
                    <p>VOITURES</p>
                    <h2>23</h2>
                </div>
                <div class="stat-card clients">
                    <p>CLIENTS</p>
                    <h2>17</h2>
                </div>
            </section>

            <!-- Tables -->
            <section class="tables">
                <div class="table">
                    <h3>Voitures Actuellement Réservées</h3>
                    <table>
                        <tr>
                            <th>Numéro</th>
                            <th>Jours</th>
                            <th>Date de Début</th>
                            <th>Date de Fin</th>
                            <th>Client</th>
                        </tr>
                        <tr>
                            <td>1-A-36543</td>
                            <td>5</td>
                            <td>11/12/2020</td>
                            <td>28/12/2020</td>
                            <td>Nour Salma</td>
                        </tr>
                        <tr>
                            <td>1-A-69854</td>
                            <td>15</td>
                            <td>25/12/2020</td>
                            <td>27/12/2020</td>
                            <td>Ouadi Sabai</td>
                        </tr>
                    </table>
                </div>
                <div class="table">
                    <h3>5 Meilleurs Clients</h3>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Montant</th>
                        </tr>
                        <tr>
                            <td>Sara Tourabi</td>
                            <td>35,100 DH</td>
                        </tr>
                        <tr>
                            <td>Amal Fillali</td>
                            <td>29,300 DH</td>
                        </tr>
                        <tr>
                            <td>Khalid Tabali</td>
                            <td>25,200 DH</td>
                        </tr>
                        <tr>
                            <td>Fatiha Anouar</td>
                            <td>24,500 DH</td>
                        </tr>
                        <tr>
                            <td>Ali Fahd</td>
                            <td>20,800 DH</td>
                        </tr>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>