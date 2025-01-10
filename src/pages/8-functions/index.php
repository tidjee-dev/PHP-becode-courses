<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">

    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP Fundamentals : Functions | BeCode PHP Courses</title>
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
      <section>
        <h2 class="exos-title">PHP Functions : Exercises</h2>
        <section class="exos-container">
          <h2 class="exos-title">1. Capitalize first letter of a string</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function capitalizeFirstLetter($string) {
  if (preg_match('/[^\x20-\x7f]/', $string)) {
    $firstLetterCapitalized = mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8')) . mb_substr($string, 1, null, 'UTF-8');
    return $firstLetterCapitalized;
  }
  return ucfirst($string);
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="string"&gt;Enter a string:&lt;/label&gt;';
echo '&lt;input type="text" id="string" name="string" required value="' . (isset($_GET['string']) ? $_GET['string'] : '') . '"&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['string'])) {
  echo '&lt;p&gt;The string "' . $_GET['string'] . '" with the first letter capitalized is: &lt;br&gt;' . capitalizeFirstLetter($_GET['string']) . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter a string to capitalize the first letter.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function capitalizeFirstLetter($string)
            {
              if (preg_match('/[^\x20-\x7f]/', $string)) {
                $firstLetterCapitalized = mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8')) . mb_substr($string, 1, null, 'UTF-8');
                return $firstLetterCapitalized;
              }
              return ucfirst($string);
            }

            echo '<form method="GET">';
            echo '<label for="string">Enter a string:</label>';
            echo '<input type="text" id="string" name="string" required value="' . (isset($_GET['string']) ? $_GET['string'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['string'])) {
              echo '<p>The string "' . $_GET['string'] . '" with the first letter capitalized is: <br>' . capitalizeFirstLetter($_GET['string']) . '</p>';
            } else {
              echo '<p>Enter a string to capitalize the first letter.</p>';
            }

            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">2. Display the current year</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function displayCurrentYear() {
  return date('Y');
};

echo '&lt;p&gt;The current year is: ' . displayCurrentYear() . '&lt;/p&gt;';
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function displayCurrentYear()
            {
              return date('Y');
            };

            echo '<p>The current year is: ' . displayCurrentYear() . '</p>';
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">3. Display the current date, time, minutes and seconds</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function displayCurrentDateTime() {
  return date('Y-m-d H:i:s');
};

