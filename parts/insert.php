<?php

include_once 'db.php';

if(isset($_POST["naam_maker"])) {
  $maker = $_POST["naam_maker"];
  $naam_recept = $_POST["naam_recept"];
  $categorie = $_POST["naam_categorie"];
  $personen = $_POST["aantal_personen"];
  $ingredienten = $_POST["ingredienten"];
  $recept = $_POST["recept"];

  $sql = "INSERT INTO `receptenboek` . `recepten` (`id`, `naam_maker`, `naam_recept`, `naam_categorie`, `aantal_personen`, `ingredienten`, `recept`) VALUES (NULL, '$maker', '$naam_recept', '$categorie', '$personen', '$ingredienten', '$recept')";

  if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
  } else {
    echo "Fout: " . $sql . ":-" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>