<?php
include 'php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voiture Page</title>
    <link rel="stylesheet" href="../style/voiture.css">
</head>
<body>
    <div class="container">
    <?php  include('../layout/_HEAD.php') ?>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <h1 class="header-title">Informations voiture</h1>
                <p class="header-date">Date: 27/12/2020</p>
            </header>

            <!-- Client Form -->
            <section class="client-form-section">
                <form class="client-form">
                    <div class="form-group">
                        <label for="client-name" class="form-label">Matricule</label>
                        <input type="text" id="client-name" class="form-input" placeholder="Nom du client">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Modèle</label>
                        <input type="text" id="phone" class="form-input" placeholder="0612345678">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Marque</label>
                        <input type="email" id="email" class="form-input" placeholder="exemple@email.com">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">État</label>
                        <input type="email" id="email" class="form-input" placeholder="exemple@email.com">
                    </div>
                    <button type="submit" class="btn btn-save">Enregistrer</button>
                    <button type="button" class="btn btn-delete">Supprimer</button>
                </form>
            </section>

            <section class="clients-table-section">
                <h2 class="table-title">Liste des Clients</h2>
                <table class="clients-table">
                    <thead class="table-head">
                        <tr class="table-row">
                            <th class="table-header">Matricule</th>
                            <th class="table-header">Modèle</th>
                            <th class="table-header">Marque</th>
                            <th class="table-header">État</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr class="table-row">
                            <td class="table-data">1-A-45810</td>
                            <td class="table-data">Q8</td>
                            <td class="table-data">Audi</td>
                            <td class="table-data">neuf</td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data">1-A-45810</td>
                            <td class="table-data">PHANTOM</td>
                            <td class="table-data">Rolls Roys</td>
                            <td class="table-data">utilusé</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>

