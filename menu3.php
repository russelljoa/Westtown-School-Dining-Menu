<!DOCTYPE html>
    <p>test</p>    
<?php
        $date = date("Y-m-d 0:0:0");
        $ad = strtotime($date);
        echo $ad;

        $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); /*open database connection*/
        $sql = "SELECT * FROM menu WHERE Day='1696305600'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $food = $row["Food"];
        echo $food;

        
?>


