<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>

    <h3>Page Commentaire(<?php echo count($comments);?>)</h3>
    <a href="<?php echo BASE_DIR ?>?c=Comment&m=add">Ajouter un Commentaire</a>

<table>
    <tr>
        <th>Id</th>
        <th>Ficher</th>
        <th>Membre</th>
        <th>Commentaire</th>
    </tr>

    <?php foreach ($comments as $comment): ?>
    <tr>
        <td><?php echo $comment->getId(); ?></td>
        <td><?php echo $comment->getFile(); ?></td>
        <td><?php echo $comment->getMember(); ?></td>
        <td><?php echo $comment->getComment(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Comment&m=delete&id=<?php echo $comment->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>