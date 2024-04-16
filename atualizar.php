<?php
include('config.php');

if($_GET['id_aluno']==''){
    echo 'Por favor, informe o ID do aluno';
}else{
    $id_aluno=$_GET['id_aluno'];
    if($_POST['nome_aluno']==''){
        echo 'Por favor, preencha o nome do aluno';
    }else if($_POST['curso_aluno'] == '')
    {
        echo 'Por favor, preencha o curso do aluno';
    }

    $nome_aluno = $_POST['nome_aluno'];
    $curso_aluno = $_POST['curso_aluno'];

    $atualizar=mysqli_query($conexao, "update aluno set nome_aluno='$nome_aluno', curso_aluno='$curso_aluno' where id_aluno='$id_aluno'") or die ("Erro");
    echo 'Registro atualizado com sucesso!';
}
