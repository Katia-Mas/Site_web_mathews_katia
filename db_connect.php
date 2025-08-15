<?php
$host = "localhost"; // Serveur MySQL la
$user = "root";      // Itilizatè MySQL ou (nan Workbench default se root)
$pass = "";          // Modpas MySQL (mete li si ou gen youn)
$dbname = "ecole_musique_katia"; // Non baz done ou a

// Koneksyon
$conn = new mysqli($host, $user, $pass, $dbname);

// Verifye koneksyon
if ($conn->connect_error) {
    die("Koneksyon echwe: " . $conn->connect_error);
}
?>
