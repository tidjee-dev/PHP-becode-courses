<?php

include '../utils/db-index.php';

$hikeName = '';

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  try {
    $stmt = $pdo->prepare("SELECT name FROM hiking WHERE id = ?");
    $stmt->execute([$id]);
    $hikeName = $stmt->fetch(PDO::FETCH_ASSOC)['name'];
  } catch (PDOException $e) {
    $errorMessage[] = "Erreur de suppression de la randonnée : " . $e->getMessage();
  }
}

if (isset($_POST['validate-delete-btn'])) {
  if (isset($_POST['id'], $_POST['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    try {
      $stmt = $pdo->prepare("DELETE FROM hiking WHERE id = ?");
      $stmt->execute([$id]);
      $successMessage[] = "La randonnée $name a été supprimée avec succès.";

      header('Location: ../list/');
      exit();
    } catch (PDOException $e) {
      $errorMessage[] = "Erreur de suppression de la randonnée : " . $e->getMessage();
    }
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
    <title>Supprimer une randonnée | Randonnées 974</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../">Randonnees 974</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="../list/index.php">Liste des Randonnées</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../create/">Ajouter une randonnée</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container main-form">
      <form method="POST" class="form">
        <h1>Supprimer une randonnée</h1>
        <div class="mb-3">
          <input type="hidden" name="id" value="<?= $id ?>">
          <label for="name" class="form-label">
            Entrer le nom de la randonnée <span class="hikeToDelete"><?= $hikeName ?></span> pour
            comfirmer la
            suppression
          </label>
          <input type="text" class="form-control" id="name" name="name"
                 placeholder="Nom de la randonnée">
        </div>

        <div class="d-flex gap-2 justify-content-between align-items-center w-100">
          <a href="../list/index.php" class="btn btn-sm btn-outline-secondary fw-bold">Annuler</a>
          <button type="submit" class="btn btn-danger fw-bold"
                  name="validate-delete-btn">Supprimer</button>
        </div>
      </form>
      <?php
    if (!empty($errorMessage)) {
      echo '<div class="alert alert-danger">' . implode('<br>', $errorMessage) . '</div>';
    }
    if (!empty($successMessage)) {
      echo '<div class="alert alert-success">' . implode('<br>', $successMessage) . '</div>';
    }
    ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="../assets/js/script.js"></script>
  </body>

</html>