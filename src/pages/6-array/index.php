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
        <h2 class="exos-title">1. Array</h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">&lt;?php
$countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
echo $countries[2];

$family_members = array('Léa', 'Donatien', 'Ottavia');
echo "&lt;pre&gt;";
print_r($family_members);
echo "&lt;/pre&gt;";

$recipes = array('Pasta', 'Pizza', 'Lasagna');
echo "&lt;pre&gt;";
print_r($recipes);
echo "&lt;/pre&gt;";

$films = array('Deadpool', 'The Fifth Element', 'Batman');
echo "&lt;pre&gt;";
print_r($films);
echo "&lt;/pre&gt;";

echo $films[1];
?&gt;
</code></pre>
        </div>
        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
          echo $countries[2];

          $family_members = array('Léa', 'Donatien', 'Ottavia');
          echo "<pre>";
          print_r($family_members);
          echo "</pre>";

          $recipes = array('Pasta', 'Pizza', 'Lasagna');
          echo "<pre>";
          print_r($recipes);
          echo "</pre>";

          $films = array('Deadpool', 'The Fifth Element', 'Batman');
          echo "<pre>";
          print_r($films);
          echo "</pre>";

          echo $films[1];
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section>
        <h2 class="exos-title">
          2. Most common array operations
        </h2>

        <section class="exos-container">
          <h2 class="exos-title">1. Check the content of an array for debugging</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');

echo "&lt;pre&gt;";
print_r($countries);
echo "&lt;/pre&gt;";

// Use var_dump() to display more informations about the array
echo "&lt;pre&gt;";
var_dump($countries);
echo "&lt;/pre&gt;";

?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
            echo "<pre>";
            print_r($countries);
            echo "</pre>";

            echo "<pre>";
            var_dump($countries);
            echo "</pre>";
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">2. Retrieve and display an element</h2>
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
          <h2 class="exos-title">3. Add an element</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
$person = ['name' => 'Donatien', 'age' => 29, 'height' => 1.75];

// Add an element to the array
array_push($countries, 'Poland');

// Short way to add an element to the array
$countries[] = 'Poland';

// Add an element with named key to the array
$person['function'] = 'Junior Web Developer';

echo "&lt;pre&gt;";
print_r($countries);
echo "&lt;/pre&gt;";

echo "&lt;pre&gt;";
print_r($person);
echo "&lt;/pre&gt;";
?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
            $person = ['name' => 'Donatien', 'age' => 29, 'height' => 1.75];

            array_push($countries, 'Poland');

            $countries[] = 'Poland';

            $person['function'] = 'Junior Web Developer';

            echo "<pre>";
            print_r($countries);
            echo "</pre>";

            echo "<pre>";
            print_r($person);
            echo "</pre>";
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">4. Replace the value of a key by another one</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$person['function'] = 'Junior Web Developer';
echo "&lt;p&gt;Before, I was a " . $person['function'] . "&lt;/p&gt;";

// Replace the value of the key 'function' by another one
$person['function'] = 'Senior Web Developer';
echo "&lt;p&gt;Now, I'm a " . $person['function'] . "&lt;/p&gt;";
?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $person['function'] = 'Junior Web Developer';
            echo "<p>Before, I was a " . $person['function'] . "</p>";

            $person['function'] = 'Senior Web Developer';
            echo "<p> Now, I'm a " . $person['function'] . "</p>";
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">3. Associative arrays</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$me = array('firstname' => 'Karen');

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";
?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $me = array('firstname' => 'Karen');

            echo "<pre>";
            print_r($me);
            echo "</pre>";
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">4. Multidimensional arrays</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$me = array(
  'age' => 29,
  'firstname' => 'Tidjee',
  'lastname'  => 'Plennevaux',
  'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman')
);

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";

// Add a new key to the array
$me['hobbies'] = ['Cooking', 'Coding', 'Gaming'];

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";

$mother = array(
  'age' => 59,
  'firstname' => 'Nadine',
  'lastname'  => 'Plennevaux',
  'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
  'hobbies' => ['Reading', 'Gardening', 'Travelling']
);

