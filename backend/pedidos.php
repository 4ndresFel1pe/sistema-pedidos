<?php
include("db.php");

// CREATE
if (isset($_POST['create'])) {
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];

    $sql = "INSERT INTO pedidos (cliente, producto, cantidad, precio, fecha) 
            VALUES ('$cliente', '$producto', '$cantidad', '$precio', '$fecha')";
    if ($conn->query($sql) === TRUE) {
        echo "Pedido agregado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}

// READ
if (isset($_GET['read'])) {
    $sql = "SELECT * FROM pedidos";
    $result = $conn->query($sql);

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];

    $sql = "UPDATE pedidos 
            SET cliente='$cliente', producto='$producto', cantidad='$cantidad', precio='$precio', fecha='$fecha' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pedido actualizado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}

// DELETE
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM pedidos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pedido eliminado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
