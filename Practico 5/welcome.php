<?php
    include('header.php');
    require_once("config/autoload.php");
    
    use models\user as user;

    session_start();
    
    if(isset($_SESSION["loggedUser"]))
        $loggedUser = $_SESSION["loggedUser"];
    else
        header("location:index.php");
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <div class = "container mt-5">
    <h2 style="text-align: center;">Welcome</h2>
    <body>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
                <th>Username</th>
                <th>Password</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $loggedUser->getUserName(); ?></td>
                <td><?php echo $loggedUser->getPassword(); ?></td>
                <td><?php echo $loggedUser->getFirstName(); ?></td>
                <td><?php echo $loggedUser->getLastName(); ?></td>
                <td><?php echo $loggedUser->getEmail(); ?></td>
            </tr>
            </tbody>
        </table>
        <a href="logout.php">Cerrar sesion</a>
    </body>
    </div>
</html>
<?php
include('footer.php');
?>