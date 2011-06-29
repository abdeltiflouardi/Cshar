<form method="POST" action="<?php BASE_DIR ?>?c=Comment&m=add">
<fieldset id="comment-form">
    <legend>Commentaire</legend>
    
    <div class="input text">
    <label for="file">Fichier :</label>
    <select name="comment[file]" id="file">
        <?php foreach($files as $file):
         echo '<option value="'.$file->getId().'">'.$file->getId().' '.$file->getName().'</option> ';
         endforeach; ?>
    </select>
    </div>

    <div class="input text">
      <label for="member">Membre :</label>
      <select name="comment[member]" id="member">
       <?php foreach($users as $user):
         echo '<option value="'.$user->getId().'">'.$user->getLogin().'</option> ';
         endforeach; ?>
      </select>
    </div>

    <div class="input text">
      <label for="comment">Commentaire :</label>
      <textarea rows="4" cols="10" name="comment[comment]" id="comment"></textarea>
    </div>
      
    <div class="input text">
      <input type="submit" name="valid" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
</fieldset>
</form>
