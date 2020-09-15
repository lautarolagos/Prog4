<?php
    $validUsername="Cosme Fulanito";
    $validPassword="strongPassword!";

    $username=$_POST["username"];
    $password=$_POST["password"];

    if($_POST)
    {
        if(($validUsername==$username) && ($validPassword==$password))
        {            
            header("location:add-bill.php");
        }
        else
        {
            header("location:index.php");
        }
    }
?>