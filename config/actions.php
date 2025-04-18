<?php
session_start();
include_once 'connection.php';

$data = $_POST;

// Modificacoes no banco
if (!empty($data)) {

    // Adicionar fornecedor
    if ($data['type'] === 'create') {

        $name = $data['name'];
        $phone = $data['phone'];
        $activity = $data['activity'];

        $sql = "INSERT INTO fornecedores (name, phone, activity) VALUES (:name, :phone, :activity)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":activity", $activity);

        try {
            $stmt->execute();
            $_SESSION['msg'] = "Fornecedor adicionado com sucesso";
        } catch (PDOException $e) {
            // Erro na conexao
            $error = $e->getMessage();
            echo 'Erro $error';
        }

        // Atualizar fornecedor
    } else if ($data['type'] === 'edit') {

        $name = $data['name'];
        $phone = $data['phone'];
        $activity = $data['activity'];
        $id = $data['id'];

        $sql = "UPDATE fornecedores SET name = :name, phone = :phone, activity = :activity WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":activity", $activity);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION['msg'] = "Fornecedor atualizado com sucesso";
        } catch (PDOException $e) {
            // Erro na conexao
            $error = $e->getMessage();
            echo 'Erro $error';
        }

        // Deletar fornecedor
    } else if ($data['type'] === 'delete') {

        $id = $data['id'];

        $sql = "DELETE FROM fornecedores WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION['msg'] = "Fornecedor deletado com sucesso";
            header('Location: ../index.php');
        } catch (PDOException $e) {
            // Erro na conexao
            $error = $e->getMessage();
            echo 'Erro $error';
        }
    }

    // Redirect home
    header('Location: ../index.php');

    // Selecao de dados
} else {
    $id;

    if (!empty($_GET)) {
        $id = $_GET['id'];
    }

    // Retorna os dados de um fornecedor
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
}
