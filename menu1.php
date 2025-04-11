<!DOCTYPE html>    
<?php
        $date = date("Y-m-05 0:0:0");
        $day = strtotime($date);
        echo "<br>";

        //breakfast
        echo "Breakfast <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='Breakfast'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }

        //Snack
        echo "Snack <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='Snack'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }

        //Lunch
        echo "Lunch <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='Lunch'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }

        //Salad Bar Special
        echo "Salad Bar Special <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='Salad Bar Special'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }

        //DIY
        echo "DIY <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='DIY'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }

        //Dinner
        echo "Dinner <br>";
        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day=$day AND Meal='Dinner'";
        $result = $db->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $food[$x] = $row["Food"];
            echo $food[$x]."<br>";
            $x = $x + 1;
        }
?>