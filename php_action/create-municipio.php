<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

// Verificar se alguem clicou em cadastrar
if(isset($_POST['btn-cadastrar'])):
    $municipio = mysqli_escape_string($connect, $_POST['municipio']);
    $prefeito = mysqli_escape_string($connect, $_POST['prefeito']);
    $populacao = mysqli_escape_string($connect, $_POST['populacao']);
    
// Inserir no Bando de Dados
    $sql = "INSERT INTO municipio(nome_municipio, prefeito, populacao) VALUES ('$municipio', '$prefeito', '$populacao')";
endif;

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../list-municipios.php');
else:
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../list-municipios.php');
endif;