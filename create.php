<?php
    session_start();
    require_once("functions/init.php");
    include("parts/header.php");
?>
    <section>
        <h1>Mijn Recept</h1>

        <form action="./parts/insert.php" method="post">
            <label for="maker">Maker</label>
            <input type="text" name="naam_maker"><br>
            <label for="naam recept">Naam Recept</label>
            <input type="text" name="naam_recept"><br>
            <label for="categorie">Categorie</label>
            <input type="text" name="naam_categorie"><br>
            <label for="aantal personen">Aantal Personen</label>
            <input type="number" name="aantal_personen"><br>
            <label for="ingredienten">Ingredienten</label>
            <input type="text" name="ingredienten"><br>
            <label for="recept">Recept</label><br>
            <textarea id="recept" name="recept" rows="20" cols="50"></textarea><br>
            <input type="submit">    
        </form>


        <?php

        echo $_POST["naam_maker"] . " " . $_POST["naam_recept"] . " " . $_POST["naam_categorie"] . " " . $_POST["aantal_personen"] . " " . $_POST["ingredienten"] . "" . $_POST["recept"];

        ?>
    </section>

<?php
    include("parts/footer.php");
?>