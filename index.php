<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

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
            <td><?= $user->getId();?></td>
            <td><?= $user->getNome();?></td>
            <td><?= $user->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?= $user->getId();?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?= $user->getId();?>">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php
        endforeach;
    ?>
        
</table>
