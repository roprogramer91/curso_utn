<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<header class="header">
    <nav class="MenuSuperior">
        <ul>
            <li> <a href="index.php">Inicio</a></li>
            <li> <a href="contacto.php">Contacto</a></li>
            <li> <a href="fuente.php">Fuente</a></li>
        </ul>
    </nav>
</header>

<body>
    <div class="main-generico">

        <form action="bk/contacto_F.php" method="post" class="form-contacto">
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="text" placeholder="Apellido" name="apellido" required>
            <input type="text" placeholder="Correo" name="correo" required>
            <input type="text" placeholder="Mensaje" name="mensaje" required>
            <button type="submit" class="enviar" >Enviar</button>
        </form>

    </div>
</body>

<footer>
    <p>&copy; 2024 Roger Ramirez</p>
</footer>
</html>