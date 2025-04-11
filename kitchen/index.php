<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "style.css" rel = "stylesheet" type = "text/css">
    <link rel="icon" type="image/x-icon" href="wtlogo.png">
</head>
<body>
    
    <?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "SET_USER" && $pass == "SET_PASS")
    {
        include("../../index.php");
    }
    else
    {
        if(isset($_POST))
        {

        
        ?>
        <div class="logindiv">  
            <div class="formdiv">
                <h1 class = 'logintitle'>Westtown Kitchen Menu Creator</h1>
                <form method="POST" action="index.php">
                <div class="usernamediv labels">
                <p class = "labelspan loginflexchild">Username:</p><input class = "logininput loginflexchild" type="text" name="user"></input>
                </div>
                <div class="passworddiv labels">
                <p class = "labelspan loginflexchild">Password:</p><input class = "logininput loginflexchild"type="password" name="pass"></input>
                </div>
                <input class = "loginbutton" type="submit" name="submit" value="Sign in"></input>
                </form>
            </div>
        </div>
        <?php
        }
    }
    ?>
    
</body>
</html>

