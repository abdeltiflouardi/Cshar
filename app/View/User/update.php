
<form action="<?php echo BASE_DIR ?>?c=User&m=update&id=<?php foreach ($users as $user) : echo $user->getId(); endforeach; ?>" method="POST">
<fieldset id="user-form">
  <legend>User</legend>
    <div class="input text">
      <label for="login">Login :</label>
      <input type="text" name="user[login]" id="login" value="<?php echo $user->getLogin(); ?>">
    </div>
    <div class="input text">
      <label for="first-name">Prenom :</label>
      <input type="text" name="user[firstName]" id="first-name" value="<?php echo $user->getFirstName(); ?>">
    </div>
    <div class="input text">
      <label for="last-name">Nom : </label>
      <input type="text" name="user[lastName]" id="last-name" value="<?php echo $user->getLastName(); ?>">
    </div>
    <div class="input text">
      <label for="birth-day">Date de naissance : </label>
      <input type="date" name="user[birthDay]" id="birth-day" value="<?php echo $user->getBirthDay(); ?>" >
    </div>
    <div class="input text">
      <label for="email">Email : </label>
      <input type="email" name="user[email]" id="email" value="<?php echo $user->getEmail(); ?>">
    </div>
    <div class="input text">
      <label for="occupation"> Occupation :</label>
      <input type="text" name="user[occupation]" id="occupation" value="<?php echo $user->getOccupation(); ?>">
    </div>
    <!--<div class="input text">
      <label for="password">Mot de passe :</label>
      <input type="password" name="user[password]" id="password" value="<?php //echo $user->getPassword(); ?>">
    </div>-->
    <div class="input text">
      <label for="country">Pays :</label>
      <select name="user[country]" id="country">
          <?php foreach($countries as $country):?>
        <option value="<?php echo $country->getId();?>" <?php if($country->getId()==$user->getCountry()) echo "selected"; ?>><?php echo $country->getName();?></option>
    <?php endforeach;?>
      </select>
    </div>
    <div class="input text">
      <input type="submit" name="modify" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
 </fieldset>
    </form>