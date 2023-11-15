<?php
include "header.php";
include "config.php";

$id = 1;

if (!empty($id)) {
    $sql = "SELECT * FROM sobre WHERE id = $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $sobre = $consulta->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT * FROM foto WHERE id = $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $foto = $consulta->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT * FROM foto WHERE id != $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $fotos = $consulta->fetchAll(PDO::FETCH_ASSOC);
}
?>

<main>
    <div class="container alinhado">
        <h1><?= $sobre["titulo"] ?></h1>
        <div class="text">
            <p><?= $sobre["texto"] ?></p>
        </div>
        <div class="alinhado img-sobre"><img src="./imagens/<?= $foto["img"] ?>" class="img-sobre"></div>
    </div>
    <div class="container">
        <h1>Mural de Pacientes Atendidos</h1>
    </div>
    <div class="container">
        <div class="row row-cols-2">
            <?php for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col">
                    <div class="card">
                        <img src="./imagens/<?= $fotos[$i]["img"] ?>" class="card-img-top">
                        <div class="card-body"><?= $fotos[$i]["nome"] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
</main>

<?php
include "footer.php";
?>