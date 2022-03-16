<?php
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "magazijnwerkers");
  $db = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  function sanitize($raw_data) 
    {
    global $conn;
    $data = htmlspecialchars($raw_data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = trim($data);
    return $data;
    }
