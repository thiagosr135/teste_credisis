<?php
// Conexão
include_once 'php_action/db_connect.php';
// Cabeçalho
include_once 'includes/header.php';
// Select
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM municipio WHERE id_municipio = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<!-- Formulário para editar Município -->
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Município</h3>
        <form action="php_action/update-municipio.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id_municipio']; ?>">
            <div class="input-field col s12">
                <input type="text" name="municipio" id="municipio" required pattern="[A-Za-zÀ-ú\s]+$" value="<?php echo $dados['nome_municipio']; ?>">
                <label for="nome">Nome do Município</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="prefeito" id="prefeito" pattern="[A-Za-zÀ-ú\s]+$" value="<?php echo $dados['prefeito']; ?>">
                <label for="sigla">Nome do Prefeito</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="populacao" id="populacao" value="<?php echo $dados['populacao']; ?>">
                <label for="sigla">População</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="list-municipios.php" class="btn green">Lista de Municípios</a>
        </form>
    </div>
</div>

<?php
// Rodapé
include_once 'includes/footer.php';
?>