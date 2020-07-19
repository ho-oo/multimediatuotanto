<?php

//Otetaan lomakkeelta tulevat syötteet talteen
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

//Määritetään yhteys tietokantaan
include ("../../oma_projekti - Copy/login/funktioita.php");

// Avataan yhteys tietokantaan - testaa heti
$yhteys = yhdista_tietokantaan();

if (isset($_POST['email']))
{
    $sql = "INSERT INTO singup (etunimi, sukunimi, email, salasana)
    VALUES
    ('$first_name', '$last_name', '$email', '$password')";
    if ($yhteys->query($sql) ==TRUE){
        echo '<p>Tiedot lisätty.</p>';
    }
    else{
        echo "Virhe: " . $sql . "<br>" . $yhteys->error;
    }
}
$yhteys-> close ();
?>