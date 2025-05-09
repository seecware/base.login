<?php


require_once __DIR__ . "/config/credentials.php";

try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connection...";
    $sql = "INSERT INTO clients (name, lastname, phone_number, email) VALUES (:first_name, :last_name, :phone_number, :email)";

    $stmt = $pdo -> prepare($sql);

    $stmt -> bindParam(':first_name', $data['first_name']);
    $stmt -> bindParam(':last_name', $data['last_name']);
    $stmt -> bindParam(':phone_number', $data['phone']);
    $stmt -> bindParam(':email', $data['email']);

    $stmt -> execute();

    echo "Producto insertado correctamente...";

    header("Location: /clients/added");
    exit;

} catch (PDOException $e) {
    echo "Failed to connect: " . $e -> getMessage();
}
