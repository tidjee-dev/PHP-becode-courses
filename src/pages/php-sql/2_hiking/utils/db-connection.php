<?php
$host = "becode-php-mysql";
$username = "tidjee-dev";
$password = "tidjee-dev";
$database = "demo-php";

$successMessage = [];
$warningMessage = [];
$errorMessage = [];

try {
  $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $successMessage[] = "Connexion établie !";
} catch (PDOException $e) {
  $errorMessage[] = "Erreur de connexion : " . $e->getMessage();
}