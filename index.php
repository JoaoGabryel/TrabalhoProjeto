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
    <div class="grid">

        <?php
        $i = 1;
        shuffle($profissionais);
        foreach ($profissionais as $profissional) {
        ?>

            <div class="coluna">
                <img src="imagens/<?= $profissional["imagem"] ?>" alt="<?= $profissional["nome"] ?>">

                <p>
                    <strong><?= $profissional["nome"] ?></strong><br>
                    <?= $profissional["email"] ?>
                    <?= $profissional["clinica"] ?>
                </p>

                <p>
                    <a href="produto.php?id=<?= $profissional["id"] ?>">Detalhes</a>
                </p>
            </div>

        <?php
            $i++;
            if ($i > 4) break;
        }
        ?>

    </div>
</main>

<?php
include "footer.php";
?>