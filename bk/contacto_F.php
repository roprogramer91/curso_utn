<?php
    include 'db.php';

    //Guardar valores del formulario en las variables correspondientes
    $nombre = $_POST ['nombre']; 
    $apellido = $_POST ['apellido'];
    $correo = $_POST ['correo'];
    $mensaje = $_POST ['mensaje'];

    //guardamos la conexion en la variable $conn
    $conn= conectar();

    //Llamamos a la funcion insertar_contacto pasando los parametros correspondientes
    if (insertar_contacto($conn,$nombre,$apellido,$correo,$mensaje)) {
        header("Location:../contacto_agradecimiento.php");
    }else{
        echo "Error mensaje no enviado.";
    }

    mysqli_close($conn);
?>