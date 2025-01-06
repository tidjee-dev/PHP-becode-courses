<?php
require '../../vendor/autoload.php';

use Dompdf\Dompdf;

session_start();

if (!isset($_SESSION['excuse_data'])) {
  die("No data available for PDF generation.");
}

$excuse_data = $_SESSION['excuse_data'];
unset($_SESSION['excuse_data']);

$html = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Generated Excuse</title>
    <style>
      *,
      ::before,
      ::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: 'Inter', sans-serif;
        background-color: #f5f7fa;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      .container {
        padding: 20px;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
      }

      .title {
        font-size: 2rem;
        color: #007bff;
        margin-bottom: 20px;
        text-align: center;
      }

      .info {
        font-size: 1.1rem;
        margin-bottom: 10px;
        color: #555;
      }

      .message {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.6;
      }

      .excuse {
        background-color: #f8f9fa;
        border-left: 5px solid #007bff;
        padding: 15px;
        margin: 20px 0;
        font-style: italic;
        color: #555;
      }

      .closing {
        font-size: 1rem;
        color: #555;
        margin-top: 10px;
        line-height: 1.5;
      }
    </style>
</head>
<body>
  <div class='container'>
    <h2 class='title'>Excuse Note</h2>
    <p class='info'><strong>Date:</strong> {$excuse_data['date']}</p>
    <p class='info'><strong>Dear {$excuse_data['teacher_name']},</strong></p>
    <p class='message'>We would like to inform you that {$excuse_data['child_name']}
      was unable to attend school due to the following reason:</p>
    <blockquote class='excuse'>{$excuse_data['excuse']}</blockquote>
    <p class='closing'>Thank you for your understanding and support.</p>
    <p class='closing'>Best regards,</p>
    <p class='closing'>The Parents of {$excuse_data['child_name']}</p>
  </div>
</body>

</html>";

try {
  $dompdf = new Dompdf();
  $dompdf->loadHtml($html);
  $dompdf->setPaper('A4', 'portrait');
  $dompdf->render();

  header('Content-Type: application/pdf');

  $dompdf->stream("excuse_note.pdf", ["Attachment" => true]);
} catch (Exception $e) {
  die("An error occurred while generating the PDF: " . $e->getMessage());
}