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
    $foto = $consulta->fetch(PDO::FETCH_ASSOC); //Fetch 
}
?>

<main>
    <div class="container alinhado">
        <h1><?= $sobre["titulo"] ?></h1>
        <div class="text">
            <?= $sobre["texto"] ?>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <div class="card">
                    <div class="card alinhado">
                        <img src="./imagens/<?= $foto["img"] ?>" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Mural de Pacientes Atendidos</h1>
        <div class="row row-cols-2">
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca1.png" alt="" class="card-img-top">
                    <div class="card-body">João Paulo, 10 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca2.jpg" alt="" class="card-img-top">
                    <div class="card-body">Daniel Silva, 8 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca3.jpg" alt="" class="card-img-top">
                    <div class="card-body">Pedro Miguel, 11 anos</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./imagens/crianca4.jpg" alt="" class="card-img-top">
                    <div class="card-body">Paulo Souza, 7 anos</div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
include "footer.php";
?>