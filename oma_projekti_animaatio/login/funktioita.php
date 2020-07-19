<?php

// Tässä tiedostossa on perusfunktioita.

// Tämä funktio yhdistää tietokantaan, ja ottaa käyttöön tietokannan.
function yhdista_tietokantaan()
{
	//MySQL-serverin tietokantamääritykset
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pelit";

	// Luodaan yhteys
	 $yhteys = mysqli_connect($servername, $username, $password, $dbname);
	// Tarkistetaan yhtyeys
	if (!$yhteys) {
		 die("Yhteys epäonnistui: " . mysqli_connect_error());
	}
  return $yhteys;
}

?>
