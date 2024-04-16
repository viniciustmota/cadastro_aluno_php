<?php
include('config.php');

$id_aluno=$_GET['id_aluno'];

$sql = mysqli_query($conexao, "SELECT * FROM aluno where id_aluno='$id_aluno'") or die("Erro");
$linhas = mysqli_num_rows($sql);

while($dados=mysqli_fetch_assoc($sql)){
    echo $dados['id_aluno']. ' - ' .$dados['nome_aluno']. ' -> ' .$dados['curso_aluno'];
    ?>

    <h2>Alterar Aluno</h2>
    <form action="atualizar.php?id_aluno=<?php echo($dados['id_aluno']); ?>" method="post">
    <p>Nome:</p>
    <input type="text" name="nome_aluno" id="nome_aluno" value="<?php echo($dados['nome_aluno']); ?>">
    <p>Curso:</p>
    <input type='text' name="curso_aluno" id="nome_aluno" value="<?php echo($dados['curso_aluno']); ?>">
    <input type="submit" value="Atualizar">
</form>
<?php
}
?>
