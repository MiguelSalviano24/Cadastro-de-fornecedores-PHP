<?php
include_once 'templates/header.php';

?>
<div class="container" id="view-fornecedor-container">
    <div class="back-link-container">
        <a href="index.php" class="btn btn-primary" id="back-link">Voltar</a>
    </div>
    <h1 id="main-title"><?= $fornecedor['name'] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $fornecedor['phone'] ?></p>
    <p class="bold">Ramo de atividade:</p>
    <p><?= $fornecedor['activity'] ?></p>
</div>