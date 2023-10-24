<?php
    include "header.php";
    include "dados.php";

    $i = $_GET["id"];

    $query = "SELECT * FROM  produtos WHERE id = '$i'";
    $produto= $mysql->query($query);
    $produto = $produto->fetch_assoc();
                        

?>

<main>
    <div class="grid">
        <div class="coluna">
            <img src="imagem/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
        </div>

        <div class="coluna">
            <strong><?=$produto["nome"]?></strong> <br>
                    <?=$produto["valor"]?><br>

            <button type="button" class="btn btn-warning">Comprar</button>
        </div>
    </div>
</main>

<?php
    include "footer.php";
?>