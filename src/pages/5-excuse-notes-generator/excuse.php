<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $child_name = htmlspecialchars($_POST['child_name']);
  $gender = htmlspecialchars($_POST['gender']);
  $teacher_name = htmlspecialchars($_POST['teacher_name']);
  $reason = htmlspecialchars($_POST['reason']);

  $pronoun = ($gender === 'girl') ? 'she' : 'he';

  $excuses = [
    'illness' => [
      "$child_name was unwell due to a sudden fever and needed to rest at home.",
      "$child_name had a severe headache and was unable to attend class.",
      "$child_name caught the flu and required immediate care.",
      "$child_name experienced stomach pain and needed to stay home.",
      "$child_name had a cold and cough, so $pronoun couldn't come to school."
    ],
    'pet' => [
      "$child_name was devastated by the passing of our beloved pet, which affected $pronoun greatly.",
      "Our family pet passed away, and $child_name needed time to process this loss.",
      "$child_name had to take part in a memorial for our family pet.",
      "The loss of our pet left $child_name emotionally distraught, needing a day off.",
      "$child_name was deeply affected by the sudden death of our pet."
    ],
    'activity' => [
      "$child_name participated in an important sports competition representing the school.",
      "$child_name attended a national level spelling bee competition.",
      "$child_name was selected to perform in a cultural event.",
      "$child_name was part of a music recital that required full-day attendance.",
      "$child_name had an external robotics competition requiring $pronoun absence."
    ],
    'other' => [
      "$child_name had a family emergency that required immediate attention.",
      "$child_name was part of an important religious ceremony.",
      "$child_name needed to attend a family wedding.",
      "$child_name participated in a local volunteering event.",
      "$child_name had to attend a counseling session."
    ]
  ];

  $selected_excuse = $excuses[$reason][array_rand($excuses[$reason])];
  $date = date('l, \t\h\e d F Y');
  $polite_phrase = "Thank you for your understanding and support.";

  $excuse_data = [
    'date' => $date,
    'child_name' => $child_name,
    'teacher_name' => $teacher_name,
    'excuse' => $selected_excuse,
    'polite_phrase' => $polite_phrase
  ];
  $_SESSION['excuse_data'] = $excuse_data;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/preview.css">
    <title>Preview | Excuse Note Generator</title>
  </head>

  <body>
    <div class="container">
      <h2 class="title">Excuse Note</h2>
      <p class="info"><strong>Date:</strong> <?php echo $excuse_data['date']; ?></p>
      <p class="info"><strong>Dear <?php echo $excuse_data['teacher_name']; ?>,</strong></p>
      <p class="message">We would like to inform you that <?php echo $excuse_data['child_name']; ?>
        was unable to attend school due to the following reason:</p>
      <blockquote class="excuse"><?php echo $excuse_data['excuse']; ?></blockquote>
      <p class="closing">Thank you for your understanding and support.</p>
      <p class="closing">Best regards,</p>
      <p class="closing">The Parents of <?php echo $excuse_data['child_name']; ?></p>

      <form action="download.php" method="POST">
        <button type="submit" name="download" class="btn">Export as PDF</button>
      </form>
    </div>
  </body>

</html>