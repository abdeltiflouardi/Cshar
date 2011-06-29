
<form action="<?php echo BASE_DIR ?>?c=Moderator&m=update&id=<?php foreach ($moderators as $moderator) : echo $moderator->getId(); endforeach; ?>" method="POST">
<fieldset id="moderator-form">
  <legend>Moderator</legend>
    <div class="input text">
      <label for="login">Login :</label>
      <input type="text" name="moderator[login]" id="login" value="<?php echo $moderator->getLogin(); ?>">
    </div>
    <div class="input text">
      <label for="first-name">Prenom :</label>
      <input type="text" name="moderator[firstName]" id="first-name" value="<?php echo $moderator->getFirstName(); ?>">
    </div>
    <div class="input text">
      <label for="last-name">Nom : </label>
      <input type="text" name="moderator[lastName]" id="last-name" value="<?php echo $moderator->getLastName(); ?>">
    </div>
    <div class="input text">
      <label for="birth-day">Date de naissance : </label>
      <input type="date" name="moderator[birthDay]" id="birth-day" value="<?php echo $moderator->getBirthDay(); ?>" >
    </div>
    <div class="input text">
      <label for="email">Email : </label>
      <input type="email" name="moderator[email]" id="email" value="<?php echo $moderator->getEmail(); ?>">
    </div>
    <div class="input text">
      <label for="occupation"> Occupation :</label>
      <input type="text" name="moderator[occupation]" id="occupation" value="<?php echo $moderator->getOccupation(); ?>">
    </div>
    <!--<div class="input text">
      <label for="password">Mot de passe :</label>
      <input type="password" name="moderator[password]" id="password" value="<?php //echo $moderator->getPassword(); ?>">
    </div>-->
    <div class="input text">
      <label for="country">Pays :</label>
      <select name="moderator[country]" id="country">
          <?php foreach($countries as $country):?>
        <option value="<?php echo $country->getId();?>" <?php if($country->getId()==$moderator->getCountry()) echo "selected"; ?>><?php echo $country->getName();?></option>
    <?php endforeach;?>
      </select>
    </div>
    <div class="input text">
      <input type="submit" name="modify" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
 </fieldset>
    </form>