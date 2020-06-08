<?php
try{
    $objPdo = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=eck6u_projetTutS4','eck6u_appli','31810690');
}

catch(Exception $exception){
    echo "<p>BdD non OP</p>";
    die($exception->getMessage());
}
?>
