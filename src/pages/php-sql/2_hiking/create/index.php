<?php

include '../utils/db-index.php';

if (isset($_POST['add-btn'])) {
  if (isset($_POST['name'], $_POST['difficulty'], $_POST['distance'], $_POST['duration'], $_POST['height_difference'])) {
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

    try {
      $stmt = $pdo->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES (?, ?, ?, ?, ?)");
      $stmt->execute([$name, $difficulty, $distance, $duration, $height_difference]);
      $successMessage[] = "Nouvelles données insérées avec succès !";
    } catch (PDOException $e) {
      $errorMessage[] = "Erreur lors de l'insertion des données : " . $e->getMessage();
    };

    $_POST = [];
  } else {
    $warningMessage[] = "Tous les champs sont obligatoires !";
  };
};

?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Ajouter une randonnée | Randonnées 974</title>
  </head>

  <body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-secondary">
      <div class="container">
        <a class="navbar-brand" href="../">Randonnees 974</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../list/">Liste des randonnées</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container main-form">
      <form action="" method="post" class="form">
        <h1 class="form-title">Ajouter une randonnée</h1>
        <div class="form-group">
          <label for="name" class="form-label my-2">Nom</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="difficulty" class="form-label my-2">Difficulté</label>
          <select name="difficulty" id="difficulty" class="form-select">
            <option value="" disabled selected hidden>Veuillez choisir une difficulté ...</option>
            <option value="very_easy">Très facile</option>
            <option value="easy">Facile</option>
            <option value="medium">Moyen</option>
            <option value="hard">Difficile</option>
            <option value="very_hard">Très difficile</option>
          </select>
        </div>

        <div class="form-group">
          <label for="distance" class="form-label my-2">Distance</label>
          <input type="number" min="0" step="0.1" name="distance" id="distance"
                 class="form-control">
        </div>

        <div class="form-group">
          <label for="duration" class="form-label my-2">Durée</label>
          <input type="time" name="duration" id="duration" class="form-control">
        </div>

        <div class="form-group">
          <label for="height_difference" class="form-label my-2">Dénivelé</label>
          <input type="number" name="height_difference" id="height_difference" class="form-control">
        </div>

        <button type="submit" name="add-btn" class="btn btn-primary my-4">Ajouter</button>

      </form>
      <div class="alert-container">
        <?php
      foreach ($errorMessage as $error) {
        echo '<p class="alert alert-danger" role="alert">' . $error . '</p>';
      }
      foreach ($warningMessage as $warning) {
        echo '<p class="alert alert-warning" role="alert">' . $warning . '</p>';
      }
      foreach ($successMessage as $success) {
        echo '<p class="alert alert-success" role="alert">' . $success . '</p>';
      }
      ?>
      </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="../assets/js/scripts.js"></script>
  </body>

</html>