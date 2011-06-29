
<form action="<?php echo BASE_DIR ?>?c=Country&m=update&id=<?php foreach ($countries as $country) : echo $country->getId(); endforeach; ?>" method="POST">
    <fieldset>
        <legend>Formulaire pays</legend>
        <div class="input text">
            <label>Nom</label>
            <input id="name" type="text" name="country[name]" value="<?php echo $country->getName(); ?>"/>
        </div>

        <div class="input submit">
            <input type="submit" value="Modifier" name="modify" />
        </div>
    </fieldset>
</form>