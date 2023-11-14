<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <h1>Profissionais Disponiveis:</h1>
    <div class="container">
        <div class="row row-cols-2">
            <?php $i = 1;
            shuffle($profissionais);
            foreach ($profissionais as $profissional) { ?>
                <div class="col">
                    <div class="coluna card">
                    <img src="./imagens/<?= $profissional["foto"] ?>" alt="<?= $profissional["nome"] ?>" class="card-img-top">
                        <div class="card-body">
                            <?= $profissional["nome"]?>
                        </div>
                        <p class="card-text">Local:<?= $profissional["clinica"] ?><br>
                        contato:<?= $profissional["email"] ?></p>
                        <p><a href="profissional.php?id=<?= $profissional["id"] ?>" class="btn btn-primary">Detalhes</a></p>
                    </div>
                </div>
            <?php $i++;
                if ($i > 4) break;
            } ?>
        </div>

    </div>
</main>

<?php
include "footer.php";
?>