<form action="<?php echo BASE_DIR ?>?c=Country&a=<?php !isset($country) ? print 'add' : print 'edit&id=' . $country->getId(); ?>" method="POST">
    <fieldset>
        <legend>Formulaire pays</legend>
        <div class="input text">
            <label>Nom</label>
            <input id="name" type="text" name="country[name]" value="<?php !isset($country) ?: print $country->getName(); ?>" />
        </div>
        
        <div class="input submit">
            <input type="submit" value="Ajouter" />
        </div>
    </fieldset>
</form>
