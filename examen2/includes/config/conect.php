
<?php
    function connectdb() {
    $db = mysqli_connect("localhost", "root", "root", "BienesRaices");

    if ($db) {
       echo "conectado";
    } else {
       echo "No conectado";
    }
    return $db;
}

?>
