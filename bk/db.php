<?php

//Funcion para establecer la conexion a la base de datos.
function conectar () {
    //Declaracion de variables para la conexion. 
    $servername = "localhost" ;
    $username = "root";
    $password = "";
    $database = "curso_utn";

    //variable que guarda la conexion usando los parametros antes definidos. 
    $conn = new mysqli($servername, $username, $password, $database);
    //Verificamos si la conexion fue exitosa o no. 
    if ($conn->connect_error){
        die("Error al conectar con la base de datos" . $conn->connect_error);
    }
    //retornamos la variable que contiene la conexion para que se pueda usar desde otro archivo.
    return $conn;
}


//Funcion para guardar la consulta de contacto en la base de datos. 
function insertar_contacto ($conn, $nombre,$apellido,$correo,$mensaje) {
   //query que se va a insertar
   $query = "INSERT INTO contacto (nombre, apellido, correo, mensaje) 
    VALUES ('$nombre','$apellido','$correo','$mensaje')";

    //retorno que se va a usar al momento de que la funcion sea llamada desde otro archivo.
    if($ejecucion_insert = mysqli_query($conn,$query)) {
        return true;
    }else{
        return false;
    }
}
?>