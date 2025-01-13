<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">

    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP Fundamentals : Loops | BeCode PHP Courses</title>
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
        <h2 class="exos-title">1. Foreach loop</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">&lt;?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
  if ($pronoun === 'He/She') {
    echo $pronoun . ' codes <br>';
  } else {
    echo $pronoun . ' code <br>';
  }
}
?&gt;</code></pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result scrollable">
            <?php
          $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

          foreach ($pronouns as $pronoun) {
            if ($pronoun === 'He/She') {
              echo $pronoun . ' codes <br>';
            } else {
              echo $pronoun . ' code <br>';
            }
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section>
        <h2>2. More exercises</h2>
        <section class="exos-container">
          <h3 class="exos-title">1. While loop</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$i = 1;

while ($i <= 120) {
  echo $i . '&lt;br&gt;';
  $i++;
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable block">
              <?php
            $i = 1;
            while ($i <= 120) {
              echo $i . '<br>';
              $i++;
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">2. Same as 1. but with For loop</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
for ($i = 1; $i <= 120; $i++) {
  echo $i . '&lt;br&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable block">
              <?php
            for ($i = 1; $i <= 120; $i++) {
              echo $i . '<br>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">3. Foreach loop</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$employees = array(
  'Chris',
  'Jane',
  'Alex',
  'Taylor',
  'Pat',
  'Sam',
  'Drew',
  'Casey',
  'Jordan',
  'Chris',
  'Taylor',
  'John',
  'Alex',
  'Sam',
  'Casey',
  'Pat',
  'Jordan',
  'Drew',
  'Jane',
  'John'
);

foreach ($employees as $employee) {
  echo $employee . '<br>';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable block">
              <?php
            $employees = array(
              'Chris',
              'Jane',
              'Alex',
              'Taylor',
              'Pat',
              'Sam',
              'Drew',
              'Casey',
              'Jordan',
              'Chris',
              'Taylor',
              'John',
              'Alex',
              'Sam',
              'Casey',
              'Pat',
              'Jordan',
              'Drew',
              'Jane',
              'John'
            );

            foreach ($employees as $employee) {
              echo $employee . '<br>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">4. Create a select box with countries</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$countries = array(
  'Belgium',
  'France',
  'Germany',
  'Netherlands',
  'Ukraine',
  'Poland',
  'Sweden',
  'Denmark',
  'Norway',
  'Finland'
);

echo '&lt;select&gt;';
echo '&lt;option value=&quot;&quot;&gt;Select a country&lt;/option&gt;';
foreach ($countries as $country) {
  echo '&lt;option value=&quot;' . $country . '&quot;&gt;' . $country . '&lt;/option&gt;';
}
echo '&lt;/select&gt;';
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            $countries = array(
              'Belgium',
              'France',
              'Germany',
              'Netherlands',
              'Ukraine',
              'Poland',
              'Sweden',
              'Denmark',
              'Norway',
              'Finland'
            );

            echo '<select>';
            echo '<option value="">Select a country</option>';
            foreach ($countries as $country) {
              echo '<option value="' . $country . '">' . $country . '</option>';
            }
            echo '</select>';
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">5. Add ISO codes to each country as key</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$countries = array(
  'BE' => 'Belgium',
  'FR' => 'France',
  'DE' => 'Germany',
  'NL' => 'Netherlands',
  'UA' => 'Ukraine',
  'PL' => 'Poland',
  'SE' => 'Sweden',
  'DK' => 'Denmark',
  'NO' => 'Norway',
  'FI' => 'Finland'
);

echo '&lt;form method=&quot;get&quot;&gt;';
echo '&lt;select name=&quot;country&quot;&gt;';
echo '&lt;option value=&quot;&quot; hidden&gt;Select a country&lt;/option&gt;';
foreach ($countries as $iso => $country) {
  echo '&lt;option value=&quot;' . $iso . '&quot; ' . (isset($_GET['country']) && $_GET['country'] === $iso ? 'selected' : '') . '&gt;' . $country . '&lt;/option&gt;';
}
echo '&lt;/select&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['country'])) {
  echo 'The ISO code of the selected country is: ' . $_GET['country'];
  echo '&lt;br&gt;';
  echo 'The name of the selected country is: ' . $countries[$_GET['country']];
} else {
  echo 'No country selected';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            $countries = array(
              '' => 'Select a country',
              'BE' => 'Belgium',
              'FR' => 'France',
              'DE' => 'Germany',
              'NL' => 'Netherlands',
              'UA' => 'Ukraine',
              'PL' => 'Poland',
              'SE' => 'Sweden',
              'DK' => 'Denmark',
              'NO' => 'Norway',
              'FI' => 'Finland',
            );

            echo '<form method="get">';
            echo '<select name="country">';
            foreach ($countries as $iso => $country) {
              if ($iso === '') {
                echo '<option value="" hidden>Select a country</option>';
                continue;
              }
              echo '<option value="' . $iso . '" ' . ($_GET['country'] === $iso ? 'selected' : '') . '>' . $country . '</option>';
            }
            echo '</select>';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['country'])) {
              echo 'The ISO code of the selected country is: ' . $_GET['country'];
              echo '<br>';
              echo 'The name of the selected country is: ' . $countries[$_GET['country']];
            } else {
              echo '<br>';
              echo 'No country selected';
            }
            ?>
            </div>
          </div>
        </section>
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