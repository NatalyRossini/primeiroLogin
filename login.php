<?php 
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){ //fazendo as três verificações se o campo esta vazio
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

    $resp = $conn->query($sql) or die($conn->error);

    $row = $resp->fetch_object();

    $qtd = $resp->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
        print"<script>location.href='dashboard.php';</script>";
    }else{
        print"<script>alert('Usuário e/ou senha incorreto(s)')</script>";
        print"<script>location.href='index.php';</script>";
    }
?> 

