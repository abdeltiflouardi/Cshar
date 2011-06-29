<form action="<?php echo BASE_DIR ?>?c=Country&m=add" method="POST">
    <fieldset>
        <legend>Formulaire pays</legend>
        <div class="input text">
            <label>Nom</label>
            <input id="name" type="text" name="country[name]" />
        </div>
        
        <div class="input submit">
            <input type="submit" value="Ajouter" />
        </div>
    </fieldset>
</form>