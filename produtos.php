<?php
    include "header.php";
    include "dados.php";
?>
<main>
    <h1>produtos:</h1>    
    <br>
    
    <div class="container text-center">

        <div class="row">

        <?php
        shuffle($produtos);

        foreach($produtos as $produto){
        ?>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="imagem/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> <strong><?=$produto["nome"] ?></strong><br> R$ <?= $produto["valor"]?></p>
                        <a href="produto.php?id=<?=$produto["id"]?>" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>

            </div>

        <?php
        }
        ?>
        </div>

    </div>
</main>   

<?php
    include "footer.php";
?>