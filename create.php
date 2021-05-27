<?php
    session_start();
    require_once("functions/init.php");
    include("parts/header.php");
?>
    <section class="bg-light w-50" >
        <h1>Mijn Recept</h1>

        <form action="./parts/insert.php" method="post">
            <label for="maker">Maker</label>
            <input type="text" name="naam_maker" required autofocus="autofocus"><br>
            <label for="naam recept">Naam Recept</label>
            <input type="text" name="naam_recept" required><br>
            <label for="categorie">Categorie</label>
            <input type="text" name="naam_categorie" required><br>
            <label for="aantal personen">Aantal Personen</label>
            <input type="number" name="aantal_personen" required><br>
            <label for="ingredienten">Ingredienten</label>
            <input type="text" name="ingredienten" required><br>
            <label for="recept">Recept</label><br>
            <textarea id="recept" name="recept" rows="20" cols="50" required ></textarea><br>
            <input type="submit">    
        </form>

    </section>

<?php
    include("parts/footer.php");
?>