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
        <?php
        function Mask($mask, $str)
        {

            $str = str_replace(" ", "", $str);

            for ($i = 0; $i < strlen($str); $i++) {
                $mask[strpos($mask, "#")] = $str[$i];
            }

            return $mask;
        } ?>        
        <div class="coluna">
            <h2><?= $profissionais["nome"] ?></h2>
            <p>Clínica: <?= $profissionais["clinica"] ?></p>
            <p>Telefone: (44) <?= $profissionais["fone"] ?></p>
            <p>Email: <?= $profissionais["email"] ?></p>
           
        </div>
    </div>
</main>
<?php
include "footer.php";
?>