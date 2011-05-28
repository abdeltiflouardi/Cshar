<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>
<p>
    Groups Page(<?php echo count($groups);?>)
</p>

<a href="<?php echo BASE_DIR ?>?c=Groups&m=add">Ajouter un groupe</a>

<table>
    <tr>
        <th>Id</th>
        <th>Membre</th>
        <th>Nom Groupe</th>
        <th>Activité</th>
        <th>Date d'emission</th>
    </tr>

    <?php foreach ($groups as $group): ?>
    <tr>
        <td><?php echo $group->getId(); ?></td>
        <td><?php echo $group->getMember(); ?></td>
        <td><?php echo $group->getName(); ?></td>
        <td><?php echo $group->getActivity(); ?></td>
        <td><?php echo $group->getDateIssue(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Groups&m=delete&id=<?php echo $group->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>