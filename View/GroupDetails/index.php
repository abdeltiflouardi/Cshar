<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>

    <h3>Page Details Groups()</h3>
    <a href="<?php echo BASE_DIR ?>?c=GroupDetails&m=add">Ajouter un DetailsGroups</a>

<table>
    <tr>
        <th>Groupe</th>
        <th>Membre</th>
        <th>Date d'int&eacute;gration</th>
        <th>Notification</th>
    </tr>

    <?php foreach ($groupsdetails as $groupdetails): ?>
    <tr>
        <td><?php echo $groupdetails->getGroup(); ?></td>
        <td><?php echo $groupdetails->getMember(); ?></td>
        <td><?php echo $groupdetails->getDateOfIntegration(); ?></td>
        <td><?php echo $groupdetails->getNotification(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=GroupDetails&m=delete&id=<?php echo $member->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>