<?php 
include("conexion.php");


if (isset($_POST['register2'])) {

      if (strlen($_POST['fname']) >= 1 && strlen($_POST['city']) >= 1) {
            $fname =        trim($_POST['fname']);
            $street =       trim($_POST['street']);
            $lname =        trim($_POST['lname']);
            $city =         trim($_POST['city']);
            $emailadd =     trim($_POST['emailadd']);
            $state =        trim($_POST['state']);
            $phonumber =    trim($_POST['phonumber']);
            $zip =          trim($_POST['zip']);
            $altphonumber = trim($_POST['altphonumber']);
            $bedrooms =     trim($_POST['bedrooms']);
            $bathrooms =    trim($_POST['bathrooms']);
            $typeproper =   trim($_POST['typeproper']);
            $price =        trim($_POST['price']);
            $comments =     trim($_POST['comments']);
            $selling =      trim($_POST['selling']);
            $consult_form2 = "INSERT INTO form2(id, first_name, street, last_name, city, emailadd, state, phonumber, zip, alternate_number, bedrooms, bathrooms, type_property, price, comments, selling)
             VALUES (
                 '$fname',  
                  '$street',    
                  '$lname',     
                  '$city',      
                  '$emailadd',  
                  '$state',   
                  '$phonumber', 
                  '$zip',  
                  '$altphonumber',
                  '$bedrooms',
                  '$bathrooms', 
                  '$typeproper',
                  '$price', 
                  '$comments',  
                  '$selling'   
             )";


            $result_send_form = mysqli_query($conex, $consult_form2);
            if ($result_send_form) {
            ?>
                  <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
            } else {
            ?>
                  <h3 class="bad">¡Ups ha ocurrido un error form2!</h3>
            <?php
            }
      } else {
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>
<?php
      }
}


?>