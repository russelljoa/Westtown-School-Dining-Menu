<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css"></link>
    <link rel="icon" type="image/x-icon" href="img/wtlogo.png">

    <?php

    //$db = new mysqli("localhost", "root", "", "menu"); /*localhost db connection*/
    $db = new mysqli("localhost", "SET_USER", "SET_PASS", "menu"); //SERVER DB CONN

    // gluten free - /gf
    // vegetarian - /vt, /vegetarian
    // vegan - /vg, /vegan
    // halal - /hl, /h
    // nut free - /nf


    //$timedif = 21600; // LOCAL SIDE
    $timedif = 0; //SERVER SIDE
    $startday = time();
    $time = strtotime("midnight", $startday) + $timedif;


    //echo($time . "<br>");

    session_start();

    // Initialize $_SESSION['day'] if not already set or update it based on user action
    if (!isset($_SESSION['day'])) {
        $_SESSION['day'] = $time;  // MAKE THIS AT 12 AM
        //echo($_SESSION['day']."  init");

    } 
    else {
        if (isset($_POST['action']) && $_POST['action'] === 'refresh') {
            $_SESSION['day'] = $time;

            //header("Refresh:0");
        }

        if (isset($_POST['action']) && $_POST['action'] === 'back') {
            $_SESSION['day'] -= 86400;
            //echo($_SESSION['day']." back <br>");
            
            
        } elseif (isset($_POST['action']) && $_POST['action'] === 'forward') {
            $_SESSION['day'] += 86400;
            //echo($_SESSION['day']." forward <br>");
        }
    }



    // Calculate the date string based on $_SESSION['day']
    ?>

    <title>
        <?php 
        echo(ucfirst(gmdate("l m/d",$_SESSION['day'])) . " Menu" ); 
        ?>
    </title>

</head>
<script>
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>





