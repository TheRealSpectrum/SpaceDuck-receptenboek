<?php
    require_once("functions/init.php");
    include("parts/header.php");
?> 
 
        <div class="card-group row row-cols-1 row-cols-md-3 g-4">
            <?php 
                $all_rows = get_all_rows();
                while($row = $all_rows->fetch_assoc()) {
                    $result = "<div class='col'>";
                    $result .= "<div class='card text-dark bg-light mb-3 h-100'>";
                    $result .= "<h5 class='card-header'>" . htmlspecialchars($row["naam_recept"]) . "</h5>";
                    $result .= "<div class='card-body'>";
                    $result .= "<h6>Categorie:</h6>";
                    $result .= "<p class='card-text'>" . htmlspecialchars($row["naam_categorie"]) . "</p>";
                    $result .= "<h6>Aantal Personen:</h6>";
                    $result .= "<p class='card-text'>" . htmlspecialchars($row["aantal_personen"]) . "</p>";
                    $result .= "<h6>Ingredienten:</h6>";
                    $result .= "<p class='card-text'>" . htmlspecialchars($row["ingredienten"]) . "</p>";
                    $result .= "<h6>Recept:</h6>";
                    $result .= "<p class='card-text'>" . htmlspecialchars($row["recept"]) . "</p>";
                    $result .= "</div>";
                    $result .= "<div class='card-footer text-muted'>Gemaakt door: " . htmlspecialchars($row["naam_maker"]) . "</div>";
                    $result .= "</div></div>";
                    echo $result;        
                }
                mysqli_free_result($all_rows);
            ?>
        </div>

<?php
    include("parts/footer.php");
?>