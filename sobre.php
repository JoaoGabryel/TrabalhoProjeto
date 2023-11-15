<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM sobre";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$sobre = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container alinhado">
        <h1><?= $sobre["titulo"] ?></h1>
        <div class="text">
            <?= $sobre["texto"] ?>
        </div>
        <?=$id=1?>
        <div class="card alinhado"><img src=<?= $sobre[1]["foto"] ?> alt="<?= $sobre["foto"] ?>" class="card-img-top"></div>
    </div>
    <div class="container">
        <h1>Mural de Pacientes Atendidos</h1>
        <div class="row row-cols-2">
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca1.png" alt="<?= $sobre["foto"] ?>" class="card-img-top">
                    <div class="card-body">João Paulo, 10 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca2.jpg" alt="<?= $sobre["foto"] ?>" class="card-img-top">
                    <div class="card-body">Daniel Silva, 8 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca3.jpg" alt="<?= $sobre["foto"] ?>" class="card-img-top">
                    <div class="card-body">Pedro Miguel, 11 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca4.jpg" alt="<?= $sobre["foto"] ?>" class="card-img-top">
                    <div class="card-body">Paulo Souza, 7 anos</div>
                </div>
            </div>
        </div>


    </div>
</main>

<?php
include "footer.php";
?>