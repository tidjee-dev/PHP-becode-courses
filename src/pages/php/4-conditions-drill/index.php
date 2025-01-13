<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/tokyo-night-dark.min.css">
    <link rel="stylesheet" href="/assets/styles.css">
    <title>PHP Fundamentals : Conditions Drill | BeCode PHP Courses</title>
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
          1. Clean your room!
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">$room_is_filthy = true;

function cleanup_room()
{
  echo "<br>Cleaning the room...";
}

if ($room_is_filthy) {
  echo "Yuk, Room is dirty: let's clean it up!";
  cleanup_room();
  echo "<br>Room is now clean!";
  $room_is_filthy = false;
} else {
  echo "<br>Nothing to do, room is neat.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          $room_is_filthy = true;

          function cleanup_room()
          {
            echo "<br><br>Cleaning the room...<br>";
          }

          if ($room_is_filthy) {
            echo "Yuk, Room is dirty: let's clean it up!";
            cleanup_room();
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
          } else {
            echo "<br>Nothing to do, room is neat.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          2. How your room is?
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

if (isset($_GET['room_state'])) {
  $room_state = $_GET['room_state'];

  if ($room_state == "health hazard") {
    echo "🚨 Warning! Your room is a health hazard! You need a hazmat team!";
  } elseif ($room_state == "filthy") {
    echo "😷 Your room is filthy! Let's get started with some serious cleaning.";
  } elseif ($room_state == "dirty") {
    echo "🧹 Your room is dirty. Time for some light cleaning!";
  } elseif ($room_state == "clean") {
    echo "✨ Your room is clean. Keep up the good work!";
  } elseif ($room_state == "immaculate") {
    echo "🌟 Your room is immaculate! Perfect condition.";
  } else {
    echo "❓ Unknown room state!";
  }
} else {
  echo "Please select a room state and submit.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <form method="GET">
            <label for="room-state">Choose your room state:
              <select name="room_state" id="room-state">
                <option value="">Select your room state</option>
                <option value="health hazard"
                        <?= isset($_GET['room_state']) && $_GET['room_state'] == "health hazard" ? 'selected' : '' ?>>
                  Health Hazard</option>
                <option value="filthy"
                        <?= isset($_GET['room_state']) && $_GET['room_state'] == "filthy" ? 'selected' : '' ?>>
                  Filthy</option>
                <option value="dirty"
                        <?= isset($_GET['room_state']) && $_GET['room_state'] == "dirty" ? 'selected' : '' ?>>
                  Dirty</option>
                <option value="clean"
                        <?= isset($_GET['room_state']) && $_GET['room_state'] == "clean" ? 'selected' : '' ?>>
                  Clean</option>
                <option value="immaculate"
                        <?= isset($_GET['room_state']) && $_GET['room_state'] == "immaculate" ? 'selected' : '' ?>>
                  Immaculate</option>
              </select>
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>

          <div class="exo-result">
            <?php
          $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

          if (isset($_GET['room_state'])) {
            $room_state = $_GET['room_state'];

            if ($room_state == "health hazard") {
              echo "🚨 Warning! Your room is a health hazard! You need a hazmat team!";
            } elseif ($room_state == "filthy") {
              echo "😷 Your room is filthy! Let's get started with some serious cleaning.";
            } elseif ($room_state == "dirty") {
              echo "🧹 Your room is dirty. Time for some light cleaning!";
            } elseif ($room_state == "clean") {
              echo "✨ Your room is clean. Keep up the good work!";
            } elseif ($room_state == "immaculate") {
              echo "🌟 Your room is immaculate! Perfect condition.";
            } else {
              echo "❓ Unknown room state!<br><br>Please select a room state and submit.";
            }
          } else {
            echo "Please select a room state and submit.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          3. Display a different greeting according to the user's age.
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['age'])) {
  $age = $_GET['age'];

  if ($age >= 0 && $age < 12) {
    echo "Hello kiddo.";
  } elseif ($age >= 12 && $age < 18) {
    echo "Hello Teenager.";
  } elseif ($age >= 18 && $age < 115) {
    echo "Hello Adult.";
  } elseif ($age >= 115) {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
  } else {
    echo "Please enter a valid age.";
  }
} else {
  echo "Please enter your age.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <form method="GET">
            <label for="age">Enter your age:
              <input type="number" name="age" id="age" min="0"
                     value="<?= isset($_GET['age']) ? $_GET['age'] : '' ?>">
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <div class="exo-result">
            <?php
          if (isset($_GET['age'])) {
            $age = $_GET['age'];

            if ($age >= 0 && $age < 12) {
              echo "Hello kiddo.";
            } elseif ($age >= 12 && $age < 18) {
              echo "Hello Teenager.";
            } elseif ($age >= 18 && $age < 115) {
              echo "Hello Adult.";
            } elseif ($age >= 115) {
              echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            } else {
              echo "Please enter a valid age.";
            }
          } else {
            echo "Please enter your age.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          4. Display a different greeting according to the user's age and gender.
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['age2']) && isset($_GET['gender'])) {
  $age = $_GET['age2'];
  $gender = $_GET['gender'];

  if ($gender === "male") {
    if ($age >= 0 && $age < 12) {
      echo "Hello little boy.";
    } elseif ($age >= 12 && $age < 18) {
      echo "Hello Mister Teenager.";
    } elseif ($age >= 18 && $age < 115) {
      echo "Hello Mister.";
    } elseif ($age >= 115) {
      echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    } else {
      echo "Please enter a valid age.";
    }
  } elseif ($gender === "female") {
    if ($age >= 0 && $age < 12) {
      echo "Hello little girl.";
    } elseif ($age >= 12 && $age < 18) {
      echo "Hello Miss Teenager.";
    } elseif ($age >= 18 && $age < 115) {
      echo "Hello Madam.";
    } elseif ($age >= 115) {
      echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    } else {
      echo "Please enter a valid age.";
    }
  } else {
    echo "Please select a gender.";
  }
} else {
  echo "Please enter your age and select a gender.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <form method="GET">
            <label for="age2">Enter your age:
              <input type="number" name="age2" id="age2" min="0"
                     value="<?= isset($_GET['age2']) ? $_GET['age2'] : '' ?>">
            </label>
            <div>
              <label for="male">
                <input type="radio" name="gender" value="male" id="male"
                       <?= isset($_GET['gender']) && $_GET['gender'] === "male" ? 'checked' : '' ?>>
                Male
              </label>
              <label for="female">
                <input type="radio" name="gender" value="female" id="female"
                       <?= isset($_GET['gender']) && $_GET['gender'] === "female" ? 'checked' : '' ?>>
                Female
              </label>
            </div>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <div class="exo-result">
            <?php
          if (isset($_GET['age2']) && isset($_GET['gender'])) {
            $age = $_GET['age2'];
            $gender = $_GET['gender'];

            if ($gender === "male") {
              if ($age >= 0 && $age < 12) {
                echo "Hello little boy.";
              } elseif ($age >= 12 && $age < 18) {
                echo "Hello Mister Teenager.";
              } elseif ($age >= 18 && $age < 115) {
                echo "Hello Mister.";
              } elseif ($age >= 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
              } else {
                echo "Please enter a valid age.";
              }
            } elseif ($gender === "female") {
              if ($age >= 0 && $age < 12) {
                echo "Hello little girl.";
              } elseif ($age >= 12 && $age < 18) {
                echo "Hello Miss Teenager.";
              } elseif ($age >= 18 && $age < 115) {
                echo "Hello Madam.";
              } elseif ($age >= 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
              } else {
                echo "Please enter a valid age.";
              }
            } else {
              echo "Please select a gender.";
            }
          } else {
            echo "Please enter your age and select a gender.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          5. Display a different greeting according to the user's age, gender and mothertongue.
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['age3']) && isset($_GET['gender2']) && isset($_GET['language'])) {
  $age = $_GET['age3'];
  $gender = $_GET['gender2'];
  $language = $_GET['language'];

  if ($language === "english") {
    if ($gender === "male") {
      if ($age >= 0 && $age < 12) {
        echo "Hello little boy.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Hello Mister Teenager.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Hello Mister.";
      } elseif ($age >= 115) {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
      } else {
        echo "Please enter a valid age.";
      }
    } elseif ($gender === "female") {
      if ($age >= 0 && $age < 12) {
        echo "Hello little girl.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Hello Miss Teenager.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Hello Madam.";
      } elseif ($age >= 115) {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
      } else {
        echo "Please enter a valid age.";
      }
    } else {
      echo "Please select a gender.";
    }
  } elseif ($language === "french") {
    if ($gender === "male") {
      if ($age >= 0 && $age < 12) {
        echo "Bonjour petit garçon.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Bonjour jeune homme.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Bonjour Monsieur.";
      } elseif ($age >= 115) {
        echo "Wow! Toujours vivant ? Êtes-vous un robot, comme moi ? Puis-je vous faire un câlin ?";
      } else {
        echo "Veuillez entrer un âge valide.";
      }
    } elseif ($gender === "female") {
      if ($age >= 0 && $age < 12) {
        echo "Bonjour petite fille.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Bonjour jeune femme.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Bonjour Madame.";
      } elseif ($age >= 115) {
        echo "Wow! Toujours vivante ? Êtes-vous un robot, comme moi ? Puis-je vous faire un câlin ?";
      } else {
        echo "Veuillez entrer un âge valide.";
      }
    } else {
      echo "Veuillez sélectionner un genre.";
    }
  } elseif ($language === "spanish") {
    if ($gender === "male") {
      if ($age >= 0 && $age < 12) {
        echo "Hola pequeño.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Hola joven.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Hola Señor.";
      } elseif ($age >= 115) {
        echo "¡Vaya! ¿Todavía vivo? ¿Eres un robot, como yo? ¿Puedo abrazarte?";
      } else {
        echo "Por favor, ingrese una edad válida.";
      }
    } elseif ($gender === "female") {
      if ($age >= 0 && $age < 12) {
        echo "Hola pequeña.";
      } elseif ($age >= 12 && $age < 18) {
        echo "Hola jovencita.";
      } elseif ($age >= 18 && $age < 115) {
        echo "Hola Señora.";
      } elseif ($age >= 115) {
        echo "¡Vaya! ¿Todavía viva? ¿Eres un robot, como yo? ¿Puedo abrazarte?";
      } else {
        echo "Por favor, ingrese una edad válida.";
      }
    } else {
      echo "Por favor seleccione un género.";
    }
  } else {
    echo "Please select a valid language.";
  }
} else {
  echo "Please fill in all fields.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <form method="GET">
            <label for="age3">Enter your age:
              <input type="number" name="age3" id="age3" min="0"
                     value="<?= isset($_GET['age3']) ? $_GET['age3'] : '' ?>">
            </label>
            <div>
              <label for="male2">
                <input type="radio" name="gender2" value="male" id="male2"
                       <?= isset($_GET['gender2']) && $_GET['gender2'] === "male" ? 'checked' : '' ?>>
                Male
              </label>
              <label for="female2">
                <input type="radio" name="gender2" value="female" id="female2"
                       <?= isset($_GET['gender2']) && $_GET['gender2'] === "female" ? 'checked' : '' ?>>
                Female
              </label>
            </div>
            <label for="language">
              <select name="language" id="language">
                <option value="">Select your mothertongue</option>
                <option value="english"
                        <?= isset($_GET['language']) && $_GET['language'] == "english" ? 'selected' : '' ?>>
                  English</option>
                <option value="french"
                        <?= isset($_GET['language']) && $_GET['language'] == "french" ? 'selected' : '' ?>>
                  French</option>
                <option value="spanish"
                        <?= isset($_GET['language']) && $_GET['language'] == "spanish" ? 'selected' : '' ?>>
                  Spanish</option>
              </select>
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <div class="exo-result">
            <?php
          if (isset($_GET['age3']) && isset($_GET['gender2']) && isset($_GET['language'])) {
            $age = $_GET['age3'];
            $gender = $_GET['gender2'];
            $language = $_GET['language'];

            if ($language === "english") {
              if ($gender === "male") {
                if ($age >= 0 && $age < 12) {
                  echo "Hello little boy.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Hello Mister Teenager.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Hello Mister.";
                } elseif ($age >= 115) {
                  echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
                } else {
                  echo "Please enter a valid age.";
                }
              } elseif ($gender === "female") {
                if ($age >= 0 && $age < 12) {
                  echo "Hello little girl.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Hello Miss Teenager.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Hello Madam.";
                } elseif ($age >= 115) {
                  echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
                } else {
                  echo "Please enter a valid age.";
                }
              } else {
                echo "Please select a gender.";
              }
            } elseif ($language === "french") {
              if ($gender === "male") {
                if ($age >= 0 && $age < 12) {
                  echo "Bonjour petit garçon.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Bonjour jeune homme.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Bonjour Monsieur.";
                } elseif ($age >= 115) {
                  echo "Wow! Toujours vivant ? Êtes-vous un robot, comme moi ? Puis-je vous faire un câlin ?";
                } else {
                  echo "Veuillez entrer un âge valide.";
                }
              } elseif ($gender === "female") {
                if ($age >= 0 && $age < 12) {
                  echo "Bonjour petite fille.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Bonjour jeune femme.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Bonjour Madame.";
                } elseif ($age >= 115) {
                  echo "Wow! Toujours vivante ? Êtes-vous un robot, comme moi ? Puis-je vous faire un câlin ?";
                } else {
                  echo "Veuillez entrer un âge valide.";
                }
              } else {
                echo "Veuillez sélectionner un genre.";
              }
            } elseif ($language === "spanish") {
              if ($gender === "male") {
                if ($age >= 0 && $age < 12) {
                  echo "Hola pequeño.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Hola joven.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Hola Señor.";
                } elseif ($age >= 115) {
                  echo "¡Vaya! ¿Todavía vivo? ¿Eres un robot, como yo? ¿Puedo abrazarte?";
                } else {
                  echo "Por favor, ingrese una edad válida.";
                }
              } elseif ($gender === "female") {
                if ($age >= 0 && $age < 12) {
                  echo "Hola pequeña.";
                } elseif ($age >= 12 && $age < 18) {
                  echo "Hola jovencita.";
                } elseif ($age >= 18 && $age < 115) {
                  echo "Hola Señora.";
                } elseif ($age >= 115) {
                  echo "¡Vaya! ¿Todavía viva? ¿Eres un robot, como yo? ¿Puedo abrazarte?";
                } else {
                  echo "Por favor, ingrese una edad válida.";
                }
              } else {
                echo "Por favor seleccione un género.";
              }
            } else {
              echo "Please select a valid language.";
            }
          } else {
            echo "Please fill in all fields.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          6. The Girl Soccer team
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['player-name']) && isset($_GET['player-age']) && isset($_GET['player-gender'])) {
  $playerName = $_GET['player-name'];
  $playerAge = $_GET['player-age'];
  $playerGender = $_GET['player-gender'];

  if ($playerGender === "male") {
    echo "Hello Mr. $playerName, sorry you don't fit the criteria.";
  } elseif ($playerGender === "female") {
    if ($playerAge >= 21 && $playerAge <= 40) {
      echo "Hello Ms. $playerName, welcome to the team !";
    } else {
      echo "Hello Ms. $playerName, sorry you don't fit the criteria.";
    }
  } else {
    echo "Please select a valid gender.";
  }
} else {
  echo "Please fill in all fields.";
}
</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>
          <form method="GET">
            <label for="player-name">Enter your name:
              <input type="text" name="player-name" id="player-name"
                     value="<?= isset($_GET['player-name']) ? $_GET['player-name'] : '' ?>">
            </label>
            <label for="player-age">Enter your age:
              <input type="number" name="player-age" id="player-age" min="0"
                     value="<?= isset($_GET['player-age']) ? $_GET['player-age'] : '' ?>">
            </label>
            <div>
              <label for="male3">
                <input type="radio" name="gender3" value="male" id="male3"
                       <?= isset($_GET['gender3']) && $_GET['gender3'] === "male" ? 'checked' : '' ?>>Male
              </label>
              <label for="female3">
                <input type="radio" name="gender3" value="female" id="female3"
                       <?= isset($_GET['gender3']) && $_GET['gender3'] === "female" ? 'checked' : '' ?>>Female
              </label>
            </div>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <div class="exo-result">
            <?php
          if (isset($_GET['player-name']) && isset($_GET['player-age']) && isset($_GET['gender3'])) {
            $playerName = $_GET['player-name'];
            $playerAge = $_GET['player-age'];
            $playerGender = $_GET['gender3'];

            if ($playerGender === "male") {
              echo "Hello Mr. $playerName, sorry you don't fit the criteria.";
            } elseif ($playerGender === "female") {
              if ($playerAge >= 21 && $playerAge <= 40) {
                echo "Hello Ms. $playerName, welcome to the team !";
              } else {
                echo "Hello Ms. $playerName, sorry you don't fit the criteria.";
              }
            } else {
              echo "Please select a valid gender.";
            }
          } else {
            echo "Please fill in all fields.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          7. Same as 6, but without ELSE
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (!isset($_GET['player-name2']) || !isset($_GET['player-age2']) || !isset($_GET['gender4'])) {
  echo "Please fill in all fields.";
}

if (isset($_GET['player-name2']) && isset($_GET['player-age2']) && isset($_GET['gender4'])) {
  $playerName = $_GET['player-name2'];
  $playerAge = $_GET['player-age2'];
  $playerGender = $_GET['gender4'];

  $message = "Please select a valid gender.";

  if ($playerGender === "male") {
    $message = "Hello Mr. $playerName, sorry you don't fit the criteria.";
  }

  if ($playerGender === "female") {
    $message = "Hello Ms. $playerName, sorry you don't fit the criteria.";
    if ($playerAge >= 21 && $playerAge <= 40) {
      $message = "Hello Ms. $playerName, welcome to the team !";
    }
  }

  echo $message;
} else {
  echo "Please fill in all fields.";
}

</code></pre>
        </div>

        <div class="exo">
          <h3 class="exo-title">Result:</h3>

          <form method="GET">
            <label for="player-name2">Enter your name:
              <input type="text" name="player-name2" id="player-name2"
                     value="<?= isset($_GET['player-name2']) ? $_GET['player-name2'] : '' ?>">
            </label>
            <label for="player-age2">Enter your age:
              <input type="number" name="player-age2" id="player-age2" min="0"
                     value="<?= isset($_GET['player-age2']) ? $_GET['player-age2'] : '' ?>">
            </label>
            <div>
              <label for="male4">
                <input type="radio" name="gender4" value="male" id="male4"
                       <?= isset($_GET['gender4']) && $_GET['gender4'] === "male" ? 'checked' : '' ?>>Male
              </label>
              <label for="female4">
                <input type="radio" name="gender4" value="female" id="female4"
                       <?= isset($_GET['gender4']) && $_GET['gender4'] === "female" ? 'checked' : '' ?>>Female
              </label>
            </div>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <div class="exo-result">
            <?php
          if (!isset($_GET['player-name2']) || !isset($_GET['player-age2']) || !isset($_GET['gender4'])) {
            echo "Please fill in all fields.";
          }

          if (isset($_GET['player-name2']) && isset($_GET['player-age2']) && isset($_GET['gender4'])) {
            $playerName = $_GET['player-name2'];
            $playerAge = $_GET['player-age2'];
            $playerGender = $_GET['gender4'];

            $message = "Please select a valid gender.";

            if ($playerGender === "male") {
              $message = "Hello Mr. $playerName, sorry you don't fit the criteria.";
            }

            if ($playerGender === "female") {
              $message = "Hello Ms. $playerName, sorry you don't fit the criteria.";
              if ($playerAge >= 21 && $playerAge <= 40) {
                $message = "Hello Ms. $playerName, welcome to the team !";
              }
            }

            echo $message;
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          8. "School sucks!" Exercise
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['student-note']) && $_GET['student-note'] !== '') {
  $studentNote = $_GET['student-note'];

  if ($studentNote < 4) {
    echo "This work is really bad. What a dumb kid!";
  } elseif ($studentNote >= 5 && $studentNote <= 9) {
    echo "This is not sufficient. More studying is required.";
  } elseif ($studentNote === 10) {
    echo "Barely enough!";
  } elseif ($studentNote >= 11 && $studentNote <= 14) {
    echo "Not bad!";
  } elseif ($studentNote >= 15 && $studentNote <= 19) {
    echo "Bravo, bravissimo!";
  } elseif ($studentNote === 20) {
    echo "Too good to be true : confront the cheater!";
  } else {
    echo "Please enter a valid note.";
  }
} else {
  echo "Please fill in all fields.";
}
</code></pre>

        </div>
        <div class="exo">
          <form method="GET">
            <label for="student-note">Enter student's note:
              <input type="number" name="student-note" id="student-note" min="0" max="20"
                     value="<?= isset($_GET['student-note']) ? $_GET['student-note'] : '' ?>">
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          if (isset($_GET['student-note']) && $_GET['student-note'] !== '') {
            $studentNote = $_GET['student-note'];

            if ($studentNote >= 0 && $studentNote < 4) {
              echo "This work is really bad. What a dumb kid!";
            } elseif ($studentNote >= 5 && $studentNote <= 9) {
              echo "This is not sufficient. More studying is required.";
            } elseif ($studentNote === 10) {
              echo "Barely enough!";
            } elseif ($studentNote >= 11 && $studentNote <= 14) {
              echo "Not bad!";
            } elseif ($studentNote >= 15 && $studentNote <= 19) {
              echo "Bravo, bravissimo!";
            } elseif ($studentNote === 20) {
              echo "Too good to be true : confront the cheater!";
            } else {
              echo "Please enter a valid note.";
            }
          } else {
            echo "Please fill in all fields.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          9. Same as 8 but with using "Switch" structure.
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['student-note2']) && $_GET['student-note2'] !== '') {
  $studentNote = $_GET['student-note2'];

  switch ($studentNote) {
    case $studentNote >= 0 && $studentNote < 4:
      echo "This work is really bad. What a dumb kid!";
      break;
    case $studentNote >= 5 && $studentNote <= 9:
      echo "This is not sufficient. More studying is required.";
      break;
    case $studentNote === 10:
      echo "Barely enough!";
      break;
    case $studentNote >= 11 && $studentNote <= 14:
      echo "Not bad!";
      break;
    case $studentNote >= 15 && $studentNote <= 19:
      echo "Bravo, bravissimo!";
      break;
    case $studentNote === 20:
      echo "Too good to be true : confront the cheater!";
      break;
    default:
      echo "Please enter a valid note.";
  }
} else {
  echo "Please fill in all fields.";
}
</code></pre>
        </div>

        <div class="exo">
          <form method="GET">
            <label for="student-note2">Enter student's note:
              <input type="number" name="student-note2" id="student-note2" min="0" max="20"
                     value="<?= isset($_GET['student-note2']) ? $_GET['student-note2'] : '' ?>">
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          if (isset($_GET['student-note2']) && $_GET['student-note2'] !== '') {
            $studentNote = $_GET['student-note2'];

            switch ($studentNote) {
              case $studentNote >= 0 && $studentNote < 4:
                echo "This work is really bad. What a dumb kid!";
                break;
              case $studentNote >= 5 && $studentNote <= 9:
                echo "This is not sufficient. More studying is required.";
                break;
              case $studentNote === 10:
                echo "Barely enough!";
                break;
              case $studentNote >= 11 && $studentNote <= 14:
                echo "Not bad!";
                break;
              case $studentNote >= 15 && $studentNote <= 19:
                echo "Bravo, bravissimo!";
                break;
              case $studentNote === 20:
                echo "Too good to be true : confront the cheater!";
                break;
              default:
                echo "Please enter a valid note.";
            }
          } else {
            echo "Please enter the student's note.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section class="exos-container">
        <h2 class="exos-title">
          10. Ternary operators
        </h2>
        <div class="code-container">
          <h3 class="code-title">Code:</h3>
          <pre><code class="language-php">if (isset($_GET['age4']) && $_GET['age4'] !== '') {
  $age = $_GET['age4'];

  $message = $age >= 18 ? "You are an adult." : "You are not an adult.";

  echo $message;
} else {
  echo "Please enter your age.";
}
</code></pre>
        </div>

        <div class="exo">
          <form method="GET">
            <label for="age4">Enter your age:
              <input type="number" name="age4" id="age4" min="0"
                     value="<?= isset($_GET['age4']) ? $_GET['age4'] : '' ?>">
            </label>
            <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
          </form>
          <h3 class="exo-title">Result:</h3>
          <div class="exo-result">
            <?php
          if (isset($_GET['age4']) && $_GET['age4'] !== '') {
            $age = $_GET['age4'];

            $message = $age >= 18 ? "You are an adult." : "You are not an adult.";

            echo $message;
          } else {
            echo "Please enter your age.";
          }
          ?>
          </div>
        </div>
      </section>

      <hr class="separator">

      <section>
        <h2 class="exos-title">
          11. Ternary exercises
        </h2>

        <section class="exos-container">
          <h3 class="exos-title">Exercise 1: Ternary</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">if (isset($_GET['gender5']) && $_GET['gender5'] !== '') {
  $gender = $_GET['gender5'];

  $hello = $gender === "male" ? "Hello Mister." : "Hello Miss.";

  echo $hello;
} else {
  echo "Please select a gender!";
}
</code></pre>
          </div>
          <div class="exo">
            <form method="GET">
              <div>
                <label for="male5">
                  <input type="radio" name="gender5" value="male" id="male5"
                         <?= isset($_GET['gender5']) && $_GET['gender5'] === "male" ? 'checked' : '' ?>>Male
                </label>
                <label for="female5">
                  <input type="radio" name="gender5" value="female" id="female5"
                         <?= isset($_GET['gender5']) && $_GET['gender5'] === "female" ? 'checked' : '' ?>>Female
                </label>
              </div>
              <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
            </form>
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            if (isset($_GET['gender5']) && $_GET['gender5'] !== '') {
              $gender = $_GET['gender5'];

              $hello = $gender === "male" ? "Hello Mister." : "Hello Miss.";

              echo $hello;
            } else {
              echo "Please select a gender!";
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">Exercise 2: Unicorn</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">if (isset($_GET['species']) && $_GET['species'] !== '') {
  $species = $_GET['species'];
  $humanGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNjNpaWFlcGY1OTd1NDhxNGQ5bjI5eTk0dDczcnZsM3k2b2hyZjN6NCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PZSKakN081R83ah0IH/giphy.gif";
  $catGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExYndnMXhhMGVmazI3ZWxzcGc3bWx0a3hzMnh3eWpjcTkxc21hZ3hrNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PoGpvcdbg4wulrL7nO/giphy.gif";
  $unicornGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExMGIzcTQwNWh1aGwzYmhwdjUzampzb3Ntbzh4ejh4cDZhejZ4amI5NyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/2A75RyXVzzSI2bx4Gj/giphy.gif";

  $gif = $species === "human" ? $humanGif : ($species === "cat" ? $catGif : $unicornGif);

  echo "<h2>You chose: " . ucfirst($species) . "!</h2>";
  echo "&lt;img src='$gif' alt='$species gif'&gt;";
} else {
  echo "Please select a species!";
}
</code></pre>
          </div>
          <div class="exo">
            <form method="GET">
              <div>
                Are you
                <label for="human">
                  <input type="radio" name="species" value="human" id="human"
                         <?= isset($_GET['species']) && $_GET['species'] === "human" ? 'checked' : '' ?>>
                  a Human,
                </label>
                <label for="cat">
                  <input type="radio" name="species" value="cat" id="cat"
                         <?= isset($_GET['species']) && $_GET['species'] === "cat" ? 'checked' : '' ?>>
                  a Cat or
                </label>
                <label for="unicorn">
                  <input type="radio" name="species" value="unicorn" id="unicorn"
                         <?= isset($_GET['species']) && $_GET['species'] === "unicorn" ? 'checked' : '' ?>>
                  a Unicorn
                </label>
                ?
              </div>
              <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
            </form>
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            if (isset($_GET['species']) && $_GET['species'] !== '') {
              $species = $_GET['species'];
              $humanGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNjNpaWFlcGY1OTd1NDhxNGQ5bjI5eTk0dDczcnZsM3k2b2hyZjN6NCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PZSKakN081R83ah0IH/giphy.gif";
              $catGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExYndnMXhhMGVmazI3ZWxzcGc3bWx0a3hzMnh3eWpjcTkxc21hZ3hrNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PoGpvcdbg4wulrL7nO/giphy.gif";
              $unicornGif = "https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExMGIzcTQwNWh1aGwzYmhwdjUzampzb3Ntbzh4ejh4cDZhejZ4amI5NyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/2A75RyXVzzSI2bx4Gj/giphy.gif";

              $gif = $species === "human" ? $humanGif : ($species === "cat" ? $catGif : $unicornGif);

              echo "<h2>You chose: " . ucfirst($species) . "!</h2>";
              echo "<img src='$gif' alt='$species gif'>";
            } else {
              echo "Please select a species!";
            }
            ?>
            </div>
          </div>
        </section>

        <hr class="separator">

        <section class="exos-container">
          <h3 class="exos-title">12. Real-life scenario : form field validation</h3>
          <div class="code-container">
            <h3 class="code-title">Code:</h3>
            <pre><code class="language-php">$firstname = $_GET['firstname'];
$email = $_GET['email'];
$errors = [];

if (isset($_GET['firstname'])) {
  if (empty($firstname)) {
    $errors[] = "First name is required.";
  } elseif (strlen($firstname) < 2) {
    $errors[] = "First name must be at least 2 characters long.";
  }
} else {
  $errors[] = "First name is required.";
}

if (isset($_GET['email'])) {
  if (empty($email)) {
    $errors[] = "Email is required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }
} else {
  $errors[] = "Email is required.";
}

if (!empty($errors)) {
  echo '<ul>';
  foreach ($errors as $error) {
    echo '<li style="color: red;">' . htmlspecialchars($error) . '</li>';
  }
  echo '</ul>';
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo '<p style="color: green;">Form submitted successfully!</p>';
  echo '<p>First Name: ' . htmlspecialchars($firstname) . '</p>';
  echo '<p>Email: ' . htmlspecialchars($email) . '</p>';
}
</code></pre>
          </div>
          <div class="exo">
            <form method="GET">
              <label for="firstname">Your first name:
                <input type="text" name="firstname" id="firstname" placeholder="First name"
                       value="<?= isset($_GET['firstname']) ? $_GET['firstname'] : '' ?>">
              </label>
              <label for="email">Your email:
                <input type="email" name="email" id="email" placeholder="Email" required
                       autocomplete="true"
                       value="<?= isset($_GET['email']) ? $_GET['email'] : '' ?>">
              </label>
              <button type="submit" class="btn-sm btn-outline-primary">Submit</button>
            </form>
            <h3 class="exo-title">Result:</h3>
            <div class="exo-result">
              <?php
            $firstname = $_GET['firstname'] ?? '';
            $email = isset($_GET['email']) ? $_GET['email'] : '';
            $errors = [];

            if (isset($_GET['firstname'])) {
              if (empty($firstname)) {
                $errors[] = "First name is required.";
              } elseif (strlen($firstname) < 2) {
                $errors[] = "First name must be at least 2 characters long.";
              }
            } else {
              $errors[] = "First name is required.";
            }

            if (isset($_GET['email'])) {
              if (empty($email)) {
                $errors[] = "Email is required.";
              } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
              }
            } else {
              $errors[] = "Email is required.";
            }

            if (!empty($errors)) {
              echo '<ul>';
              foreach ($errors as $error) {
                echo '<li style="color: red;">' . htmlspecialchars($error) . '</li>';
              }
              echo '</ul>';
            } else {
              echo '<p style="color: green;">Form submitted successfully!</p>';
              echo '<p>First Name: ' . htmlspecialchars($firstname) . '</p>';
              echo '<p>Email: ' . htmlspecialchars($email) . '</p>';
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