<?php
    // voorbeelden sql query:
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($connection->connect_error) {
        die("connection failed " . $connection->connect_error);
    }

    function get_all_rows() {
        global $connection;
        $sql = "SELECT * FROM `recepten` ORDER BY id DESC";
        $result = $connection->query($sql);
        
        return $result;
    }

    
    /*
        // aanmaken
        INSERT INTO tabel_naam (kolom_naam, kolom_naam, etc) VALUES ('waarde', 'waarde', etc);

        // alles selecteren
        SELECT * FROM tabel_naam;

        // een item met specifieke id selecteren
        SELECT * FROM tabel_naam WHERE id='id_van_item';

        // wijziging doorvoeren 
        UPDATE tabel_naam SET kolom_naam='nieuwe_waarde', kolom_naam='nieuwe_waarde', (etc) WHERE id='id_van_item' LIMIT 1;

        // item verwijderen
        DELETE FROM tabel_naam WHERE id='id_van_item' LIMIT 1;

    */

    
?>