<?php
// Sessão
session_start();

// Conexão
require_once 'db_connect.php';

// Verificar se alguem clicou em cadastrar
if(isset($_POST['btn-deletar'])):

    $id = mysqli_escape_string($connect, $_POST['id']);
    
// Inserir no Banco de Dados
    $sql = "DELETE FROM municipio WHERE id_municipio ='$id'";
endif;

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../list-municipios.php');
else:
    $_SESSION['mensagem'] = "Erro ao deletar!";
    header('Location: ../list-municipios.php');
endif;