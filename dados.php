<?php

    $servidor ="localhost";
    $usuario = "root";
    $senha ="";
    $banco= "atlantapneus"; 

    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;",$usuario,$senha); //o que vai realmente se conectar ao banco

        $sql = "select * from produtos";
        $consulta= $pdo->prepare($sql);
        $consulta->execute();
    
        $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    } catch (\Exception $e) {
        echo"erro ao se conectar";
        echo $e->getMessage();
    }


    
    /* 
    $produtos[1] = array ("id" => 1,
    "nome" => "175/65 R 14", 
    "valor" =>"235.00",
    "imagem" => "175-65-14.jpg",
    "tipoProduto" => "pneu"
    );
    $produtos[2] = array ("id" => 2,
    "nome" => "185/65 R 15 ", 
    "valor" =>"354.00",
    "imagem" => "185-65-15.webp",
    "tipoProduto" => "pneu"
    );
    $produtos[3] = array ("id" => 3,
    "nome" => "205/60 R 14", 
    "valor" =>"285.00",
    "imagem" => "205-60-14.jpg",
    "tipoProduto" => "pneu"
    );
    $produtos[4] = array ("id" => 4,
    "nome" => "205/60 R 16", 
    "valor" =>"320.00",
    "imagem" => "205-60-16-.webp",
    "tipoProduto" => "pneu"
    );
    $produtos[5] = array ("id" => 5,
    "nome" => "215/65 R 16", 
    "valor" =>"314.00",
    "imagem" => "215-65-16.jpg",
    "tipoProduto" => "pneu"
    );
    $produtos[6] = array ("id" => 6,
    "nome" => "225/55 R 17", 
    "valor" =>"415.00",
    "imagem" => "225-55-17.jpg",
    "tipoProduto" => "pneu"
    );
    $produtos[7] = array ("id" => 7,
    "nome" => "235/40 R18", 
    "valor" =>"450.00",
    "imagem" => "235-40-18.jpg",
    "tipoProduto" => "pneu"
    );
    $produtos[8] = array ("id" => 8,
    "nome" => "Amortecedor dianteiro", 
    "valor" =>"250.00",
    "imagem" => "amortecedor.png",
    "tipoProduto" => "oferta"
    );
    $produtos[9] = array ("id" => 9,
    "nome" => "homocinetica.", 
    "valor" =>"120.00",
    "imagem" => "homocinetica.jpg",
    "tipoProduto" => "oferta"
    );
    $produtos[10] = array ("id" => 10,
    "nome" => "oleo 15w40", 
    "valor" =>"35,00",
    "imagem" => "oleo.jpg",
    "tipoProduto" => "oferta"
    );
    $produtos[11] = array ("id" => 11,
    "nome" => "Pivo de direção", 
    "valor" =>"35.00",
    "imagem" => "pivo.jpg",
    "tipoProduto" => "oferta"
    );
    */
  
?>