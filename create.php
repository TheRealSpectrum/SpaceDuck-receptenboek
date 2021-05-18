<?php
    require_once("functions/init.php");
    include("parts/header.php");
?>
    <section>
        <h1>Mijn Recept</h1>

        <form>
            <label for="maker">Maker</label>
            <input type="text" name="naam_maker"><br>
            <label for="naam recept">Naam Recept</label>
            <input type="text" name="naam_recept"><br>
            <label for="categorie">Categorie</label>
            <input type="text" name="naam_categorie"><br>
            <label for="aantal personen">Aantal Personen</label>
            <input type="number" name="aantal_personen"><br>
            <label for="aantal ingredienten">Aantal Ingredienten</label>
            <input type="number" name="aantal_ingredienten"><br>
            
            <label for="ingredient">Ingredient</label>
            <input type="text" name="ingredient"><br>
            <label for="naam ingredient">Naam Ingredient</label>
            <input type="text" name="naam_ingredient"><br>
            <label for="hoeveelheid">Hoeveelheid</label>
            <input type="number" name="hoeveelheid"><br>
            <label for="eenheid">Eenheid</label>
            <input type="text" name="eenheid"><br>

            <select name = "eenheid">
            <option value = "gram" selected>Gram</option>
            <option value = "kilogram">Kilogram</option>
            <option value = "milliliter">Milliliter</option>
            <option value = "deciliter">Deciliter</option>
            <option value = "centiliter">Centiliter</option>
            <option value = "liter">Liter</option>
            <option value = "theelepel">Theelepel</option>
            <option value = "eetlepel">Eetlepel</option>
            <option value = "naar smaak">Naar Smaak</option>
            


        </form>
    </section>

<?php
    include("parts/footer.php");
?>