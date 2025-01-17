<?php
$host = "becode-php-mysql";
$username = "tidjee-dev";
$password = "tidjee-dev";
$database = "demo-php";

$errorMessage = [
  "connection" => "",
  "table" => ""
];

try {
  $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $errorMessage["connection"] = "Connection error: " . $e->getMessage();
};

try {
  $pdo->exec("CREATE TABLE IF NOT EXISTS weatherapp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(100) NOT NULL,
    high INT NOT NULL,
    low INT NOT NULL
  )");
} catch (PDOException $e) {
  $errorMessage["table"] = "Table creation error: " . $e->getMessage();
};

try {
  $pdo->exec("TRUNCATE TABLE weatherapp");
  $pdo->exec("INSERT INTO weatherapp (city, high, low) VALUES
  ('Bruxelles', 27, 13),
  ('Liège', 25, 15),
  ('Namur', 26, 15),
  ('Charleroi', 25, 12),
  ('Bruges', 28, 16)
  ");
} catch (PDOException $e) {
  $errorMessage["table"] = "Table initial data insertion error: " . $e->getMessage();
};

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['city'], $_POST['high'], $_POST['low'])) {
  $city = $_POST['city'];
  $high = $_POST['high'];
  $low = $_POST['low'];

  try {
    $stmt = $pdo->prepare("INSERT INTO weatherapp (city, high, low) VALUES (?, ?, ?)");
    $stmt->execute([$city, $high, $low]);
  } catch (PDOException $e) {
    $errorMessage["table"] = "Table new data insertion error: " . $e->getMessage();
  };

  $_POST = [];
};

if (isset($_POST['delete']) && !empty($_POST['delete'])) {
  $cityToDelete = $_POST['delete'];

  try {
    $stmt = $pdo->prepare("DELETE FROM weatherapp WHERE city = ?");
    $stmt->execute([$cityToDelete]);
  } catch (PDOException $e) {
    $errorMessage["table"] = "Table data deletion error: " . $e->getMessage();
  };

  $_POST = [];
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">

    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP & SQL: PDO | BeCode PHP Courses</title>
  </head>

  <body>
    <header>
      <h1><a href="/" target="_blank">BeCode PHP Courses</a></h1>
      <nav>
        <ul>
          <li><a href="http://localhost:8081" target="_blank">phpMyAdmin</a></li>
          <li><a href="http://localhost:8082" target="_blank">Adminer</a></li>
          <li><a href="/info.php" target="_blank">PHP info</a></li>
        </ul>
      </nav>
    </header>

    <div class="return-home-btn">
      <a href="/" class="btn btn-primary">Return to Home</a>
    </div>

    <main class="main pdo">
      <div class="center">
        <h1>PHP & SQL: PDO</h1>

        <?php
      if (!empty($errorMessage["connection"])) {
        echo '<p class="alert alert-error">' . $errorMessage["connection"] . '</p>';
      } elseif (!empty($errorMessage["table"])) {
        echo '<p class="alert alert-error">' . $errorMessage["table"] . '</p>';
      }
      ?>

        <section class="cities-table-container">
          <table class="cities-table">
            <thead>
              <tr>
                <th>City</th>
                <th>High</th>
                <th>Low</th>
              </tr>
            </thead>
            <tbody>
              <?php
            try {
              $stmt = $pdo->query("SELECT * FROM weatherapp");
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
              <td>' . $row['city'] . '</td>
              <td>' . $row['high'] . '</td>
              <td>' . $row['low'] . '</td>
              <td>
                <form action="" method="post">
                  <button type="submit" name="delete" class="btn-sm btn-outline-danger" value="' . $row['city'] . '">Delete</button>
                </form>
              </td>
            </tr>';
              }
            } catch (PDOException $e) {
              echo '<p class="alert alert-error">' . $e->getMessage() . '</p>';
            }
            ?>
            </tbody>
          </table>
        </section>

        <section>
          <form action="" method="post">
            <label for="city">City:
              <input type="text" name="city" placeholder="City" required>
            </label>
            <label for="high">High:
              <input type="number" name="high" placeholder="High" required>
            </label>
            <label for="low">Low:
              <input type="number" name="low" placeholder="Low" required>
            </label>
            <button type="submit" class="btn-sm btn-primary">Insert
              data
            </button>
          </form>
        </section>
      </div>
    </main>

    <footer>
      <p>&copy; <?php echo date('Y'); ?> - Tidjee's BeCode PHP Courses</p>
      <p>
        <a href=" https://github.com/tidjee-dev/PHP-becode-courses" target="_blank">
          <img src="https://img.shields.io/badge/View_on_GitHub-100000?logo=github&logoColor=white"
               alt="View on GitHub">
        </a>
      </p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js">
    </script>
    <script>
    hljs.highlightAll();
    </script>
  </body>

</html>