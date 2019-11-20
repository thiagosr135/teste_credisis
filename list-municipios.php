<?php
// Conexão
include_once 'php_action/db_connect.php';

// Cabeçalho
include_once 'includes/header.php';

// Mensagem
include_once 'includes/message.php'

?>

<!-- Criação e preenchimento da tabela Municípios -->
<div class="row">
    <br>
    <div class="col s12 m6 push-m3 blue-grey lighten-5">
        <h3 class="light">Municípios</h3>
        <table class="striped blue-grey lighten-3">
            <thead>
                <tr>
                    <th>Nome do município:</th>
                    <th>Nome do prefeito:</th>
                    <th>População:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM municipio";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :

                    while ($dados = mysqli_fetch_array($resultado)) :
                        ?>
                        <tr>
                            <td><?php echo $dados['nome_municipio']; ?></td>
                            <td><?php echo $dados['prefeito']; ?></td>
                            <td><?php echo $dados['populacao']; ?></td>
                            <td><a href="editar-municipio.php?id=<?php echo $dados['id_municipio']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></td>
                            <td><a href="#modal<?php echo $dados['id_municipio']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></td>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['id_municipio']; ?>" class="modal">
                                <div class="modal-content">
                                    <p>Atenção</p>
                                    <p>Tem certeza que deseja excluir?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php_action/delete-municipio.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id_municipio']; ?>">
                                        <button type="submite" name="btn-deletar" class="btn red">Sim, quero deletar!</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    <?php
                        endwhile;
                    else : ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>

            </tbody>
        </table>
        <br>
        <a href="adicionar-municipio.php" class="btn">Adicionar Município</a>
    </div>
</div>

<?php
// Rodapé
include_once 'includes/footer.php';
?>