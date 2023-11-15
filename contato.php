<?php
include "header.php";
include "config.php";
$sql = "SELECT * FROM profissional";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$profissionais = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container">
        <h1>Entre em Contato:</h1>
        <form name="form1" method="post" action="contato.php">
            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="email">Seu E-mail:</label>
            <input type="email" name="nome" id="nome" placeholder="seuemail@gmail.com">
            <select class="form-select " aria-label=".form-select" style="margin-top:30px;" name="uf">
            <option value="">Nome do Profissional</option>
                <?php
                foreach ($profissionais as $profissional) {
                ?>
                    <option value=<?= $profissional['nome'] ?>><?= $profissional['nome'] ?></option>

                <?php
                }
                ?>
            </select>
            <br>
            <label for="mensagem">Sua mensagem:</label>
            <textarea name="mensagem" rows="10"></textarea>
            <br>
            <button class="btn" type="submit"><strong>Enviar Mensagem</strong></button>
        </form>
    </div>
</main>

<?php
include "footer.php";
?>