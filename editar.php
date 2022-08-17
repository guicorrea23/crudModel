<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET,'id');

if($id){
    $usuario = $usuarioDao->findById($id);
}


if($usuario === false){
    header("Location: index.php");
    exit;
}

?>

<form action="editar_action.php" method="post">
    <fieldset>
        <legend>Editar Usuario</legend>
        <input type="hidden" name="id" value="<?= $usuario->getId();?>>
        <label for="">
            Nome: <br>
            <input type="text" name="name" value="<?= $usuario->getNome();?>">
        </label>
        <br>
        <br>
        <label for="">
           Email: <br>
            <input type="text" name="email" value="<?= $usuario->getEmail();?>">
        </label>
        <br><br>
        <input type="submit" value="Salvar">
    </fieldset>
</form>