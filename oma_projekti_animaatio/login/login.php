<?php

//Otetaan lomakkeelta tulevat syצtteet talteen
$email = $_POST['email'];
$salasana = $_POST['salasana'];

//Mההritetההn yhteys tietokantaan
include ("../../oma_projekti - Copy/login/funktioita.php");

// Avataan yhteys tietokantaan - testaa heti
$yhteys = yhdista_tietokantaan();


?>