<?php
require 'config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="adicionar.php">Adicionar Usuario</a>

<table border=1 width=100%>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇOES</th>
    </tr>

    <?php
        foreach($lista as $user):
    ?>
        <tr>
            <td><?= $user['id'];?></td>
            <td><?= $user['nome'];?></td>
            <td><?= $user['email'];?></td>
            <td>
                <a href="editar.php?id=<?= $user['id'];?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?= $user['id'];?>">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php
        endforeach;
    ?>
        
</table>