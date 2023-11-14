<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$id = $_GET["id"];
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
?>

<main>
    <h1>Nossos Profissionais Qualificados:</h1>
    <div class="grid">

        <?php
        foreach ($profissionais as $profissional) {
        ?>

            <div class="coluna">
                <img src="imagens/<?= $profissional["imagem"] ?>" alt="<?= $profissional["nome"] ?>">

                <p>
                    strong><?= $profissional["nome"] ?></strong><br>
                    <?= $profissional["email"] ?>
                    <?= $profissional["clinica"] ?>
                </p>

                <p>
                    <a href="produto.php?id=<?= $profissional["id"] ?>">Detalhes</a>
                </p>
            </div>

        <?php
        }
        ?>

    </div>
</main>

<?php
include "footer.php";
?>