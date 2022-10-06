<?php

include_once "item.php";



if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastraritem'){
        cadastrar_item();
    }else if($tipo === "excluiritem"){
        excluir_item();
    }else if($tipo === "editaritem"){
        editar_item();
    }
}

function cadastrar_item()
{
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    $aluno = new Item($nome,$quantidade,$tipo);
    $aluno->inserir();
    header("Location:index.php");
}

function editar_item(){
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    $id_item = $_POST['id_item'];
    $item = new Item($nome,$telefone,$quantidade,$tipo);
    $item->id_eitem = $id_item;
    $item->editar();
    header("Location:index.php");

}

function excluir_item(){
    $id_item = $_POST["id_item"];
    $item = Item::carregar($id_item);
    $item->excluir();
    header("Location:index.php");
}

function getItens(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from item");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $itens = array();
        foreach($stmt->fetchAll() as $v => $valor){
            $item = new Item(
                $valor['nome'],
                $valor['quantidade'],
                $valor['tipo'];
            $item->id_item = $valor['id_item'];
            array_push($itens, $item);
        }

        return $item;

    }catch(PDOException $ex){
        echo 'Erro' . $ex->getMassage();
    }
}