<body>
    <div class="main">
        <div class="header">
            <div class="header-container">
                <div class="arrowbutton">
                    <form type='hidden' method="post">
                        <input type='hidden' name="action" value="back" class = 'fit'>
                            <button type="submit" class="button fit">
                                <svg class = 'icon fit'  clxmlns="http://www.w3.org/2000/svg" height="40" viewBox="-150 -960 960 960" width="40"><path class = 'svgpath' d="m176.999-480 294.667 294.334q18 19 18.5 44.333t-17.833 44Q453.666-78.667 427.5-78.667q-26.167 0-45.167-18.666L73.999-405.334Q58.667-421 50.667-440.167q-8-19.166-8-39.833 0-21 8-40.166 8-19.167 23.334-34.5l309-310.001q19-17.999 44.5-17.666Q453-882 471.666-864q18 18.667 18.333 44.667.334 25.999-18.333 44.666L176.999-480Z"/></svg>
                                <!--<img src='img\angle-circle-left.png' class="icon fit">-->
                            </button>
                        </input>
                    </form>
                </div>
                <div class="arrowbutton">
                    <form type='hidden' method="post">
                        <input type='hidden' name="action" value="forward" class = 'fit'>
                            <button type="submit" class="button fit">
                                <svg class = 'icon fit' xmlns="http://www.w3.org/2000/svg" height="40" viewBox="-40 -960 960 960" width="40"><path class = 'svgpath' d="M559.334-481.333 265.667-776.001q-19-17.999-19.334-43.666Q246-845.333 264-864.333q19.667-18 45.833-18 26.167 0 44.166 18l309.334 308.334q15.333 15.333 22.833 34.499 7.5 19.167 7.5 40.167 0 20.666-7.5 39.833-7.5 19.166-22.833 34.833l-310 309Q334.666-79 309.666-79.5 284.667-80 265-98.667q-18-18.666-18.333-44.166-.334-25.5 18.333-44.167l294.334-294.333Z"/></svg>
                                <!--<img src='img\angle-circle-right.png' class="icon fit">-->
                            </button>
                        </input>
                    </form>     
                </div>
                <div class="refresh">
                    <form type='hidden' method="post">
                        <input type='hidden' name="action" value="refresh" class = 'fit'>
                            <button type="submit" class="todaybutton button fit">
                                
                                <svg class = 'icon fit calendar' xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path class = 'svgpath' d="M361.638-298.667q-41.451 0-70.045-28.622Q263-355.91 263-397.362t28.621-70.045Q320.243-496 361.695-496q41.451 0 70.045 28.621 28.593 28.622 28.593 70.074 0 41.451-28.621 70.045-28.622 28.593-70.074 28.593ZM196.666-50.001q-43.824 0-74.912-31.787Q90.667-113.575 90.667-156v-581.001q0-44.099 31.087-75.382 31.088-31.284 74.912-31.284H241V-866q0-17.783 13.919-31.225 13.918-13.441 31.666-13.441 19.432 0 32.09 13.441 12.658 13.442 12.658 31.225v22.333h297.334V-866q0-17.783 13.218-31.225 13.218-13.441 31.866-13.441 18.932 0 32.09 13.441Q719-883.783 719-866v22.333h44.334q44.099 0 75.382 31.284Q870-781.1 870-737.001V-156q0 42.425-31.284 74.212Q807.433-50 763.334-50H196.666Zm0-105.999h566.668v-412H196.666v412Zm0-479.999h566.668v-101.002H196.666v101.002Zm0 0v-101.002 101.002Z"/></svg>
                                <!--<img src='img\reload.png' class="icon fit">-->
                            </button>
                        </input>
                    </form>
                </div>
                <div class="logocontainer">
                    <img class = "wticon fit"src = "img/wtlogo.png">
                </div>
                <div class="center-container center">
                    <div class="headtext-container">
                        <h2 class='tag headtext'>
                            <?php 
                            echo("<span class = 'highlight'>". strtoupper(gmdate("D",$_SESSION['day']))."</span><span class = 'restofday'>" . str_replace(strtoupper(gmdate("D",$_SESSION['day'])), "", strtoupper(gmdate("l",$_SESSION['day']))."</span><span class = datespan>".gmdate("m/d",$_SESSION['day'])."</span>"  )); 
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menusection">
            <!--<img class = 'dricon gf' src = img/gf.png>
            <img class = 'dricon hl' src = img/hl.png>
            <img class = 'dricon vg' src = img/vg.png>
            <img class = 'dricon vt' src = img/vt.png>
            <img class = 'dricon nf' src = img/nf.png>-->
            <?php




            

            $nodatamsg = "No data"; // the message displayed when there is no data

            

            function getMenu($db, $day, $meal) { #meal has to have first word of every letter capitalized
                $daymin = $day - 25200; //range where it will search for meal data
                $daymax = $day + 25200; //range where it will search for meal data
                $nodatamsg = "No data"; // the message displayed when there is no data
                $sql = "SELECT * FROM menu WHERE `Day` BETWEEN $daymin AND $daymax AND meal='$meal'";
                $result = $db->query($sql);
                $x = 0;
            
                if (mysqli_num_rows($result) == 0) {
                    echo("<p class = 'tag menuitem nodata'>$nodatamsg</p>");
                } else {
                    while ($row = $result->fetch_assoc()) {
                        if ($row["Food"] == "") {
                            //echo("<p class = 'menuitem nodata'>$nodatamsg</p>");
                            $x += 1;
                        } else {
                            $food[$x] = $row["Food"];
                            echo("<p id = 'menuptag' class = 'tag menuitem'>".$food[$x]."</p>");
                            $x += 1;
                        }
                    }
                }

                echo("</div>"); # closes the div that opens before the function
            }

            echo("<div class = 'breakfast menudiv'><div class = 'breakfasttitle title'>🥞 Breakfast</div>");
           
            getMenu($db, $_SESSION['day'], 'Breakfast');

            //Snack
            echo("<div class = 'snack menudiv'><div class = 'snacktitle title'>🍎 Snack</div>");
            getMenu($db, $_SESSION['day'], 'Snack');

            //Lunch
            echo("<div class = 'lunch menudiv'><div class = 'lunchtitle title'>🥪 Lunch</div>");
            getMenu($db, $_SESSION['day'], 'Lunch');

            //Salad Bar Special
            echo("<div class = 'salad menudiv'><div class = 'saladtitle title'>🥗 Salad Bar</div>");
            getMenu($db, $_SESSION['day'], 'Salad Bar Special');

            //DIY
            echo("<div class = 'diy menudiv'><div class = 'diytitle title'>🧑‍🍳 DIY</div>");
            getMenu($db, $_SESSION['day'], 'DIY');

            //Dinner
            echo("<div class = 'dinner menudiv'><div class = 'dinnertitle title'>🍔 Dinner</div>");
            getMenu($db, $_SESSION['day'], 'Dinner');
            ?>
        </div>

    </div>
<script src="script.js"></script>
</body>
</html>