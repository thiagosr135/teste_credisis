<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

// Verificar se alguem clicou em cadastrar
if(isset($_POST['btn-cadastrar'])):
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $sigla = mysqli_escape_string($connect, $_POST['sigla']);
    
// Inserir no Bando de Dados
    $sql = "INSERT INTO estado(nome_estado, sigla) VALUES ('$estado', '$sigla')";
endif;

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../list-estados.php');
else:
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../list-estados.php');
endif;