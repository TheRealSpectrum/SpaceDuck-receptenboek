<?php

include_once 'db.php';

if(isset($_POST["naam_maker"])) {
  $maker = mysqli_real_escape_string($conn,$_POST["naam_maker"]);
  $naam_recept = mysqli_real_escape_string($conn,$_POST["naam_recept"]);
  $categorie = mysqli_real_escape_string($conn,$_POST["naam_categorie"]);
  $personen = mysqli_real_escape_string($conn,$_POST["aantal_personen"]);
  $ingredienten = mysqli_real_escape_string($conn,$_POST["ingredienten"]);
  $recept = mysqli_real_escape_string($conn,$_POST["recept"]);

  $sql = "INSERT INTO `receptenboek` . `recepten` (`id`, `naam_maker`, `naam_recept`, `naam_categorie`, `aantal_personen`, `ingredienten`, `recept`) VALUES (NULL, '$maker', '$naam_recept', '$categorie', '$personen', '$ingredienten', '$recept')";

  if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
  } else {
    echo "Fout: " . $sql . ":-" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>