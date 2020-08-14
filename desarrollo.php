<?php

include("conexion.php");

if (isset($_POST['register'])) {

      if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $code = trim($_POST['code']);
            $rol = trim($_POST['rol']);
            $subject = trim($_POST['subject']);
            $message = trim($_POST['message']);
            
            $consulta = "INSERT INTO form1(name, email, phone, code, role, subject, message)
             VALUES (
            '$name',
             '$email',
             '$phone',
             '$code',
             '$rol',
             '$subject',
             '$message'
             )";


            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
?>
                  <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
            } else {
            ?>
                  <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
            }
      } else {
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
      }
}





?>