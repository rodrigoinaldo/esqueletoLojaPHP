<?php
    include "header.php";
    include "dados.php";
?>
<main>
    
    <h1>produtos em destaque</h1>    
    <br>
    
    <div class="container text-center">

        <div class="row">

        <?php
        $i = 0 ;
        shuffle($produtos);

        foreach($produtos as $produto){
        ?>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <img src="imagem/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> <strong><?=$produto["nome"] ?></strong><br> R$ <?= $produto["valor"]?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>

        <?php
            $i++;
            if($i == 4){
                break;
            }
        }
        ?>
        </div>

    </div>
    
</main>
    
<?php
    include "footer.php"
?>