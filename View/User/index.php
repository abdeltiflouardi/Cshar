<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>

<h3>Page User()</h3>
    <a href="<?php echo BASE_DIR ?>?c=User&m=add">Ajouter un Utilisateur</a>

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

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user->getId(); ?></td>
        <td><?php echo $user->getLogin(); ?></td>
        <td><?php echo $user->getLastName(); ?></td>
        <td><?php echo $user->getFirstName(); ?></td>
        <td><?php echo $user->getBirthDay(); ?></td>
        <td><?php echo $user->getEmail(); ?></td>
        <td><?php echo $user->getOccupation(); ?></td>
        <td><?php echo $user->getNature(); ?></td>
        <td><?php echo $user->getCountry(); ?></td>
        <td><?php echo $user->getStatus(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=User&m=delete&id=<?php echo $user->getId(); ?>">
                Supprimer
            </a>
        </td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=User&m=update&id=<?php echo $user->getId();?>">
                Modifier
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>