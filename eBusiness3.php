<!DOCTYPE html>

<style>
    body {
        background-image: url("Background.jpg");
        }

        .center{
            text-align:center;
        }
        
         #roundedborder {
    border-radius: 25px;
    border: 2px solid black;
    padding: 20px; 
     width: 200px;
    height: 150px;  
        }
        
</style>

<html>
    
    <body class="center" id="rounded border">
        
       <?php
       
       session_start();
       $totalValue = $_POST['txtTotal'];
       $fullNameValue = $_POST['txtName'];
       echo "The Name is : ".$fullNameValue.".";
       echo"<br></br>";
       echo"The total value is:  ".$totalValue.".";
       ?>
    
    </body>
       </html>
