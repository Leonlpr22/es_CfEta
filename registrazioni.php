<?php
session_start();

if (!isset($_SESSION["registrazioni"])) {
    $_SESSION["registrazioni"] = [];
}

if (isset($_GET["codice_fiscale"]) && isset($_GET["eta"])) {
    $cf = $_GET["codice_fiscale"];  
    $eta = $_GET["eta"];  

    $_SESSION["registrazioni"][$cf] = $eta;
}

echo '<p><a href="form.html">Aggiungi un altro inserimento</a></p>';
echo '<p><a href="risultati.php">Vedi i risultati</a></p>';
?>
