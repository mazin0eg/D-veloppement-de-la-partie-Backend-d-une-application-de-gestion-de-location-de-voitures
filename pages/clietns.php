<?php
include 'php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Page</title>
    <link rel="stylesheet" href="../style/clients.css">
</head>
<body>
    <div class="container">
    <?php  include('../layout/_HEAD.php') ?>

      

            <!-- Client Form -->
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
                        <label for="client-name" class="form-label">name</label>
                        <input type="text" id="client-name" class="form-input" placeholder="Nom du client">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" id="phone" class="form-input" placeholder="0612345678">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">email</label>
                        <input type="email" id="email" class="form-input" placeholder="exemple@email.com">
                    </div>
                    
                    <button type="submit" class="btn btn-save">Enregistrer</button>
                    <button type="button" class="btn btn-delete">Supprimer</button>
                </form>
            </section>

            <!-- Clients Table -->
            <section class="clients-table-section">
                <h2 class="table-title">Liste des Clients</h2>
                <table class="clients-table">
                    <thead class="table-head">
                        <tr class="table-row">
                            <th class="table-header">ID</th>
                            <th class="table-header">Nom</th>
                            <th class="table-header">Téléphone</th>
                            <th class="table-header">Email</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr class="table-row">
                            <td class="table-data">1</td>
                            <td class="table-data">Fatiha Anouar</td>
                            <td class="table-data">0612345678</td>
                            <td class="table-data">fatihaanouar@gmail.com</td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data">2</td>
                            <td class="table-data">Mohamed Sadiq</td>
                            <td class="table-data">0623456789</td>
                            <td class="table-data">mohamedsadiq@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
