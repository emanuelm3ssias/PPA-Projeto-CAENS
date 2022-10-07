<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Cadastro_item.css">
    <title>Document</title>
</head>

<body id="retirada-de-item">
    <header class="caens-bg cor-01">
        <div class="container caens-header">

            <span>CAENS</span>

            <nav class="caens-nav f-bold-400">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Registros</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="bg-verde-claro">
        <div class="container titulo-pagina">
            <h1>Cadastro de Item</h1>
        </div>
        <form action="../php/itemHelper.php" method="POST" name="formCad" target="_self" class="container form-retirada-de-item" onsubmit="return adicionarDados()">
        <input style="display: none" name="acao" id="tipo" type="text" value="cadastraritem">
            <div class="bg-shadow">
                <div class="informacoes-item">

                </div>

                <div class="texto-itens identificador">
                    <label for="identificador">Identificador</label>
                    <input name="identificador" id="identificador" rows="8"
                        placeholder="ID item">

                    <label for="nome">Novo item</label>
                    <input name="nome" id="nome" rows="8"
                        placeholder="Nome">
                </div>

                <div class="texto-itens">
                    <label for="quantidade">Quantidade</label>
                    <input name="quantidade" id="quantidade" rows="8"
                        placeholder="Quantidade">
                </div>

                <div class="texto-itens select">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo">
                        <option value="perm">Permanente</option>
                        <option value="emp">Emprestado</option>
                    </select>
                </div>

                <div class="novo-item">
                    <button class="botao-1 up"><span class="detalhe-botao-novo-item">+</span> MAIS ITENS</button>
                </div>

            </div>
            <input type="submit" class="botao-2" value="Enviar">

        </form>
    </main>



</body>

</html>
