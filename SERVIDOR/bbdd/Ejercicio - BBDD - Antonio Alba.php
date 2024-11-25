<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "empresa";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    echo ("Error al conectar: " . $conn->connect_error);
}
echo "Conexión exitosa<br>";

// Paso 1: Agregar datos a la tabla Usuarios
$query_insert = "INSERT INTO Usuarios (Nombre, Clave, Rol) VALUES (?, ?, ?)";
$data_usuarios = [
    ['Usuario1', 'User1', 1],
    ['Usuario2', 'User2', 1],
    ['Usuario3', 'User2', 1],
    ['Usuario4', 'User1', 1],
    ['Root1', 'root1', 0]
];
$total_insertados = 0;

$stmt = $conn->prepare($query_insert);
if ($stmt) {
    foreach ($data_usuarios as $item) {
        $stmt->bind_param("ssi", $item[0], $item[1], $item[2]);
        $stmt->execute();
        $total_insertados++;
    }
    $stmt->close();
    echo "$total_insertados registros añadidos correctamente.<br>";
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

echo "<br>Contenido de la tabla Usuarios:<br>";
$query_select = 'SELECT * FROM Usuarios';
$result = $conn->query($query_select);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row['Nombre'] . ", Clave: " . $row['Clave'] . ", Rol: " . $row['Rol'] . "<br>";
    }
    $result->free();
} else {
    echo "Error al recuperar datos: " . $conn->error;
}

echo "<br>Filtrar usuarios con rol igual a 0:<br>";
$query_rol_0 = 'SELECT * FROM Usuarios WHERE Rol = ?';
$stmt = $conn->prepare($query_rol_0);

if ($stmt) {
    $rol = 0;
    $stmt->bind_param("i", $rol);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row['Nombre'] . ", Clave: " . $row['Clave'] . "<br>";
    }
    $stmt->close();
} else {
    echo "Error al filtrar por rol: " . $conn->error;
}

echo "<br>Eliminar usuarios cuyo nombre empiece por 'Usuario' y tengan clave distinta de 'User1':<br>";
$query_delete = "DELETE FROM Usuarios WHERE Nombre LIKE 'Usuario%' AND Clave != 'User1'";

if ($conn->query($query_delete) === TRUE) {
    echo $conn->affected_rows . " registros eliminados.<br>";
} else {
    echo "Error al eliminar datos: " . $conn->error;
}

echo "<br>Actualizar clave para Root1:<br>";
$query_update = "UPDATE Usuarios SET Clave = ? WHERE Nombre = ?";
$stmt = $conn->prepare($query_update);

if ($stmt) {
    $new_password = 'new_root1';
    $name = 'Root1';
    $stmt->bind_param("ss", $new_password, $name);
    $stmt->execute();
    echo "Clave actualizada para Root1.<br>";
    $stmt->close();
} else {
    echo "Error al actualizar clave: " . $conn->error;
}

echo "<br>Crear la tabla Pedidos:<br>";
$query_create_table = "CREATE TABLE IF NOT EXISTS Pedidos (
    IdPedido INT AUTO_INCREMENT PRIMARY KEY,
    Detalle VARCHAR(255),
    Fecha DATE
)";
if ($conn->query($query_create_table) === TRUE) {
    echo "Tabla 'Pedidos' creada.<br>";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

echo "<br>Insertar datos en la tabla Pedidos:<br>";
$query_insert_pedidos = "INSERT INTO Pedidos (Detalle, Fecha) VALUES (?, ?)";
$stmt = $conn->prepare($query_insert_pedidos);

if ($stmt) {
    $stmt->bind_param("ss", $detalle, $fecha);
    $detalle = 'Pedido1';
    $fecha = '2024-11-21';
    $stmt->execute();

    $detalle = 'Pedido2';
    $fecha = '2024-11-22';
    $stmt->execute();

    echo "Datos añadidos a la tabla 'Pedidos'.<br>";
    $stmt->close();
} else {
    echo "Error al añadir datos a la tabla Pedidos: " . $conn->error;
}

echo "<br>Listar contenido de la tabla Pedidos:<br>";
$query_select_pedidos = 'SELECT * FROM Pedidos';
$result = $conn->query($query_select_pedidos);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Detalle: " . $row['Detalle'] . ", Fecha: " . $row['Fecha'] . "<br>";
    }
    $result->free();
} else {
    echo "Error al listar datos de la tabla Pedidos: " . $conn->error;
}

echo "<br>Eliminar la tabla Pedidos:<br>";
$query_drop_table = "DROP TABLE IF EXISTS Pedidos";
if ($conn->query($query_drop_table) === TRUE) {
    echo "Tabla 'Pedidos' eliminada.<br>";
} else {
    echo "Error al eliminar la tabla: " . $conn->error;
}

$conn->close();
