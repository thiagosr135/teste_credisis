<?php
// Cabeçalho
include_once 'includes/header.php';
?>

<!-- Formulário para adicionar novo Estado -->
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Estado</h3>
        <form action="php_action/create-estado.php" method="POST">

            <div class="input-field col s12">
                <input type="text" name="estado" id="estado" required pattern="[A-Za-zÀ-ú\s]+$">
                <label for="nome">Nome do Estado</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sigla" id="sigla" maxlength="2" required pattern="[A-Za-zÀ-ú\s]+$">
                <label for="sigla">Sigla do Estado</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list-estados.php" class="btn green">Lista de Estados</a>
        </form>
    </div>
</div>

<?php
// Rodapé
include_once 'includes/footer.php';
?>