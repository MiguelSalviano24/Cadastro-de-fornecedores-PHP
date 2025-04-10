<?php
session_start();
include_once 'connection.php';

$id;

if (!empty($_GET)) {
    $id = $_GET['id'];
}

if (!empty($id)) {

    $sql = "SELECT * FROM fornecedores WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $fornecedor = $stmt->fetch();
} else {

    $sql = "SELECT * FROM fornecedores";

    $fornecedores = [];

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $fornecedores = $stmt->fetchAll();
}
