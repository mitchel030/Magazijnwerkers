<?php
// If there is no session, start a session
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= URLROOT ?>/public/img/favicon.ico"/>

  <!-- Font Awesome 6 -->
  <script src="https://kit.fontawesome.com/5514088c7f.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= URLROOT ?>/public/css/style.css">
  <title><?= SITENAME; ?></title>
</head>

<body>