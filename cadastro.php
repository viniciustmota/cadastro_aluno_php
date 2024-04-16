<?php

include('config.php');

if($_POST['nome_aluno']=='')
{
    echo'Por favor, preencha o nome do aluno';
}
else if($_POST['curso_aluno']==''){
    echo 'Por favor, preencha o curso do aluno';
}

$nome_aluno = $_POST['nome_aluno'];
$curso_aluno = $_POST['curso_aluno'];

$in = mysqli_query($conexao, "INSERT INTO aluno(nome_aluno, curso_aluno)
values ('$nome_aluno', '$curso_aluno')") or die("Erro");
if($in){
    echo 'Cadastro afetuado com sucesso';
}

?>