<?php
session_start();
$fullNameValue = "";
$totalValue ="";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;

?>
<!DOCTYPE html>

<style>
    body {
        background-image: url("Background.jpg");
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
    <head
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBusiness3.php">
               <center>
                   <table cellspacing="10" id="roundedborder">
                       <tr>
                           <td><b></b></td>
                           <td><b>Enter in your details below</b></td>
                       </tr>
                     
                       <tr>
                           <td>Name</td>
                           <td><input type="text" id="txtName" name="txtName" value="" required /></td>
                       </tr>
                    
                       <tr>
                           <td>E-mail</td>
                           <td><input type="text" id="txtNum" name="txtNum" value=""  required </td>
                       </tr>
                       
                       <tr>
                           <td>Pin</td>
                           <td><input type="text" id="txtPassword" name="txtPassword" pattern="{0-9}{4}" value="" required  onkeypress="return isNumber(event)"</td>
                       </tr>
                       
                       <tr>
                           <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                       </tr>
                   </table>
             </center>
               
               <center>
                  
                   <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
             </center>
       </form>
        </div>
        
        <script>
                function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
            }
           
            
        </script>
       
</form>
    </body>
</html>

							
								
								
								
								
								
								
								
								
								
								
								
									



