<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesind.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Meu Site</h1>
        <p>Bem-vindo ao meu site bonito!</p>
        <div class="button-container">
            <button class="button"><a href="cadaluno.php">Cadastrar</a></button>
            <button class="button"><a href="listaalunos.php">Lista</a></button>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $endereco = $_GET["endereco"];
        $datadenacimento = $_GET["datadenacimento"];
        $matricula = $_GET["matricula"];


        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,endereco,datadenacimento,matricula)
                VALUES('$nome','$idade','$endereco','$datadenacimento','$matricula')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];
    $datadenacimento = $_POST["datadenacimento"];
    $matricula = $_POST["matricula"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, endereco= :endereco, datadenacimento= :datadenacimento, matricula= :matricula  WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datadenacimento',$datadenacimento, PDO::PARAM_STR);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_STR);

    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

      
?>

