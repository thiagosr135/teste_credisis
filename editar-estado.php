<?php
// Conexão
include_once 'php_action/db_connect.php';
// Cabeçalho
include_once 'includes/header.php';
// Select
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM estado WHERE id_estado = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<!-- Formulário para editar Estado -->
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Estado</h3>
        <form action="php_action/update-estado.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id_estado']; ?>">
            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" required pattern="[A-Za-zÀ-ú\s]+$" value="<?php echo $dados['nome_estado']; ?>">
                <label for="nome">Nome do Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sigla" id="sigla" required pattern="[A-Za-zÀ-ú\s]+$" maxlength="2" value="<?php echo $dados['sigla']; ?>">
                <label for="sigla">Sigla do Estado</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="list-estados.php" class="btn green">Lista de Estados</a>
        </form>
    </div>
</div>

<?php
// Rodapé
include_once 'includes/footer.php';
?>