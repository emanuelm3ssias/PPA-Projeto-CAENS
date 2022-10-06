<?php

    include_once 'professor.php';


  /*  function excluir_professor(){
        $id_aluno = $_POST['id_professor'];
        $aluno = Professor::carregar($id_aluno);
        $aluno->excluir();
    }

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        if($tipo === 'cadastrar'){
            cadastrar();
        }else if($tipo === 'excluirprofessor'){
            excluir_professor();
        } else if ($tipo === 'editarprofessor'){
            editar_aluno();
        }
    }

    function editar_professor(){
        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $id_professor = $_POST['id_professor'];
        $aluno = new Aluno($nome, $telefone, $email, $curso, $nascimento, $sexo);
        $aluno-> id= $id_aluno;
        $aluno -> editar();
        header("Location:index.php");

    }*/


    function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cod_siap = $_POST['cod_siap'];    
        $senha = $_POST['senha'];
        $professor = new Professor($nome, $email, $cod_siap, $senha);
        $professor -> inserir();
        header("Location:index.php");
    }
    
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
