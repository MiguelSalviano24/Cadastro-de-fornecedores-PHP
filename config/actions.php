<?php
session_start();

include_once 'connection.php';

$sql = "SELECT * FROM fornecedores";

$fornecedores = [];

$stmt = $conn->prepare($sql);

$stmt->execute();

$fornecedores = $stmt->fetchAll();
