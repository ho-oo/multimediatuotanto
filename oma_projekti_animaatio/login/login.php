<?php

//Otetaan lomakkeelta tulevat sy�tteet talteen
$email = $_POST['email'];
$salasana = $_POST['salasana'];

//M��ritet��n yhteys tietokantaan
include ("../../oma_projekti - Copy/login/funktioita.php");

// Avataan yhteys tietokantaan - testaa heti
$yhteys = yhdista_tietokantaan();


?>