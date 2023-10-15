<?php
    include "header.php";
    include "dados.php";

    $i = $_GET["id"];
?>

<main>
    <div class="grid">
        <div class="coluna">
            <img src="imagem/<?=$produtos[$i]["imagem"]?>" alt="<?=$produtos[$i]["nome"]?>">
        </div>

        <div class="coluna">
            <strong><?=$produtos[$i]["nome"]?></strong> <br>
                    <?=$produtos[$i]["valor"]?><br>

            <button type="button" class="btn btn-warning">Comprar</button>
        </div>
    </div>
</main>

<?php
    include "footer.php";
?>