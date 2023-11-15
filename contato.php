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
            <label for="nome">Seu nome:</label>
            <input type="text" name="nome" id="nome">
            <select class="form-select " aria-label=".form-select" style="margin-top:30px;" name="uf">
            <option value="">E-mail do Profissional</option>
                <?php
                foreach ($profissionais as $profissional) {
                ?>
                    <option value=<?= $profissional['email'] ?>><?= $profissional['email'] ?></option>

                <?php
                }
                ?>
            </select>
            <br>
            <label for="mensagem">Sua mensagem:</label>
            <textarea name="mensagem" rows="5"></textarea>
            <br>
            <button type="submit">Enviar Mensagem</button>
        </form>
    </div>
</main>

<?php
include "footer.php";
?>