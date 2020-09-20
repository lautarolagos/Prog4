<?php
    require_once("config/autoload.php");
    use repositories\beerRepository as beerRepository;
    use model\beer as beer;

    if($_POST)
    {
        $code = $_POST["code"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $type = $_POST["type"];

        $beer = new beer();
        $beer->setCode($code);
        $beer->setName($name);
        $beer->setDescription($description);
        $beer->setType($type);
        
        $beerRepository = new beerRepository();

        $beerRepository->Add($beer);
    }
    header("location:list.php");
    
?>