// Merge 'mother' array with 'me' array
$me = array_merge($me, ['mother' => $mother]);

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";
?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $me = array(
              'age' => 29,
              'firstname' => 'Tidjee',
              'lastname'  => 'Plennevaux',
              'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman')
            );

            echo '<pre>';
            print_r($me);
            echo '</pre>';

            $me['hobbies'] = ['Cooking', 'Coding', 'Gaming'];

            echo '<pre>';
            print_r($me);
            echo '</pre>';

            $mother = array(
              'age' => 59,
              'firstname' => 'Nadine',
              'lastname'  => 'Plennevaux',
              'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
              'hobbies' => ['Reading', 'Gardening', 'Travelling']
            );

            $me = array_merge($me, ['mother' => $mother]);

            echo '<pre>';
            print_r($me);
            echo '</pre>';
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section>
          <h2 class="exos-title">5. Manipulating arrays exercises</h2>
          <section class="exos-container">
            <h2 class="exos-title">1. Count the number of elements</h2>
            <div class="code-container">
              <h3 class="code-title">Code:</h3>
              <pre><code class="language-php">&lt;?php
$me = array(
  'age' => 29,
  'firstname' => 'Tidjee',
  'lastname'  => 'Plennevaux',
  'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
  'hobbies' => ['Cooking', 'Coding', 'Gaming'],
  'mother' => array(
    'age' => 59,
    'firstname' => 'Nadine',
    'lastname'  => 'Plennevaux',
    'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
    'hobbies' => ['Reading', 'Gardening', 'Travelling']
  )
);

echo "&lt;p&gt;My mother has " . count($me['mother']['hobbies']) . " hobbies.&lt;/p&gt;";
echo '&lt;p&gt;I have ' . count($me['hobbies']) . ' hobbies.&lt;/p&gt;';
echo '&lt;p&gt;In total, we have ' . (count($me['hobbies']) + count($me['mother']['hobbies'])) . ' hobbies.&lt;/p&gt;';
?&gt;
</code></pre>
            </div>
            <div class="exo">
              <h3 class="exo-title">Result:</h3>
              <div class="exo-result">
                <?php
              $me = array(
                'age' => 29,
                'firstname' => 'Tidjee',
                'lastname'  => 'Plennevaux',
                'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
                'hobbies' => ['Cooking', 'Coding', 'Gaming'],
                'mother' => array(
                  'age' => 59,
                  'firstname' => 'Nadine',
                  'lastname'  => 'Plennevaux',
                  'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
                  'hobbies' => ['Reading', 'Gardening', 'Travelling']
                )
              );

              echo "<p>My mother has " . count($me['mother']['hobbies']) . " hobbies.</p>";

              echo '<p>I have ' . count($me['hobbies']) . ' hobbies.</p>';

              echo '<p>In total, we have ' . (count($me['hobbies']) + count($me['mother']['hobbies'])) . ' hobbies.</p>';
              ?>
              </div>
            </div>
          </section>

          <hr class="separator">

          <section class="exos-container">
            <h2 class="exos-title">2. Add an element in a multi-dimensional array</h2>
            <div class="code-container">
              <h3 class="code-title">Code:</h3>
              <pre><code class="language-php">&lt;?php
$me = array(
  'age' => 29,
  'firstname' => 'Tidjee',
  'lastname'  => 'Plennevaux',
  'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
  'hobbies' => ['Cooking', 'Coding', 'Gaming'],
  'mother' => array(
    'age' => 59,
    'firstname' => 'Nadine',
    'lastname'  => 'Plennevaux',
    'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
    'hobbies' => ['Reading', 'Gardening', 'Travelling']
  )
);

$me['hobbies'][] = 'Taxidermy';

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";
?&gt;
</code></pre>
            </div>
            <div class="exo">
              <h3 class="exo-title">Result:</h3>
              <div class="exo-result">
                <?php
              $me = array(
                'age' => 29,
                'firstname' => 'Tidjee',
                'lastname'  => 'Plennevaux',
                'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
                'hobbies' => ['Cooking', 'Coding', 'Gaming'],
                'mother' => array(
                  'age' => 59,
                  'firstname' => 'Nadine',
                  'lastname'  => 'Plennevaux',
                  'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
                  'hobbies' => ['Reading', 'Gardening', 'Travelling']
                )
              );

              $me['hobbies'][] = 'Taxidermy';

              echo "<pre>";
              print_r($me);
              echo "</pre>";
              ?>
              </div>
            </div>
          </section>

          <hr class="separator">

          <section class="exos-container">
            <h2 class="exos-title">3. Replace an element in a multi-dimensional array</h2>
            <div class="code-container">
              <h3 class="code-title">Code:</h3>
              <pre><code class="language-php">&lt;?php
