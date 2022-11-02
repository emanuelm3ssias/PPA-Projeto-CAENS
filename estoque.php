<?php
include_once 'itemHelper.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CAENS | Estoque </title>

    <link rel="stylesheet" href="../css/geral/import.css">

</head>
<body id="professores-cadastrados">
    <header class="caens-bg cor-01">
        <div class="container caens-header">
            
            <span>CAENS</span>

            <nav class="caens-nav f-bold-400">
                <ul>
                    <li><a href="../php/inicio.php">Início</a></li>
                </ul>
            </nav>
         </div>
    </header>

    <section class="titulo-pagina-bg">
        <div class="container">
            <h1>Itens no Estoque</h1>
        </div>
    </section>


    <main class="main-cadastro-professor container">
        <div class="professores-cadastrados-bg">
            <div class="professores-cadastrados-titulos">
                <h2>Item</h2>
                <h2>Quantidade</h2>
            </div>
            
            <div class="professores-cadastrados-conteudo">
                <div class="conteudo-celula">
                    <?php
                    $itens = getItem();
                    foreach ($itens as $item){
                        echo '<span class="conteudo-celula-item" value="'.$item->id_item.'">'.$item->nome.'</span>';               
                        echo '<span class="conteudo-celula-quantidade" value="'.$item->id_item.'">'.$item->quantidade.'</span>';
                        echo '<span class="conteudo-celula-tipo" value="'.$item->id_item.'">'.$item->tipo.'</span>';
                    }
                    ?>
                    <div class="professores-cadastrados-editar">
                        <button class="botao-1">Editar</button>
                    </div>
                </div>
            </div>      
        </div>

        <button class="botao-2">voltar</button>
    </main>
    
    
</body>
</html>

<div class="professores-cadastrados-nome">
    
</div>