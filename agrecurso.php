<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>

<?php



// Conexión a la base de datos
$servername = "localhost"; // Puede que necesites cambiarlo si tu servidor de base de datos está en otro lugar
$username = "root"; // Nombre de usuario predeterminado de WAMP
$password = ""; // Contraseña predeterminada de WAMP (generalmente vacía)
$database = "plataformacursos"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$codigo = $_GET['codigo'];
$curso = $_GET['curso'];


// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO cursos (codigo, curso) VALUES ('$codigo', '$curso')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso de curso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
