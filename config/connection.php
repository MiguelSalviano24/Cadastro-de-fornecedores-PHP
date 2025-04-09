<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$db = 'cadastro_fornecedores';

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $passwd);
