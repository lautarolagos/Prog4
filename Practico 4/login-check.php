<?php
    $validUsername="Cosme Fulanito";
    $validPassword="strongPassword!";

    $username=$_POST["username"];
    $password=$_POST["passwowrd"];

    if($_POST)
    {
        if($validUsername==$username && $validPasswodd==$password)
        {
            header("location:add-bill.php");
        }
        else
        {
            header("location:index.php");
        }
    }
?>