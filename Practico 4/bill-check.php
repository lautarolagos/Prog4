<?php
    require_once "models/Item.php";
    use models\Item as Item;

    $arrayItems = array();
    $Items = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
    pintura fluor 1L, pintura warner fluo, 400, 3,
    plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
    pincel común 1.2, pincel fabber cerda común para tempera, 120, 5,
    rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95, 2,
    kit de acuarelas, combo de acuarelas color pastel, 850, 2";

    $newArray = explode(',', $Items);

    while(!empty($newArray))
    {
        $Item = new Item();
        $Item->setName(array_shift($newArray));
        $Item->setDescription(array_shift($newArray));
        $Item->setPrice(array_shift($newArray));
        $Item->setQuantity(array_shift($newArray));
        array_push($arrayItems, $Item);
    }
    
    
    if(isset($_GET))
    {
        $time = time();
        $actualDate = date("Y-m-d", $time);
        $dateIncome = $_GET['date'];
        if($dateIncome < $actualDate)
        {
            include('./bill-content.php');
        }
        else
        {
            header("location:add-bill.php");
        }
        if($dateIncome==" ")
        {
            $dateIncome=date("Y-m-d", $time);
        }
    }
?>