echo '&lt;p&gt;The current date, time, minutes and seconds are: &lt;br&gt;' . displayCurrentDateTime() . '&lt;/p&gt;';
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function displayCurrentDateTime()
            {
              return date('Y-m-d H:i:s');
            };

            echo '<p>The current date, time, minutes and seconds are: <br>' . displayCurrentDateTime() . '</p>';
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">4. Calculate the sum of two numbers</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function calculateSum($num1, $num2) {
  return $num1 + $num2;
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="num1"&gt;Enter the first number:&lt;/label&gt;';
echo '&lt;input type="number" id="num1" name="num1" required value="' . (isset($_GET['num1']) ? $_GET['num1'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;label for="num2"&gt;Enter the second number:&lt;/label&gt;';
echo '&lt;input type="number" id="num2" name="num2" required value="' . (isset($_GET['num2']) ? $_GET['num2'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['num1']) && isset($_GET['num2'])) {
  $num1 = $_GET['num1'];
  $num2 = $_G0ET['num2'];

  echo '&lt;p&gt;The sum of ' . $num1 . ' and ' . $num2 . ' is: ' . calculateSum($num1, $num2) . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter two numbers to calculate their sum.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function calculateSum($num1, $num2)
            {
              return $num1 + $num2;
            };

            echo '<form method="GET">';
            echo '<label for="num1">Enter the first number:</label>';
            echo '<input type="number" id="num1" name="num1" required value="' . (isset($_GET['num1']) ? $_GET['num1'] : '') . '">';
            echo '<label for="num2">Enter the second number:</label>';
            echo '<input type="number" id="num2" name="num2" required value="' . (isset($_GET['num2']) ? $_GET['num2'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['num1']) && isset($_GET['num2'])) {
              $num1 = $_GET['num1'];
              $num2 = $_GET['num2'];

              echo '<p>The sum of ' . $num1 . ' and ' . $num2 . ' is: ' . calculateSum($num1, $num2) . '</p>';
            } else {
              echo '<p>Enter two numbers to calculate their sum.</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">5. Update the 4. Calculate the sum of two numbers by checking if
            the inputs are numbers</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function calculateSumCheck($num3, $num4) {
  if (is_numeric($num3) && is_numeric($num4)) {
    return '&lt;p&gt;The sum of ' . $num3 . ' and ' . $num4 . ' is: ' . $num3 + $num4 . '&lt;/p&gt;';
  }
  return 'Error: argument is the not a number.';
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="num3"&gt;Enter the first number:&lt;/label&gt;';
echo '&lt;input type="number" id="num3" name="num3" required value="' . (isset($_GET['num3']) ? $_GET['num3'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;label for="num4"&gt;Enter the second number:&lt;/label&gt;';
echo '&lt;input type="text" id="num4" name="num4" required value="' . (isset($_GET['num4']) ? $_GET['num4'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['num3']) && isset($_GET['num4'])) {
  $num3 = $_GET['num3'];
  $num4 = $_GET['num4'];

  echo calculateSumCheck($num3, $num4);
} else {
  echo '&lt;p&gt;Enter two numbers to calculate their sum.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function calculateSumCheck($num3, $num4)
            {
              if (is_numeric($num3) && is_numeric($num4)) {
                return '<p>The sum of ' . $num3 . ' and ' . $num4 . ' is: ' . $num3 + $num4 . '</p>';
              }
              return 'Error: argument is the not a number.';
            };

            echo '<form method="GET">';
            echo '<label for="num3">Enter the first number:</label>';
            echo '<input type="number" id="num3" name="num3" required value="' . (isset($_GET['num3']) ? $_GET['num3'] : '') . '">';
            echo '<label for="num4">Enter the second number:</label>';
            echo '<input type="text" id="num4" name="num4" required value="' . (isset($_GET['num4']) ? $_GET['num4'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['num3']) && isset($_GET['num4'])) {
              $num3 = $_GET['num3'];
              $num4 = $_GET['num4'];

              echo calculateSumCheck($num3, $num4);
            } else {
              echo '<p>Enter two numbers to calculate their sum.</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">6. Create an acronym from a string</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function createAcronym($string) {
  $words = explode(" ", $string);
  $initials = "";
  foreach ($words as $word) {
    $word = trim($word);
    $initials .= strtoupper($word[0]);
  }
  return $initials;
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="string2"&gt;Enter a string:&lt;/label&gt;';
echo '&lt;input type="text" id="string" name="string2" required value="' . (isset($_GET['string2']) ? $_GET['string2'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['string2'])) {
  $string = htmlspecialchars($_GET['string2']);
  $acronym = createAcronym($string);
  echo '&lt;p&gt;The acronym of "' . $string . '" is: ' . $acronym . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter a string to create its acronym.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function createAcronym($string)
            {
              $words = explode(" ", $string);
              $initials = "";
              foreach ($words as $word) {
                $word = trim($word);
                $initials .= strtoupper($word[0]);
              }
              return $initials;
            };

            echo '<form method="GET">';
            echo '<label for="string2">Enter a string:</label>';
            echo '<input type="text" id="string2" name="string2" required value="' . (isset($_GET['string2']) ? $_GET['string2'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['string2'])) {
              $string = htmlspecialchars($_GET['string2']);
              $acronym = createAcronym($string);
              echo '<p>The acronym of "' . $string . '" is: ' . $acronym . '</p>';
            } else {
              echo '<p>Enter a string to create its acronym.</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">7. Replace "ae" with "æ"</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function replaceAE($string) {
  return str_replace(['ae', 'AE'], 'æ', $string);
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="string3"&gt;Enter a string:&lt;/label&gt;';
echo '&lt;input type="text" id="string3" name="string3" required value="' . (isset($_GET['string3']) ? $_GET['string3'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['string3'])) {
  $string = htmlspecialchars($_GET['string3']);
  $result = replaceAE($string);
  echo '&lt;p&gt;The string "' . $string . '" with "ae" replaced with "æ" is: ' . $result . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter a string to replace "ae" with "æ".&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function replaceAE($string)
            {
              return str_replace(['ae', 'AE'], 'æ', $string);
            };


            echo '<form method="GET">';
            echo '<label for="string3">Enter a string:</label>';
            echo '<input type="text" id="string3" name="string3" required value="' . (isset($_GET['string3']) ? $_GET['string3'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['string3'])) {
              $string = htmlspecialchars($_GET['string3']);
              $result = replaceAE($string);
              echo '<p>The string "' . $string . '" with "ae" replaced with "æ" is: ' . $result . '</p>';
            } else {
              echo '<p>Enter a string to replace "ae" with "æ".</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">8. Replace "æ" with "ae"</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function replaceAe2($string) {
  return str_replace('æ', 'ae', $string);
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="string4"&gt;Enter a string:&lt;/label&gt;';
echo '&lt;input type="text" id="string4" name="string4" required value="' . (isset($_GET['string4']) ? $_GET['string4'] : '') . '"&gt;';
echo '&lt;br&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['string4'])) {
  $string = htmlspecialchars($_GET['string4']);
  $result = replaceAe2($string);
  echo '&lt;p&gt;The string "' . $string . '" with "æ" replaced with "ae" is: ' . $result . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter a string to replace "æ" with "ae".&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function replaceAe2($string)
            {
              return str_replace('æ', 'ae', $string);
            };


            echo '<form method="GET">';
            echo '<label for="string4">Enter a string:</label>';
            echo '<input type="text" id="string4" name="string4" required value="' . (isset($_GET['string4']) ? $_GET['string4'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['string4'])) {
              $string = htmlspecialchars($_GET['string4']);
              $result = replaceAe2($string);
              echo '<p>The string "' . $string . '" with "æ" replaced with "ae" is: ' . $result . '</p>';
            } else {
              echo '<p>Enter a string to replace "æ" with "ae".</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">9. The feedback function</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function feedback($message, $type = 'info') {
  return '&lt;div class="alert alert-' . $type . '"&gt;' . '&lt;strong&gt;' . $type . '&lt;/strong&gt; ' . $message . '&lt;/div&gt;';
};

echo feedback('This is an info message.', 'info');
echo feedback('This is a success message.', 'success');
echo feedback('This is a warning message.', 'warning');
echo feedback('This is an error message.', 'error');
echo feedback("Incorrect email address", "error");
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function feedback($message, $type = 'info')
            {
              return '<div class="alert alert-' . $type . '">' . '<strong>' . ucfirst($type) . ':</strong> ' . $message . '</div>';
            };

            echo feedback('This is an info message.', 'info');
            echo feedback('This is a success message.', 'success');
            echo feedback('This is a warning message.', 'warning');
            echo feedback('This is an error message.', 'error');
            echo feedback("Incorrect email address", "error");
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">10. Random string generator function</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function randomString($min, $max) {
  $length = rand($min, $max);
  $characters = 'abcdefghijklmnopqrstuvwxyz';
  $string = '';
  for ($i = 0; $i &lt; $length; $i++) {
    $string .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $string;
};

echo '&lt;form&gt;';
echo '&lt;h1&gt;Generate a new word&lt;/h1&gt;';
echo '&lt;p&gt;' . randomString(1, 5) . '&lt;/p&gt;';
echo '&lt;p&gt;' . randomString(7, 15) . '&lt;/p&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Generate&lt;/button&gt;';
echo '&lt;/form&gt;';
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function randomString($min, $max)
            {
              $length = rand($min, $max);
              $characters = 'abcdefghijklmnopqrstuvwxyz';
              $string = '';
              for ($i = 0; $i < $length; $i++) {
                $string .= $characters[rand(0, strlen($characters) - 1)];
              }
              return $string;
            }

            echo '<form>';
            echo "<h1>Generate a new word</h1>";
            echo "<p>" . randomString(1, 5) . "</p>";
            echo "<p>" . randomString(7, 15) . "</p>";
            echo "<button type='submit' class='btn-sm btn-outline-primary'>Generate</button>";
            echo '</form>';
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">11. De-Capitalize String</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function deCapitalize($string) {
  return strtolower($string);
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="string"&gt;Enter a string&lt;/label&gt;';
echo '&lt;input type="text" id="string" name="string" required value="' . (isset($_GET['string']) ? $_GET['string'] : '') . '"&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';

if (isset($_GET['string'])) {
  $string = htmlspecialchars($_GET['string']);
  $result = deCapitalize($string);
  echo '&lt;p&gt;The string "' . $string . '" de-capitalized is: ' . $result . '&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter a string to de-capitalize.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function deCapitalize($string)
            {
              return strtolower($string);
            };

            echo '<form method="GET">';
            echo '<label for="string5">Enter a string</label>';
            echo '<input type="text" id="string5" name="string5" required value="' . (isset($_GET['string5']) ? $_GET['string5'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['string5'])) {
              $string = htmlspecialchars($_GET['string5']);
              $result = deCapitalize($string);
              echo '<p>The string "' . $string . '" de-capitalized is: ' . $result . '</p>';
            } else {
              echo '<p>Enter a string to de-capitalize.</p>';
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h2 class="exos-title">12. calculate cone volume</h2>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">&lt;?php
function calculateConeVolume($radius, $height) {
  return (3.14 * pow($radius, 2) * $height) / 3;
};

echo '&lt;form method="GET"&gt;';
echo '&lt;label for="radius"&gt;Enter the radius of the cone&lt;/label&gt;';
echo '&lt;input type="number" id="radius" name="radius" required min="0" value="' . (isset($_GET['radius']) ? $_GET['radius'] : '') . '"&gt;';
echo '&lt;label for="height"&gt;Enter the height of the cone&lt;/label&gt;';
echo '&lt;input type="number" id="height" name="height" required min="0" value="' . (isset($_GET['height']) ? $_GET['height'] : '') . '"&gt;';
echo '&lt;button type="submit" class="btn-sm btn-outline-primary"&gt;Submit&lt;/button&gt;';
echo '&lt;/form&gt;';
if (isset($_GET['radius']) && isset($_GET['height'])) {
  $radius = $_GET['radius'];
  $height = $_GET['height'];
  echo '&lt;p&gt;The volume of the cone with a radius of ' . $radius . ' and a height of ' . $height . ' is: ' . calculateConeVolume($radius, $height) . ' cm&lt;sup&gt;3&lt;/sup&gt;&lt;/p&gt;';
} else {
  echo '&lt;p&gt;Enter the radius and height of the cone to calculate its volume.&lt;/p&gt;';
}
?&gt;</code></pre>
          </div>
          <div class="exo">
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result scrollable">
              <?php
            function calculateConeVolume($radius, $height)
            {
              return (3.14 * pow($radius, 2) * $height) / 3;
            };

            echo '<form method="GET">';
            echo '<label for="radius">Enter the radius of the cone</label>';
            echo '<input type="number" id="radius" name="radius" required min="0" value="' . (isset($_GET['radius']) ? $_GET['radius'] : '') . '">';
            echo '<label for="height">Enter the height of the cone</label>';
            echo '<input type="number" id="height" name="height" required min="0" value="' . (isset($_GET['height']) ? $_GET['height'] : '') . '">';
            echo '<button type="submit" class="btn-sm btn-outline-primary">Submit</button>';
            echo '</form>';

            if (isset($_GET['radius']) && isset($_GET['height'])) {
              $radius = $_GET['radius'];
              $height = $_GET['height'];
              echo '<p>The volume of the cone with a radius of ' . $radius . ' and a height of ' . $height . ' is: ' . calculateConeVolume($radius, $height) . ' cm<sup>3</sup></p>';
            } else {
              echo '<p>Enter the radius and height of the cone to calculate its volume.</p>';
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