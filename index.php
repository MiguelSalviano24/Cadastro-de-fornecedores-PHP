<?php
include_once 'config/url.php';
include_once 'templates/header.php';

?>

<!doctype html>

<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
    </header>
    <main>
        <div class="container">
            <p id="msg">Testando mensagem</p>
            <?php if (isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"><?= $printMsg ?></p>
            <?php endif; ?>
            <h1 id="main-title">Meus fornecedores</h1>
            <?php if (count($fornecedores) > 0): ?>
                <div
                    class="table-responsive">
                    <table
                        class="table table-striped"
                        id="fornecedores-table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Ramo de atividade</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fornecedores as $fornecedor): ?>
                                <tr class="">
                                    <td scope="row"><?= $fornecedor['id'] ?></td>
                                    <td scope="row"><?= $fornecedor['name'] ?></td>
                                    <td scope="row"><?= $fornecedor['phone'] ?></td>
                                    <td scope="row"><?= $fornecedor['activity'] ?></td>
                                    <td scope="actions">
                                        <a href="#" class="btn btn-primary btn-sm"> <span class="fas fa-eye check-icon"></span> Visualizar</a>
                                        <a href="#" class="btn btn-success btn-sm"> <span class="bi bi-pencil-square"></span> Editar</a>
                                        <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_usuario" value="<?= $usuario['id'] ?>" class="btn btn-danger btn-sm"><span class="bi bi-trash"></span>Excluir</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            <?php else: ?>
                <p id="empty-list-text">Ainda não há fornecedores cadastrados <a href="create.php">Clique aqui para adicionar</a></p>
            <?php endif; ?>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>