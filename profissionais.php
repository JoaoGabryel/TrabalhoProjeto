<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container">
    <h1>Nossos Profissionais Qualificados:</h1>
        <div class="row row-cols-2">
            <?php
            foreach ($profissionais as $profissional) {
            ?>
                <div class="col">
                    <div class="coluna card">
                        <img src="./imagens/<?= $profissional["foto"] ?>" alt="<?= $profissional["nome"] ?>" class="card-img-top">
                        <div class="card-body alinhado">
                            <?= $profissional["nome"] ?>
                        </div>
                        <p class="card-text">Local:<?= $profissional["clinica"] ?><br>
                            contato:<?= $profissional["email"] ?></p>
                        <div class="alinhado">
                            <p><a href="profissional.php?id=<?= $profissional["id"] ?>" class="btn btn-primary">Detalhes</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    </div>
</main>

<?php
include "footer.php";
?>