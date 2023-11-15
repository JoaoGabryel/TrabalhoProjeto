<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM sobre";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$sobre = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container alinhado">
        <?php
        foreach ($sobre as $item) {
        ?>
            <h1><?= $item["titulo"] ?></h1>
            <div class="text">
                <?= $item["texto"] ?>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <div class="card">
                        <div class="card alinhado"><img src="./imagens/<?= $item["foto"] ?>" alt="<?= $item["foto"] ?>" class="card-img-top"></div>
                    </div>
                </div>
            </div>
    </div>
<?php
        }
?>
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