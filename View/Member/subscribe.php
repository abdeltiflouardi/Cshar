<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>
<form action="<?php BASE_DIR?>?c=Member&m=subscribe" method="POST" id="formSubscribe">
    <fieldset>
        <legend>Inscription</legend>
        <div class="input text">
            
            <input type="text" name="member[login]" id="login" required  placeholder="Login" autofocus="on"/>
        </div>
        <div class="input text">

            <input type="password" name="member[password]" id="password" required placeholder="Password" />
        </div>
        <div class="input text">

            <input type="email" name="member[email]" id="email" required placeholder="Email"/>
        </div>
        <div class="input text">
            <input type="submit" value="S'inscrire"/>
        </div>
    </fieldset>
</form>
 

