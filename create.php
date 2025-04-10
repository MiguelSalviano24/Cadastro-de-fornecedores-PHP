<?php
include_once 'templates/header.php';
?>

<div class="container">
    <div class="back-link-container">
        <a href="index.php" class="btn btn-primary" id="back-link">Voltar</a>
    </div>
    <h1 id="main-title">Adicionar fornecedor</h1>
    <form id="create-form" action="./config/actions.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="mb-3">
            <label for="name">Nome do fornecedor:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="phone">Telefone para contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone para contato" required>
        </div>
        <div class="mb-3">
            <label for="activity">Área de atuação:</label>
            <input type="text" class="form-control" id="activity" name="activity" placeholder="Digite a área de atuação" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>