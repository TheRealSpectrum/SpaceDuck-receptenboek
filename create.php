<?php
    session_start();
    require_once("functions/init.php");
    include("parts/header.php");
?>
    <section class="bg-light w-50 p-3 border border-secondary rounded-3" >
        <h1>Mijn Recept</h1>

        <form action="./parts/insert.php" class="row gy-2 gx-3 align-items-center" method="post">
            <div class="col-md-6">
                <label class="form-label" for="maker">Maker</label>
                <input class="form-control border border-dark" id="maker" type="text" name="naam_maker" required autofocus="autofocus">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="naam-recept">Naam Recept</label>
                <input class="form-control border border-dark" id="naam-recept" type="text" name="naam_recept" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="categorie">Categorie</label>
                <input class="form-control border border-dark" id="categorie" type="text" name="naam_categorie" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="aantal-personen">Aantal Personen</label>
                <input class="form-control border border-dark" id="aantal-personen" type="number" name="aantal_personen" required>
            </div>
            <div class="col-12">
                <label class="form-label" for="ingredienten">Ingredienten</label>
                <input class="form-control border border-dark" id="ingredienten" type="text" name="ingredienten" required>
            </div>
            <div class="col-12">
                <label class="form-label" for="recept">Recept</label>
                <textarea class="form-control border border-dark" id="recept" name="recept" rows="20" cols="50" required ></textarea>
            </div>
            <div class="col-8 offset-md-2">
                <input type="submit" name="submit" class="btn btn-secondary form-control rounded-pill border border-dark" value="Maak Recept">
            </div>    
        </form>

    </section>

<?php
    include("parts/footer.php");
?>