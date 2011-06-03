<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>

<h3>Page Moderator()</h3>
    <a href="<?php echo BASE_DIR ?>?c=Moderator&m=add">Ajouter un Mod&eacute;rateur</a>

<table>
    <tr>
        <th>Id</th>
        <th>Login</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Email</th>
        <th>Occupation</th>
        <th>Nature</th>
        <th>Pays</th>
        <th>Etat</th>
        <th>Op&eacute;rations</th>
    </tr>

    <?php foreach ($moderators as $moderator): ?>
    <tr>
        <td><?php echo $moderator->getId(); ?></td>
        <td><?php echo $moderator->getLogin(); ?></td>
        <td><?php echo $moderator->getLastName(); ?></td>
        <td><?php echo $moderator->getFirstName(); ?></td>
        <td><?php echo $moderator->getBirthDay(); ?></td>
        <td><?php echo $moderator->getEmail(); ?></td>
        <td><?php echo $moderator->getOccupation(); ?></td>
        <td><?php echo $moderator->getNature(); ?></td>
        <td><?php echo $moderator->getCountry(); ?></td>
        <td><?php echo $moderator->getStatus(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Moderator&m=delete&id=<?php echo $moderator->getId(); ?>">
                Supprimer
            </a>
        </td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Moderator&m=update&id=<?php echo $moderator->getId();?>">
                Modifier
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>