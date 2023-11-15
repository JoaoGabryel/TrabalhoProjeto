<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
<<<<<<< HEAD
    <div class="container-fluid banner"><h3>SEJA BEM-VINDO</h3></div>
    <div class="container">
        <P>O autismo é um transtorno neurológico que afeta o desenvolvimento social, comunicativo e comportamental. Caracteriza-se por desafios na interação social, comunicação atípica, interesses restritos e padrões repetitivos de comportamento. A variedade de sintomas e intensidade varia amplamente, tornando cada indivíduo único em suas experiências autistas.</P>
        <p>Por isso, queremos ajudar as pessoas a conviverem harmoniozamente com essa condição.</p>
    </div>
    <h2>Profissionais Disponiveis:</h2>
=======
    <h1>SEJA BEM-VINDO ao <strong>Caminho Azul</strong></h1>
    <P>O autismo é um transtorno neurológico que afeta o desenvolvimento social, comunicativo e comportamental. Caracteriza-se por desafios na interação social, comunicação atípica, interesses restritos e padrões repetitivos de comportamento. A variedade de sintomas e intensidade varia amplamente, tornando cada indivíduo único em suas experiências autistas.</P>
    <p>Por isso, queremos ajudar as pessoas a conviverem harmoniozamente com essa condição.</p>
    <h1>Profissionais Disponiveis:</h1>
>>>>>>> f4e7fadc9a989ce7f292ae8e7aab98830afa3db4
    <div class="container">
        <div class="row row-cols-2">
            <?php $i = 1;
            shuffle($profissionais);
            foreach ($profissionais as $profissional) { ?>
                <div class="col">
                    <div class="coluna card">
                    <img src="./imagens/<?= $profissional["foto"] ?>" alt="<?= $profissional["nome"] ?>" class="card-img-top">
                        <div class="card-body alinhado"><?= $profissional["nome"]?></div>
                        <p class="card-text">Local: <?= $profissional["clinica"] ?><br>
                        contato: <?= $profissional["email"] ?></p>
                        <div class="alinhado">
                            <p><a href="profissional.php?id=<?= $profissional["id"]?>" class="btn btn-primary">Detalhes</a></p>
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