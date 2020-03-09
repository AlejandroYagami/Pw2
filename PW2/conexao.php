<?php

# CONEXÃO NO MYSQL E NA BASE DE DADOS
$con=mysqli_connect("localhost","root","etec","dbetec");

# que for PC digita assim
# $con=mysqli_connect("localhost:3307","root","etec","dbescola");
# $con=mysql_connect("localhost:3307","root","etec","dbetecta");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_error())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO Á BASE DE DADOS
    echo "Falhou a conexão no mySQL: " . mysqli_connect_error();
}
else {echo "Conectado com sucesso. Aeee!";}

?>