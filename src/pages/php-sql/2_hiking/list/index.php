<?php
include '../utils/db-index.php';

try {
  $stmt = $pdo->query("SELECT * FROM hiking");
  $hikes = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $difficulties = [
    'very_easy' => 'Très facile',
    'easy' => 'Facile',
    'medium' => 'Moyen',
    'hard' => 'Difficile',
    'very_hard' => 'Très difficile'
  ];

  // $successMessage[] = "Données récupérées avec succès !";
} catch (PDOException $e) {
  $errorMessage[] = "Erreur de récupération des données : " . $e->getMessage();
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
    <title>Liste des Randonnées | Randonnées 974</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
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
              <a class="nav-link" href="../create/">Ajouter une randonnée</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <section class="hero">
        <h1 class="hero-title">Liste des Randonnées</h1>
        <p class="hero-description">
          Voici la liste des randonnées de l'île de la Réunion.
        </p>
      </section>

      <table class="table table-striped table-hover table-responsive">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Difficulté</th>
            <th>Distance (km)</th>
            <th>Durée (h:m)</th>
            <th>Dénivelé (m)</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
        if (empty($hikes)) {
          echo '<tr><td colspan="6">Aucune randonnée enregistrée.</td></tr>';
        }

        foreach ($hikes as $hike) {
          echo '<tr>
            <td>' . $hike['name'] . '</td>
            <td>' . $difficulties[$hike['difficulty']] . '</td>
            <td>' . $hike['distance'] . '</td>
            <!-- Format duration as HH:MM -->
            <td>' . date('H:i', strtotime($hike['duration'])) . '</td>
            <td>' . $hike['height_difference'] . '</td>
            <td class="d-flex gap-2">
              <form action="../update/" method="POST">
                <input type="hidden" name="id" value="' . $hike['id'] . '">
                <button type="submit" class="btn btn-sm btn-outline-primary">
                  <i class="bi bi-pencil fw-bold"></i>
                </button>
              </form>

              <form action="../delete/index.php" method="POST">
                <input type="hidden" name="id" value="' . $hike['id'] . '">
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <i class="bi bi-trash fw-bold"></i>
                </button>
              </form>
            </td>
          </tr>';
        }
        ?>
        </tbody>
      </table>

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