$me = array(
  'age' => 29,
  'firstname' => 'Tidjee',
  'lastname'  => 'Plennevaux',
  'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
  'hobbies' => ['Cooking', 'Coding', 'Gaming'],
  'mother' => array(
    'age' => 59,
    'firstname' => 'Nadine',
    'lastname'  => 'Plennevaux',
    'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
    'hobbies' => ['Reading', 'Gardening', 'Travelling']
  )
);

$me['lastname'] = 'Durand';

echo "&lt;pre&gt;";
print_r($me);
echo "&lt;/pre&gt;";
?&gt;
</code></pre>
            </div>
            <div class="exo">
              <h3 class="exo-title">Result:</h3>
              <div class="exo-result">
                <?php
              $me = array(
                'age' => 29,
                'firstname' => 'Tidjee',
                'lastname'  => 'Plennevaux',
                'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
                'hobbies' => ['Cooking', 'Coding', 'Gaming'],
                'mother' => array(
                  'age' => 59,
                  'firstname' => 'Nadine',
                  'lastname'  => 'Plennevaux',
                  'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
                  'hobbies' => ['Reading', 'Gardening', 'Travelling']
                )
              );

              $me['lastname'] = 'Durand';

              echo "<pre>";
              print_r($me);
              echo "</pre>";
              ?>
              </div>
            </div>
          </section>

          <hr class="separator">

          <section class="exos-container">
            <h2 class="exos-title">4. Create a new array from 2 others (or more)</h2>
            <div class="code-container">
              <h3 class="code-title">Code:</h3>
              <pre><code class="language-php">&lt;?php
?&gt;
</code></pre>
            </div>
            <div class="exo">
              <h3 class="exo-title">Result:</h3>
              <div class="exo-result">
                <?php
              $me = array(
                'age' => 29,
                'firstname' => 'Tidjee',
                'lastname'  => 'Plennevaux',
                'favourite_movies' => array('Deadpool', 'The Fifth Element', 'Batman'),
                'hobbies' => ['Cooking', 'Coding', 'Gaming'],
                'mother' => array(
                  'age' => 59,
                  'firstname' => 'Nadine',
                  'lastname'  => 'Plennevaux',
                  'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
                  'hobbies' => ['Reading', 'Gardening', 'Travelling']
                )
              );

              $soulmate = array(
                'age' => 28,
                'firstname' => 'Alex',
                'lastname'  => 'Smith',
                'favourite_movies' => array('Inception', 'Batman', 'Interstellar'),
                'hobbies' => ['Gaming', 'Reading', 'Photography']
              );

              $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
              $possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

              echo '<pre>';
              print_r($possible_hobbies_via_intersection);
              print_r($possible_hobbies_via_merge);
              echo '</pre>';
              ?>
              </div>
            </div>
          </section>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">6. More array exercises</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
$web_development = array(
  'frontend' => [],
  'backend' => []
);

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'JavaScript';
$web_development['frontend'][0] = 'html';
unset($web_development['frontend']['flash']);

echo '&lt;pre&gt;';
print_r($web_development);
echo '&lt;/pre&gt;';
?&gt;
</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $web_development = array(
              'frontend' => [],
              'backend' => []
            );

            $web_development['frontend'][] = 'xhtml';
            $web_development['backend'][] = 'Ruby on Rails';
            $web_development['frontend'][] = 'CSS';
            $web_development['frontend'][] = 'Flash';
            $web_development['frontend'][] = 'JavaScript';

            $web_development['frontend'][0] = 'html';

            unset($web_development['frontend']['flash']);

            echo '<pre>';
            print_r($web_development);
            echo '</pre>';
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