<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

// Verificar se alguem clicou em cadastrar
if(isset($_POST['btn-editar'])):
    $municipio = mysqli_escape_string($connect, $_POST['municipio']);
    $prefeito = mysqli_escape_string($connect, $_POST['prefeito']);
    $populacao = mysqli_escape_string($connect, $_POST['populacao']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
// Editar no Bando de Dados
    $sql = "UPDATE municipio SET nome_municipio = '$municipio', prefeito = '$prefeito', populacao = '$populacao' WHERE id_municipio = $id";
endif;

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../list-municipios.php');
else:
    $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('Location: ../list-municipios.php');
endif;