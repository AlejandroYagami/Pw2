<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>UPDATE</th>
        <th>DELETE</th>
    </tr>
    <?php
    include("conexao.php");
    $sql = mysqli_query($con, "SELECT * FROM tdalunos") or die("ERROPW2");
    while ($dados = mysqli_fetch_assoc($sql))
    {
        $id = $dados["id"];
        $nome = $dados["nome"];
        $email = $dados["email"];
    
    ?>
    <tr>
        <td><?php print $id ?><td>
        <td><?php print $nome ?><td>
        <td><?php print $email ?><td>

        <td>
            <a href="update_from.php?id=<?php print $id; ?>">ALTERAR</a>
        </td>
        <td>
            <a href="delete.php?id=<?php print $id; ?>">APAGAR</a>
        </td>
    </tr>

    <?php
    }//FECHAMENTO DO WHILE

    //FECHAMENTO DA CONEXÃO MYSQL
    mysqli_close($con)
    ?>
</body>
</html>