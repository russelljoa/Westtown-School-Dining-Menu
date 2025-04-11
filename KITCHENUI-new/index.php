<!DOCTYPE html>
<html>

<head>
  <script src="html2pdf.bundle.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script> 
    function myFunction() {
      window.print();
    }
  </script>
</head>

<body>

  <div class="t">
    <div class ='datecontainer'>
      <label class = 'toplabel' for ="startdate">Enter the date of Monday:</label>
      <form type='hidden' method="post">
        <input type= "date" id ="startdate" name="startdate" >
          <button class = 'datebutton' name="setdate" type="submit">SET DATE</button>
        </input>
      </form>
    </div>

    <form type='hidden' method="post">
      <?php
      session_start();

      #session start
      


      #DB connect
      $db = new mysqli("localhost", "root", "", "menu"); 
      //$db = new mysqli("localhost", "root", "", "menu");
      

      #datestuff
      


      
  
      if (isset ($_POST['setdate'])){
        
        $rawinputdate = $_POST['startdate'];
        
        $_SESSION['inputdate'] = strtotime($rawinputdate);
        if (date('D', $_SESSION['inputdate']) == 'Mon') {
          $newdate = strtotime("+6 day",$_SESSION['inputdate']);
          #echo($newdate . "newdate <br>");
          $endofweek=date('M d, Y', $newdate);
          #echo($endofweek . "endofweek <br>");
          $firstday=date('M d,Y',$_SESSION['inputdate']);
          #echo($firstday . " firstday <br>");
          echo "<div id='toprint'>";
          echo "<h1 class = 'menutitle'>Dining Room Menu Week of ".$firstday."-".$endofweek."</h1>";
        }
        else{

          echo("<h1 class='bad'>You did not enter a monday, please select the monday of the week to continue!</h1>");
        }

        
      }


      echo "<table>";
      echo "<th class = 'topday'></th>";
      echo "<th class = 'topday'>Monday</th>";
      echo "<th class = 'topday'>Tuesday</th>";
      echo "<th class = 'topday'>Wednsday</th>";
      echo "<th class = 'topday'>Thursday</th>";
      echo "<th class = 'topday'>Friday</th>";
      echo "<th class = 'topday'>Saturday</th>";
      echo "<th class = 'topday'>Sunday</th>";
      for($i=0; $i<6; $i++){
        echo "<tr>";
        if ($i==0){
          echo "<td class = 'mealtype'>Breakfast</td>";
          }
        if ($i==1){
          echo "<td class = 'mealtype'>Snack</td>";
        }
        if ($i==2){
          echo "<td class = 'mealtype'>Lunch</td>";
        }
        if ($i==3){
          echo "<td class = 'mealtype'>Salad Bar</td>";
        }
        if ($i==4){
          echo "<td class = 'mealtype'>DIY</td>";
        }
        if ($i==5){
          echo "<td class = 'mealtype'>Dinner</td>";
        }
        for($j=0; $j<7; $j++){
          echo "<td class = 'textbox'><textarea class='textareablock' name='cell" . $i . $j ."'></textarea></td>";  }
        }

          
          
        if (isset ($_POST['submission'])){
          $cell = array(
            "cell00", "cell01", "cell02", "cell03", "cell04", "cell05","cell06",
            "cell10", "cell11", "cell12", "cell13", "cell14", "cell15","cell16",
            "cell20", "cell21", "cell22", "cell23", "cell24", "cell25","cell26",
            "cell30", "cell31", "cell32", "cell33", "cell34", "cell35","cell36",
            "cell40", "cell41", "cell42", "cell43", "cell44", "cell45","cell46",
            "cell50", "cell51", "cell52", "cell53", "cell54", "cell55","cell56",
        );
        
        foreach ($cell as $value) {
            if (isset($_POST[$value])) {
                $meal = "";
                $date = "";
                $food = $_POST[$value];
                switch ($value[4]) {
                    case 0:
                        $meal = 'Breakfast';
                        break;
                    case 1:
                        $meal = 'Snack';
                        break;
                    case 2:
                        $meal = 'Lunch';
                        break;
                    case 3:
                        $meal = 'Salad Bar Special';
                        break;
                    case 4:
                        $meal = 'DIY';
                        break;
                    case 5:
                        $meal = 'Dinner';
                        break;
                }
                switch ($value[5]) {
                    case 0:
                        #echo(strtotime("+0 day",$_SESSION['inputdate'])."<br>");
                        $date = strtotime("+0 day",$_SESSION['inputdate']);

                        break;
                    case 1:
                        $date=strtotime("+1 day",$_SESSION['inputdate']);
                        
                        break;
                    case 2:
                        $date=strtotime("+2 day",$_SESSION['inputdate']);
                        break;
                    case 3:
                        $date=strtotime("+3 day",$_SESSION['inputdate']);
                        break;
                    case 4:
                        $date=strtotime("+4 day",$_SESSION['inputdate']);
                        break;
                    case 5:
                        $date=strtotime("+5 day",$_SESSION['inputdate']);
                        break;
                    case 6:
                        $date=strtotime("+6 day",$_SESSION['inputdate']);
                        break;
                }
        
                $db = new mysqli("localhost", "root", "", "menu");
                //$db = new mysqli("localhost", "root", "", "menu");
                $sql = "INSERT INTO menu 
                    VALUES ('$date', '$meal', '$food')";
                $db->query($sql);
            }
        }
        }

      echo "</table>";

      echo "</div>";
      ?>
      </div>
      <div class= 'buttondiv'>
        <input name="submission" type='hidden' onclick="myFunction()">
          <button class = 'upload' type="submit" onclick="myFunction()">UPLOAD</button>
        </input>
      </div>

      <?php
      ?>
    </form>
  </div>



</body>

</html>