<?php

    include_once 'professor.php';


    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        if($tipo === 'cadastrarprofessor'){
            cadastrarprofessor();
        }else if($tipo === 'excluirprofessor'){
            excluir_professor();
        } else if ($tipo === 'editarprofessor'){
            editar_aluno();
        }
    }

    function cadastrarprofessor(){
        $nome = $_POST['nome'];
        $cod_siap = $_POST['cod_siap']; 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $professor = new Professor($nome, $cod_siap, $email, $senha);
        $professor -> inserir();
        header("Location:inicio.php");
    }

    /*function editar_professor(){
        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $id_professor = $_POST['id_professor'];
        $aluno = new Aluno($nome, $telefone, $email, $curso, $nascimento, $sexo);
        $aluno-> id= $id_aluno;
        $aluno -> editar();
        header("Location:index.php");

    }*/


    


     /*  function excluir_professor(){
        $id_aluno = $_POST['id_professor'];
        $aluno = Professor::carregar($id_aluno);
        $aluno->excluir();
    }*/
    
    /*getAlunos();
    
    function getAlunos(){
        try{
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select * from aluno");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $alunos = array();
            foreach($stmt->fetchAll() as $v => $value){
                $aluno = new Aluno($value['nome'], $value['telefone'], $value['email'], $value['id_curso'], date($value['nascimento']), $value['sexo']);
                $aluno -> id = $value['id_aluno'];
                array_push($alunos, $aluno);
                //var_dump($value);
                //echo '<br>';
            }
            return $alunos;
        }catch(PDOException $ex){
            echo 'ERRO :' . $ex->getMessage();
        }
    }*/
