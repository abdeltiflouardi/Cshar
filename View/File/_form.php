<form method="POST" action="<?php echo BASE_DIR ?>?c=File&m=add">
<fieldset id="file-form">
  <legend>Fichier</legend>
    <div class="input text">
     <label for="group">groupe :</label><select id="group" name="group"><option></option></select>
    </div>
    <div class="input text">
     <label for="file-name">Nom du fichier :</label><input type="text" name="file-name" id="file-name">
    </div>
    <div class="input text">
      <label for="file">Fichier :</label><input type="file" name="file" id="file">
    </div>
    <div class="input text">
      <input type="submit" name="valid" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
</fieldset>
</form>
