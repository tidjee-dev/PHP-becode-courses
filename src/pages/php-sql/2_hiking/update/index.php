<?php

include '../utils/db-index.php';

// Display values for selected hike
if (isset($_POST['id'])) {
  $id = $_POST['id'];

  try {
    $stmt = $pdo->prepare("SELECT * FROM hiking WHERE id = ?");
    $stmt->execute([$id]);
    $selected_hike = $stmt->fetch(PDO::FETCH_ASSOC);
    // $successMessage[] = "Randonnée choisie : " . $selected_hike['name'];
  } catch (PDOException $e) {
    $errorMessage[] = "Erreur de recherche de la randonnée : " . $e->getMessage();
  }
}

// Update data
if (isset($_POST['modify-btn'])) {
  if (isset($_POST['id'], $_POST['name'], $_POST['difficulty'], $_POST['distance'], $_POST['duration'], $_POST['height_difference'])) {
    $id = (int) $_POST['id'];
    $name = trim($_POST['name']);
    $difficulty = trim($_POST['difficulty']);
    $distance = (float) trim($_POST['distance']);
    $duration = trim($_POST['duration']);
    $height_difference = (int) trim($_POST['height_difference']);

    if (empty($name) || empty($difficulty) || empty($distance) || empty($duration) || empty($height_difference)) {
      $errorMessage[] = "Tous les champs doivent être remplis.";
    } else {
      try {
        $stmt = $pdo->prepare("UPDATE hiking SET name = ?, difficulty = ?, distance = ?, duration = ?, height_difference = ? WHERE id = ?");
        $stmt->execute([$name, $difficulty, $distance, $duration, $height_difference, $id]);

        if ($stmt->rowCount() > 0) {
          header("Location: ../list/index.php");
          exit($successMessage[] = "Randonnée modifiée avec succès!");
        } else {
          $warningMessage[] = "Aucune modification effectuée.";
        }
      } catch (PDOException $e) {
        $errorMessage[] = "Erreur de modification de la randonnée : " . $e->getMessage();
      }
    }
  } else {
    $errorMessage[] = "Données manquantes pour la modification.";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Modifier une randonnée | Randonnées 974</title>
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
            <li class="nav-item">
              <a class="nav-link" href="../create/">Ajouter une randonnée</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container main-form">
      <form action="" method="post" class="form">
        <h1 class="form-title">Modifier une randonnée</h1>
        <div class="form-group">
          <label for="name" class="form-label my-2">Nom</label>
          <input type="text" name="name" id="name" class="form-control"
                 value="<?= isset($selected_hike['name']) ? $selected_hike['name'] : '' ?>">
        </div>

        <div class="form-group">
          <input type="hidden" name="id"
                 value="<?= isset($selected_hike['id']) ? $selected_hike['id'] : '' ?>">


          <label for="difficulty" class="form-label my-2">Difficulté</label>
          <select name="difficulty" id="difficulty" class="form-select">
            <option value="very_easy"
                    <?= isset($selected_hike['difficulty']) && $selected_hike['difficulty'] == 'very_easy' ? 'selected' : '' ?>>
              Très facile</option>
            <option value="easy"
                    <?= isset($selected_hike['difficulty']) && $selected_hike['difficulty'] == 'easy' ? 'selected' : '' ?>>
              Facile</option>
            <option value="medium"
                    <?= isset($selected_hike['difficulty']) && $selected_hike['difficulty'] == 'medium' ? 'selected' : '' ?>>
              Moyen</option>
            <option value="hard"
                    <?= isset($selected_hike['difficulty']) && $selected_hike['difficulty'] == 'hard' ? 'selected' : '' ?>>
              Difficile</option>
            <option value="very_hard"
                    <?= isset($selected_hike['difficulty']) && $selected_hike['difficulty'] == 'very_hard' ? 'selected' : '' ?>>
              Très difficile</option>
          </select>
        </div>

        <div class="form-group">
          <label for="distance" class="form-label my-2">Distance (km)</label>
          <input type="number" min="0" step="0.1" name="distance" id="distance"
                 value="<?= isset($selected_hike['distance']) ? $selected_hike['distance'] : '' ?>"
                 class="form-control">
        </div>

        <div class="form-group">
          <label for="duration" class="form-label my-2">Durée (h)</label>
          <input type="time" name="duration" id="duration"
                 value="<?= isset($selected_hike['duration']) ? $selected_hike['duration'] : '' ?>"
                 class="form-control">
        </div>

        <div class="form-group">
          <label for="height_difference" class="form-label my-2">Dénivelé (m)</label>
          <input type="number" name="height_difference" id="height_difference"
                 value="<?= isset($selected_hike['height_difference']) ? $selected_hike['height_difference'] : '' ?>"
                 class="form-control">
        </div>

        <button type="submit" name="modify-btn" class="btn btn-primary my-4">Modifier</button>

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