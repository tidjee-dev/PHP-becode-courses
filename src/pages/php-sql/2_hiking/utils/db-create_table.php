<?php
try {
  $pdo->exec("CREATE TABLE IF NOT EXISTS hiking (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        difficulty ENUM('very_easy', 'easy', 'medium', 'hard', 'very_hard') NOT NULL,
        distance decimal(5,2) NOT NULL,
        duration TIME NOT NULL,
        height_difference INT NOT NULL
    )");
  // $successMessage[] = "Table 'hiking' créée avec succès!";
} catch (PDOException $e) {
  $errorMessage[] = "Erreur de création de la table : " . $e->getMessage();
}