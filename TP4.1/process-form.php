<?php
    require_once("Config/Autoload.php");
    use Models\Argentino;
    use Models\English;
    use Models\Portuguese;

    $lang=$_POST["language"];
    $act=$_POST["action"];
    $msg=$_POST["message"];

    $obj = null;

    if($lang=="arg")
    {
        $obj = new Argentino();
    }
    else if($lang=="eng")
    {
        $obj = new English();
    }
    else
    {
        $obj = new Portuguese();
    }
    
    if($act == "sayAnother"){
        if($msg=="")
        {
            $msg="No ha escrito nada";
        }
        call_user_func(array($obj, $act), $msg);

    }else{
        call_user_func(array($obj, $act));
    }
    include_once("greet.php");
?>