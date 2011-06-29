<form action="<?php BASE_DIR ?>?c=Moderator&m=add" method="POST">
<fieldset id="moderator-form">
  <legend>Moderator</legend>
    <div class="input text">
      <label for="login">Login :</label>
      <input type="text" name="moderator[login]" id="login">
    </div>
    <div class="input text">
      <label for="first-name">Prenom :</label>
      <input type="text" name="moderator[firstName]" id="first-name">
    </div>
    <div class="input text">
      <label for="last-name">Nom : </label>
      <input type="text" name="moderator[lastName]" id="last-name">
    </div>
    <div class="input text">
      <label for="birth-day">Date de naissance : </label>
      <input type="date" name="moderator[birthDay]" id="birth-day">
    </div>
    <div class="input text">
      <label for="email">Email : </label>
      <input type="email" name="moderator[email]" id="email">
    </div>
    <div class="input text">
      <label for="occupation"> Occupation :</label>
      <input type="text" name="moderator[occupation]" id="occupation">
    </div>
    <div class="input text">
      <label for="password">Mot de passe :</label>
      <input type="password" name="moderator[password]" id="password">
    </div>
    <div class="input text">
      <label for="country">Pays :</label>
      <select name="moderator[country]" id="country">
          <?php foreach($countries as $country):?>
        <option value="<?php echo $country->getId();?>"><?php echo $country->getName();?></option>
    <?php endforeach;?>
      </select>
    </div>
    <div class="input text">
      <input type="submit" name="valid" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
 </fieldset>
    </form>