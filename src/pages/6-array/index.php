<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">

    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP Fundamentals : Array | BeCode PHP Courses</title>
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


    <main class="main">
      <section class="exos-container">
        <h2 class="exos-title">1. Print the 3rd country</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">&lt;?php
$countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
echo $countries[2];
?&gt;
</code></pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
          echo $countries[2];
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">2. </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">&lt;?php
$family_members = array('Léa', 'Donatien', 'Ottavia');
print_r($family_members);

$recipes = array('Pasta', 'Pizza', 'Lasagna');
print_r($recipes);

$films = array('Deadpool', 'The Fifth Element', 'The Dark Knight');
print_r($films);

echo $films[1];
?&gt;
</code></pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $family_members = array('Léa', 'Donatien', 'Ottavia');
          echo "<p>";
          print_r($family_members);
          echo "</p>";

          $recipes = array('Pasta', 'Pizza', 'Lasagna');
          echo "<p>";
          print_r($recipes);
          echo "</p>";

          $films = array('Deadpool', 'The Fifth Element', 'The Dark Knight');
          echo "<p>";
          print_r($films);
          echo "</p>";

          echo $films[1];
          ?>
          </div>
        </div>
      </section>
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