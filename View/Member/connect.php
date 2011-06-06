<form method="POST" action="<?php BASE_DIR?>?c=Member&m=connect">
    <fieldset>
        <legend>Authentification</legend>
        <div class="input text">
            <label for="login">Login :</label>
                <input type="text" name="member[login]" id="login"/>
        </div>
        <div class="input text">
            <label for="password">Mot de passe:</label>
            <input type="password" name="member[password]" id="password">
        </div>
        <div class="input text">
            <input type="submit" value="Entrer"/>
        </div>
    </fieldset>
</form>