<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>
<p>
    Country Page(<?php echo count($files);?>)
</p>

<a href="<?php echo BASE_DIR ?>?c=File&m=add">Ajouter un fichier</a>

<table>
    <tr>
        <th>Id</th>
        <th>IdGroupe</th>
        <th>Nom</th>
        <th>lien</th>
        <th>Date d'emission</th>
        <th>Date Dernier telechargement</th>
    </tr>

    <?php foreach ($files as $file): ?>
    <tr>
        <td><?php echo $file->getId(); ?></td>
        <td><?php echo $file->getGroup(); ?></td>
        <td><?php echo $file->getName(); ?></td>
        <td><?php echo $file->getLink(); ?></td>
        <td><?php echo $file->getCreated(); ?></td>
        <td><?php echo $file->getDownloaded(); ?></td>
        <td>
            <a href="<?php echo BASE_DIR ?>?c=File&m=delete&id=<?php echo $file->getId(); ?>">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>