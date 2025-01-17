<?php

include '_hikes-data.php';

$stmt = $pdo->query('SELECT * FROM hiking');
$hikes_table = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($hikes_table)) {
  try {
    $stmt = $pdo->prepare('INSERT INTO hiking (name, difficulty, distance, duration, height_difference) VALUES (?, ?, ?, ?, ?)');

    foreach ($hikes as $hike) {
      $stmt->execute([
        $hike['name'],
        $hike['difficulty'],
        $hike['distance'],
        $hike['duration'],
        $hike['height_difference']
      ]);
    }

    // $successMessage[] = "Randonnée ajoutée avec succès !";
  } catch (PDOException $e) {
    $errorMessage[] = "Erreur d'ajout de la randonnée : " . $e->getMessage();
  }
}