<?php
include "header.php";
include "config.php";
$id = $_GET["id"];
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $profissionais[$id]["imagem"] ?>" alt="<?= $profissionais[$id]["nome"] ?>">
        </div>

        <div class="coluna">
            <h2><?= $profissionais[$id]["nome"] ?></h2>
            <p><?= $profissionais[$id]["clinica"] ?></p>
        </div>
    </div>
</main>
<?php
include "footer.php";
?>