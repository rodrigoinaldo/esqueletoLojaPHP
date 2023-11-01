<?php

    include "header.php";
    include "dados.php";
?>
    <main>
        <div class="container">
            <div class="row">

                <form action="" method="post">
                    <label for="nome" style ="margin: 2px">Nome:</label>
                    <input type="text" nome="login">
                    <label for="msg" style ="margin: 2px">Senha:</label>
                    <input type="password" nome="senha">

                    <button type="button" class="btn btn-warning"><a href="cadastro.php">cadastro</a></button>

                    <a href="cadastro.php">fazer cadastro</a>
                </form>

            </div>
        </div>
    </main>
<?php

    include "footer.php";
?>