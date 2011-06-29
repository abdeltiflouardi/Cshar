
<form action="<?php echo BASE_DIR ?>?c=Administrator&m=update&id=<?php foreach ($administrators as $administrator) : echo $administrator->getId(); endforeach; ?>" method="POST">
<fieldset id="administrator-form">
  <legend>Administrator</legend>
    <div class="input text">
      <label for="login">Login :</label>
      <input type="text" name="administrator[login]" id="login" value="<?php echo $administrator->getLogin(); ?>">
    </div>
    <div class="input text">
      <label for="first-name">Prenom :</label>
      <input type="text" name="administrator[firstName]" id="first-name" value="<?php echo $administrator->getFirstName(); ?>">
    </div>
    <div class="input text">
      <label for="last-name">Nom : </label>
      <input type="text" name="administrator[lastName]" id="last-name" value="<?php echo $administrator->getLastName(); ?>">
    </div>
    <div class="input text">
      <label for="birth-day">Date de naissance : </label>
      <input type="date" name="administrator[birthDay]" id="birth-day" value="<?php echo $administrator->getBirthDay(); ?>" >
    </div>
    <div class="input text">
      <label for="email">Email : </label>
      <input type="email" name="administrator[email]" id="email" value="<?php echo $administrator->getEmail(); ?>">
    </div>
    <div class="input text">
      <label for="occupation"> Occupation :</label>
      <input type="text" name="administrator[occupation]" id="occupation" value="<?php echo $administrator->getOccupation(); ?>">
    </div>
    <!--<div class="input text">
      <label for="password">Mot de passe :</label>
      <input type="password" name="administrator[password]" id="password" value="<?php //echo $administrator->getPassword(); ?>">
    </div>-->
    <div class="input text">
      <label for="country">Pays :</label>
      <select name="administrator[country]" id="country">
          <?php foreach($countries as $country):?>
        <option value="<?php echo $country->getId();?>" <?php if($country->getId()==$administrator->getCountry()) echo "selected"; ?>><?php echo $country->getName();?></option>
    <?php endforeach;?>
      </select>
    </div>
    <div class="input text">
      <input type="submit" name="modify" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
 </fieldset>
    </form>