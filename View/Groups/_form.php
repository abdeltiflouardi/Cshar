<form method="POST" action="<?php echo BASE_DIR ?>?c=Groups&m=add">
<fieldset id="group-form">
  <legend>Groupe</legend>

    <div class="input text">
      <label for="name-group">Nom du groupe :</label>
      <input type="text" name="groups[name]" id="name-group">
    </div>
     <div class="input text">
      <label for="creator-group">Createur du groupe :</label>
      <select name="groups[member]" id="creator-group">
          <?php foreach($members as $member):?>
              <?php echo '<option value="'.$member->getId().'">'.$member->getLogin().'</option>'; ?>
        <?php endforeach;?>
      </select>
    </div>
    <div class="input text">
      <label for="activity-group">Activit&eacute; du groupe :</label>
      <textarea rows="4" cols="10" name="groups[activity]" id="activity-group"></textarea>
    </div>
    <div class="input text">
        <input type="text" name="groups[dateissue]" value="<?php echo date('Y-m-d H:i:s');?>" style="visibility: hidden;">
    </div>
    <div class="input text">
      <input type="submit" name="valid" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>

</fieldset>
</form>