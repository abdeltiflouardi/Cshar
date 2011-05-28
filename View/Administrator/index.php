<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>

<h3>Page Administrator(<?php echo count($administrators)?>)</h3>
    <a href="<?php echo BASE_DIR ?>?c=Administrator&m=add">Ajouter un Administrator</a>

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

    <?php foreach ($administrators as $administrator): ?>
    <tr>
        <td><?php echo $administrator->getId(); ?></td>
        <td><?php echo $administrator->getLogin(); ?></td>
        <td><?php echo $administrator->getLastName(); ?></td>
        <td><?php echo $administrator->getFirstName(); ?></td>
        <td><?php echo $administrator->getBirthDay(); ?></td>
        <td><?php echo $administrator->getEmail(); ?></td>
        <td><?php echo $administrator->getOccupation(); ?></td>
        <td><?php echo $administrator->getNature(); ?></td>
        <td><?php echo $administrator->getCountry(); ?></td>
        <td><?php echo $administrator->getStatus(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Administrator&m=delete&id=<?php echo $administrator->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>