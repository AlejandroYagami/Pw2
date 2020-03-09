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
    $sql = mysqli_query($con, "SELECT * FROM tbalunos") or die("ERRO");
    while ($dados = mysqli_fetch_assoc($sql))
    {
        $id = $dados["id"];
        $nome = $dados["nome"];
    }
    ?>
</body>
</html>