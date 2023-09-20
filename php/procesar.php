<?php
include('conexion.php');

if (!empty($_POST)) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $sexo = $_POST['sexo'];
    $nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $institucion = $_POST['institucion'];
    $especialidad = implode(', ', $_POST['especialidad']);

    $sql = "INSERT INTO usuario (nombre, apellido, cedula, sexo, fecha_de_Nacimiento, direccion, email, telefono, institucion, especialidad) 
            VALUES ('$nombre', '$apellido', '$cedula', '$sexo', '$nacimiento', '$direccion', '$email', '$telefono', '$institucion', '$especialidad')";

    if ($conexion->query($sql) === true) {
        
    } else {
        echo "Error, registro no insertado: " . $conexion->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Registro realizado</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-4">
            Registro realizado exitosamente
        </h1>
        <p class="block text-gray-700 text-sm font-bold mb-2">Nombre: <?php echo $nombre ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Apellido: <?php echo $apellido ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Cedula: <?php echo $cedula ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Sexo: <?php echo $sexo ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Fecha de nacimiento: <?php echo $nacimiento?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Dirección: <?php echo $direccion ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Email: <?php echo $email ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Teléfono: <?php echo $telefono ?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Institucion: <?php echo $institucion?></p>
        <p class="block text-gray-700 text-sm font-bold mb-2">Especialidad: <?php echo $especialidad ?></p>
        
    </div>
    <script>
        setTimeout(function(){

            window.location.replace("http://localhost/Laboratorio1/index.html");
        },5000)
    </script>
</body>
</html>

