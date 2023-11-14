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

        <?php $i = 1; shuffle($produtos); foreach($produtos as $produto) { ?>
           
           <div class="coluna card ">
                <img src="imagens/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>" class="card-img-top">
                
                <div class="card-body">
                    <h5 class="card-title"><strong><?=$produto["nome"]?></strong></h5>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p><a href="produto.php?id=<?=$produto["id"]?>" class="btn btn-primary">Detalhes</a></p>
            </div>

        <?php $i++; if($i > 4) break;} ?>

    </div>
</main>

<?php
include "footer.php";
?>