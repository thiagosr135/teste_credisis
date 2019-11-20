<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

// Verificar se alguem clicou em cadastrar
if(isset($_POST['btn-editar'])):
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $sigla = mysqli_escape_string($connect, $_POST['sigla']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
// Editar no Bando de Dados
    $sql = "UPDATE estado SET nome_estado = '$estado', sigla = '$sigla' WHERE id_estado = $id";
endif;

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../list-estados.php');
else:
    $_SESSION['mensagem'] = "Erro ao atualizar!";
    header('Location: ../list-estados.php');
endif;