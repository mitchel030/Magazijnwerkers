<?php 

	// initialize variables
    $artikelid = 0;
	$artikel = null;
	$aanwezig = null;
    $aantal = null;
	$update = false;

		$artikel = $_POST['artikel'];
		$aanwezig = $_POST['aanwezig'];
        $aantal = $_POST['aantal'];

		$query = "INSERT INTO `overview` (`artikelid`, `artikel`, `aanwezig`, `aantal`) VALUES (NULL, $artikel, $aanwezig, $aantal);";

		$sendQuery = mysqli_query($db, $query);

		$_SESSION['message'] = "data saved"; 
		header('location: overview.php');

// ...