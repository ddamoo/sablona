<?php
require_once 'db.php';
require_once 'QnAa.php';
$qna = new QnA($conn);
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Q&A</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <section class="container">
    <?php $qna->zobrazOtazkyAOdpovede(); ?>
  </section>

  <script src="js/accordion.js"></script>
  <script src="js/menu.js"></script>
</body>
</html>
