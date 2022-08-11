<?php
include 'config.php';

$info = [];
$id = filter_input(INPUT_GET,'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}

?>

<form action="editar_action.php" method="post">
    <fieldset>
        <legend>Editar Usuario</legend>
        <input type="hidden" name="id" value="<?= $info['id']?>>
        <label for="">
            Nome: <br>
            <input type="text" name="name" value="<?= $info['nome']?>">
        </label>
        <br>
        <br>
        <label for="">
           Email: <br>
            <input type="text" name="email" value="<?= $info['email']?>">
        </label>
        <br><br>
        <input type="submit" value="Salvar">
    </fieldset>
</form>