<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>
<p>
    Country Page
</p>

<a href="<?php echo BASE_DIR ?>?c=Country&a=add">Ajouter un pays</a>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    
    <?php foreach ($countries as $country): ?>
    <tr>
        <td><?php echo $country->getId(); ?></td>
        <td><?php echo $country->getName(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=Country&a=delete&id=<?php echo $country->getId(); ?>">
                Supprimer
            </a>
            <a href="<?php echo BASE_DIR ?>?c=Country&a=edit&id=<?php echo $country->getId(); ?>">
                Modifier
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
