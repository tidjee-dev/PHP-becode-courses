<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">
    <title>PHP Fundamentals : Conditions | BeCode PHP Courses</title>
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
        <h2 class="exos-title">
          1. Use of conditions
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">$temperature = 18;
if ($temperature >= 15) {
  $clothes = "T-shirt";
  $should_wear_scarf = false;
} else {
  $clothes = "Sweater";
  $should_wear_scarf = true;
}

echo "&lt;p&gt;The temperature is $temperature °C.&lt;/p&gt;";
echo "&lt;p&gt;You should wear a $clothes.&lt;/p&gt;";
echo "&lt;p&gt;You should wear a scarf : " . ($should_wear_scarf ? "Yes" : "No") . ".&lt;/p&gt;";
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $temperature = 18;
          if ($temperature >= 15) {
            $clothes = "T-shirt";
            $should_wear_scarf = false;
          } else {
            $clothes = "Sweater";
            $should_wear_scarf = true;
          }

          echo "<p>The temperature is $temperature °C.</p>";
          echo "<p>You should wear a $clothes.</p>";
          echo "<p>You should wear a scarf : " . ($should_wear_scarf ? "Yes" : "No") . ".</p>";
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          1. Use of nested conditions
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">$temperature = 18;
$is_raining = true;

if ($temperature >= 15) {
  if ($is_raining) {
    echo "&lt;p&gt;The temperature is $temperature °C, but it's raining. &lt;br&gt; Wear a raincoat.&lt;/p&gt;";
  } else {
    echo "&lt;p&gt;The temperature is $temperature °C. A T-shirt is fine.&lt;/p&gt;";
  }
} else {
  if ($is_raining) {
    echo "&lt;p&gt;The temperature is $temperature °C and it's raining. &lt;br&gt; Wear a warm jacket and carry an umbrella.&lt;/p&gt;";
  } else {
    echo "&lt;p&gt;The temperature is $temperature °C. &lt;br&gt; Wear a sweater.&lt;/p&gt;";
  }
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $temperature = 18;
          $is_raining = true;

          if ($temperature >= 15) {
            if ($is_raining) {
              echo "<p>The temperature is $temperature °C, but it's raining. <br> Wear a raincoat.</p>";
            } else {
              echo "<p>The temperature is $temperature °C. A T-shirt is fine.</p>";
            }
          } else {
            if ($is_raining) {
              echo "<p>The temperature is $temperature °C and it's raining. <br> Wear a warm jacket and carry an umbrella.</p>";
            } else {
              echo "<p>The temperature is $temperature °C. <br> Wear a sweater.</p>";
            }
          }

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