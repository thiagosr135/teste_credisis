<?php
// Cabeçalho
include_once 'includes/header.php';
?>

<!-- Formulário para adicionar novo Município -->
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Município</h3>
        <form action="php_action/create-municipio.php" method="POST">

            <div class="input-field col s12">
                <input type="text" name="municipio" id="municipio" required pattern="[A-Za-zÀ-ú\s]+$">
                <label for="nome">Nome do Município</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="prefeito" id="prefeito" pattern="[A-Za-zÀ-ú\s]+$">
                <label for="nome">Nome do Prefeito</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="populacao" id="populacao">
                <label for="nome">População</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="list-municipios.php" class="btn green">Lista de Municípios</a>
        </form>
    </div>
</div>

<?php
// Rodapé
include_once 'includes/footer.php';
?>