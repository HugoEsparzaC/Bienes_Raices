<?php
// Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();
// Crear un email y password
$email = "azrapse.oguh@gmail.com";
$password = "tcJ78pKiK&R^s";
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
// Query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '$email', '$passwordHash'); ";
// Agregarlo a la base de datos
mysqli_query($db, $query);