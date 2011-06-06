<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>
<form action="<?php BASE_DIR?>?c=Member&m=subscribe" method="POST" id="formSubscribe">
    <fieldset>
        <legend>Inscription</legend>
        <div class="input text">
            <label for="login">Login :</label>
            <input type="text" name="member[login]" id="login" required/>
        </div>
        <div class="input text">
            <label for="password">Mot de passe :</label>
            <input type="password" name="member[password]" id="password" required/>
        </div>
        <div class="input text">
            <label for="email">Email :</label>
            <input type="email" name="member[email]" id="email" required/>
        </div>
        <div class="input text">
            <input type="submit" value="S'inscrire"/>
        </div>
    </fieldset>
</form>
    <script type="text/javascript" src="<?php BASE_DIR ?>app/javascript/jquery.js"></script>
    <script type="text/javascript" src="<?php BASE_DIR ?>app/javascript/subscribe.js"></script>

