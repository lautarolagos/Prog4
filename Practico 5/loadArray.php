<?php
    require_once("config/autoload.php");
    use models\cruiser as cruiser;
    use models\battleship as battleship;
    use models\airplane as airplane;
    
    $crucero1 = new cruiser("Crucerito", 10, 500, 150);
    $crucero2 = new cruiser("Crucerazo", 20, 250, 100);
    $battleship1 = new battleship("El Matador", 10, 1000, "Misiles");
    $airplane1 = new airplane("Volao", 300, 250);
    $airplane2 = new airplane("Gucci Private", 250, 20);
    $array = array($crucero1, $crucero2, $battleship1, $airplane1, $airplane2);
    foreach($array as $value)
    {
        echo "<pre>";
        echo $value->__toString();
        echo "</pre>";
    }
?>