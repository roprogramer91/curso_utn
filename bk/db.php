<?php

//Funcion para establecer la conexion a la base de datos.
function conectar () {
    //Declaracion de variables para la conexion. 
    $servername = "" ;
    $username = "";
    $password = "";
    $database = "";

    //variable que guarda la conexion usando los parametros antes definidos. 
    $conn = new mysqli($servername, $username, $password, $database);

    //Verificamos si la conexion fue exitosa o no. 
    if ($conn->connect_error){
        die("Error al conectar con la base de datos" . $conn->connect_error);
    }

    //retornamos la variable que contiene la conexion para que se pueda usar desde otro archivo.
    return $conn;

}


?>