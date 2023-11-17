<?php
include "header.php";
include "config.php";

$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container-fluid banner"><h3 class="user-select-none">SEJA BEM-VINDO</h3></div>
    <div class="container text">
        <P>O autismo é um transtorno neurológico que afeta o desenvolvimento social, comunicativo e comportamental. Caracteriza-se por desafios na interação social, comunicação atípica, interesses restritos e padrões repetitivos de comportamento. A variedade de sintomas e intensidade varia amplamente, tornando cada indivíduo único em suas experiências autistas.
        <br>Por isso, queremos ajudar as pessoas a conviverem harmoniozamente com essa condição.</p>
    </div>
    
    <div class="container alinhado">
    <h2>Profissionais Disponiveis:</h2>
        <div class="row row-cols-2">
            <?php $i = 1;
            shuffle($profissionais);
            foreach ($profissionais as $profissional) { ?>
                <div class="col alinhado">
                    <div class="card">
                    <img src="./imagens/<?= $profissional["foto"] ?>" alt="<?= $profissional["nome"] ?>" class="card-img-top">
                        <div class="card-body alinhado"><?= $profissional["nome"]?></div>
                        <p class="card-text">Local: <?= $profissional["clinica"] ?><br>
                        contato: <?= $profissional["email"] ?></p>
                        <div class="alinhado">
                            <p><a href="profissional.php?id=<?= $profissional["id"]?>" class="btn btn-primary"><i class="bi bi-list-check"></i></i>Detalhes</a></p>
                        </div>
                    </div>
                </div>
            <?php $i++;
                if ($i > 4) break;
            } ?>
        </div>

    </div>
</main>

<?php
include "footer.php";
?>