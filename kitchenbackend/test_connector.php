<html>
    <body>


        <?php

            
            
            $day = strtotime($_POST['day']); #unix format, see if you can set time to midnight, fine if you can't
            
            $meal = $_POST['meal'];
            $food = $_POST["food"];

            $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu") ;

            // Check connection
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
            echo "Connected successfully <br>";

            $sql = "INSERT INTO menu 
            VALUES ('$day', '$meal', '$food')"; 

            if (mysqli_query($db, $sql)) {
                echo "New record created successfully <br>";
            } else {
                echo "Error: " . $sql . ", " . mysqli_error($db) . "<br>";
}

            #test code
            $test_sql = "SELECT * FROM menu";
            $result = $db->query($test_sql);
            $row = $result->fetch_assoc();

            while($row = $result->fetch_assoc()){
            echo "<tr><td>" . htmlspecialchars($row['day']) . " </td><td>" . htmlspecialchars($row['meal']) . " </td><td>" . htmlspecialchars($row['food']) . "</td></tr><br>"; 
            }

            #print_r($result);

                $db -> close(); 

                ?>

</body>
                    </html>