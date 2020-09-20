<?php
    require_once("config/autoload.php");
    use model\user as user;
    $usernameSent=$_POST["username"];
    $passwordSent=$_POST["password"];
    
    $user1 = new user("SSoler", "cosme1234", "Sebastian", "Soler", "sebastian@utn.com");
    $user2 = new user("AzarJ", "alAlzar123", "Juan", "Azar", "juan_azar@utn.com");
    $user3 = new user("Mari123", "123456Mari", "Maria", "Perez", "mariap@utn.com");
    
    $arrayUsers = array($user1, $user2, $user3);
    $loggedUser = NULL;
    if($_POST)
    {
        foreach($arrayUsers as $key => $value)
        {
            if($usernameSent == $value->getUsername())
            {
                if($passwordSent == $value->getPassword())
                {
                    $loggedUser = $value;
                }
            }
        }
    }
    if($loggedUser!=NULL)
    {
        session_start();
        $_SESSION["loggedUser"] = $loggedUser;
        header("location:welcome.php");
    }
    else
    {
        header("location:index.php");
    }
?>