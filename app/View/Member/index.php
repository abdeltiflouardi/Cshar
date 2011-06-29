<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>

<h3>Page Member()</h3>
    <a href="<?php echo BASE_DIR ?>?c=Member&m=add">Ajouter un Utilisateur</a>

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

    <?php foreach ($members as $member): ?>
    <tr>
        <td><?php echo $member->getId(); ?></td>
        <td><?php echo $member->getLogin(); ?></td>
        <td><?php echo $member->getLastName(); ?></td>
        <td><?php echo $member->getFirstName(); ?></td>
        <td><?php echo $member->getBirthDay(); ?></td>
        <td><?php echo $member->getEmail(); ?></td>
        <td><?php echo $member->getOccupation(); ?></td>
        <td><?php echo $member->getNature(); ?></td>
        <td><?php echo $member->getCountry(); ?></td>
        <td><?php echo $member->getStatus(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Member&m=delete&id=<?php echo $member->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>