<?php
// Datos de conexión
$host = "localhost";
$port = "5432";
$dbname = "tudeca";
$user = "postgresql";      // reemplaza por el usuario real de PostgreSQL
$password = "emirbb18";  // reemplaza por la contraseña real

// Crear conexión
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Error al conectar con la base de datos.");
}

// Obtener y sanitizar datos del formulario
$nombre = pg_escape_string($_POST['nombre']);
$apellido = pg_escape_string($_POST['apellido']);
$telefono = pg_escape_string($_POST['telefono']);
$sexo = pg_escape_string($_POST['sexo']);
$correo = pg_escape_string($_POST['correo']);
$contraseña = pg_escape_string(password_hash($_POST['contraseña'], PASSWORD_DEFAULT)); // encriptada

// Insertar datos
$query = "INSERT INTO Turista (nombre, apellido, telefono, sexo, correo, contraseña)
          VALUES ('$nombre', '$apellido', '$telefono', '$sexo', '$correo', '$contraseña')";

$result = pg_query($conn, $query);

if ($result) {
    echo "Usuario registrado correctamente.";
    // Puedes redirigir o mostrar una vista más amigable
} else {
    echo "Error al registrar el usuario: " . pg_last_error($conn);
}

pg_close($conn);
?>
