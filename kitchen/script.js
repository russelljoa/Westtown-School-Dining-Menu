function hide(){
    document.getElementById("boxui").style.display = "none";
    console.log("it worked")
}



function printPage(){
    document.getElementById('printPage').style.display ='none'; //first hide the button
    setTimeout(function(){ //using setTimeout function
      document.getElementById('printPage').style.display ='inline'; //displaying the button again after 3000ms or 3 seconds
      }
    ,3000);
    document.getElementById('disappear').style.display ='none'; //first hide the button
    setTimeout(function(){ //using setTimeout function
      document.getElementById('disappear').style.display ='inline'; //displaying the button again after 3000ms or 3 seconds
      }
    ,3000); 
    document.getElementById('pdf').style.display ='none'; //first hide the button
    setTimeout(function(){ //using setTimeout function
      document.getElementById('pdf').style.display ='inline'; //displaying the button again after 3000ms or 3 seconds
      }
    ,3000); 
    window.print();
}

function uploaded(){
    window.alert("Dining Room Menu Uploaded to Database\n Note: To edit previous entries, select the week, edit the menu, and press upload.");
}