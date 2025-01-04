<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">
    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP Fundamentals : Variables | BeCode PHP Courses</title>
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
          1. Set and Display "string" variables
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre>
<code class="language-php">$firstname = "Donatien";
echo "&lt;p&gt;Hi! My name is $firstname.&lt;/p&gt;";
echo "&lt;p&gt;Hi! My name is " . $firstname . ".&lt;/p&gt;";
</code>
          </pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $firstname = "Donatien";
          echo "<p>Hi! My name is $firstname.</p>";
          echo "<p>Hi! My name is " . $firstname . ".</p>";
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">2. Set and Display "integer" variables</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre>
<code class="language-php">$age = 25;
echo "&lt;p&gt;I am $age years old.&lt;/p&gt;";
echo "&lt;p&gt;I am " . $age . " years old.&lt;/p&gt;";
</code>
          </pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $age = 25;
          echo "<p>I am $age years old.</p>";
          echo "<p>I am " . $age . " years old.</p>";
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">3. Set and Display another "string" variables</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre>
<code class="language-php">$eyes_color = "green";
echo "&lt;p&gt;My eyes are $eyes_color.&lt;/p&gt;";
echo "&lt;p&gt;My eyes are " . $eyes_color . ".&lt;/p&gt;";
</code>
          </pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $eyes_color = "green";
          echo "<p>My eyes are $eyes_color.</p>";
          echo "<p>My eyes are " . $eyes_color . ".</p>";
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">4. Set and Display "array" variables</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre>
<code class="language-php">$family_members = ["Léa", "Donatien", "Ottavia"];
echo "&lt;p&gt;The first person in my family is $family_members[0].&lt;/p&gt;";
echo "&lt;p&gt;The first person in my family is " . $family_members[0] . ".&lt;/p&gt;";
</code>
          </pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $family_members = ["Léa", "Donatien", "Ottavia"];
          echo "<p>The first person in my family is $family_members[0].</p>";
          echo "<p>The first person in my family is " . $family_members[0] . ".</p>";
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">5. Set and Display "boolean" variables</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre>
<code class="language-php">$is_hungry = true;
echo "&lt;p&gt;Am I hungry? " . ($is_hungry ? "Yes" : "No") . ".&lt;/p&gt;";
</code>
          </pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $is_hungry = true;
          echo "<p>Am I hungry? " . ($is_hungry ? "Yes" : "No") . ".</p>";
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