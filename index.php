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

        <?php $i = 1; shuffle($profissionais); foreach($profissionais as $profissional) { ?>
           
           <div class="coluna card ">
                <img src="imagens/<?=$profissional["imagem"]?>" alt="<?=$profissional["nome"]?>" class="card-img-top">
                
                <div class="card-body">
                    <h5 class="card-title"><strong><?=$profissional["clinica"]?></strong></h5>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p><a href="profissional.php?id=<?=$profissional["id"]?>" class="btn btn-primary">Detalhes</a></p>
            </div>

        <?php $i++; if($i > 4) break;} ?>

    </div>
</main>

<?php
include "footer.php";
?>