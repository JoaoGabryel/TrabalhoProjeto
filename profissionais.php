<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <h1>Nossos Profissionais Qualificados:</h1>
    <div class="grid">

        <?php
        foreach ($profissionais as $profissional) {
        ?>

            <div class="card-body">
                <img src="./imagens/<?= $profissional["foto"] ?>" alt="<?= $profissional["nome"] ?>" class="card-img-top">
                <?= $profissional["clinica"] ?>
                <?= $profissional["email"] ?>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p><a href="profissional.php?id=<?= $profissional["id"] ?>" class="btn btn-primary">Detalhes</a></p>
    </div>

<?php
        }
?>

</div>
</main>

<?php
include "footer.php";
?>