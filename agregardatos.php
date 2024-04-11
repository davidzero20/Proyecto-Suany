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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
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
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$password = $_GET['password']; // No se recomienda almacenar contraseñas en texto plano, se debería usar cifrado como password_hash()

// Preparar la consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO maestros (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso como maestro.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>





<?php

$conec = new mysqli("localhost", "root", "", "plataformacursos");
if($conec->connect_erno){
	echo "fallo al conectar a MySQL: (".$conec->connect_erno.") ".$conec->connect_erno;
}

// Recibe datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$password = $_POST['password'];

// Consulta SQL para insertar datos en la tabla de maestros
$sql = "INSERT INTO registromaestro(nombre, apellido, correo, password) VALUES ('$nombre','$apellido', '$email', '$password')";

if ($conec->query($sql_insert) === TRUE) {
    echo '<div align="center">, "Registro exitoso como maestro.",</div>';
} 
?>
	
	</html>
