<?php
include_once 'templates/header.php';

?>

<div class="container" id="view-fornecedor-container">
    <h1 id="main-title"><?= $fornecedor['name'] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $fornecedor['phone'] ?></p>
    <p class="bold">Área da atuação:</p>
    <p><?= $fornecedor['activity'] ?></p>
</div>