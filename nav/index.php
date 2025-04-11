<!DOCTYPE html>
<html>
    <head>
        <title>Database Test Program</title>
    </head>

    <body>
        <p>Hello</p>
        <?php
            echo "<br>";
            echo date("l jS \of F Y h:i:s A");
            echo "<br>";
            echo time();
            echo "<br>";
            echo "<br>";
            echo date("l jS \of F Y");
            echo "<br>";
            $midnight_string = date("l jS \of F Y") . " 12:00:00 AM";
            echo $midnight_string;
            echo "<br>";
            echo strtotime($midnight_string);
            
            /*
            $user = 'SET_USER';
            $pass = 'SET_PASS';
            $db = 'menu';
            
            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

            print_r($db);

            echo "<br><br>";

            $sql = "SELECT * FROM menu";
            $result = $db->query($sql);

            $row = $result->fetch_assoc();
            echo "Food: " . $row["Food"];
            $db->close();
            */

            

        ?>
    </body>

</html>
