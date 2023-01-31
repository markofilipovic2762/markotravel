<?php

   $connection = mysqli_connect('sql108.epizy.com','epiz_33268878','aO2ry6oWIk','epiz_33268878_markotravel');

   if(isset($_POST['posalji'])){
      $ime = $_POST['ime'];
      $email = $_POST['email'];
      $telefon = $_POST['telefon'];
      $adresa = $_POST['adresa'];
      $mesto = $_POST['mesto'];
      $broj_gostiju = $_POST['broj_gostiju'];
      $dolazak = $_POST['dolazak'];
      $odlazak = $_POST['odlazak'];

      $request = " insert into bukiranje(ime, email, telefon, adresa, mesto, broj_gostiju, dolazak, odlazak) values('$ime','$email','$telefon','$adresa','$mesto','$broj_gostiju','$dolazak','$odlazak') ";
      mysqli_query($connection, $request);

      header('location:bukiranje.php'); 

   }else{
      echo 'Nešto nije u redu!';
   }

?>