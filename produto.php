<?php
    include "header.php";
    include "dados.php";

    $id = $_GET["id"];

    if(!empty($id)){
        $sql = "select * from  produtos WHERE id = '$id'";
        $consulta= $pdo->query($sql);
        $consulta -> execute();
    
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);
        
        
    }
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