<?php
include "header.php";
include "config.php";
$id = $_GET["id"];
$sql = "SELECT * FROM profissional WHERE id = $id";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $profissionais["foto"] ?>" alt="<?= $profissionais["nome"] ?>">
        </div>

        <div class="coluna">
            <h2><?= $profissionais["nome"] ?></h2>
            <p><?= $profissionais["clinica"] ?></p>
        </div>
    </div>
</main>
<?php
include "footer.php";
?>