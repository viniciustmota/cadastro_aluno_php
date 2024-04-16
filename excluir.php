<?php
include('config.php');

if($_GET['id_aluno']==''){
    echo 'Por favor, informe o ID do aluno';
}else{

 $id_aluno = $_GET['id_aluno'];

    $del=mysqli_query($conexao, "delete from aluno where id_aluno='$id_aluno'") or die ("Erro");
    echo 'Registro excluído com sucesso!';
}
?>