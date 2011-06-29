<form method="POST" action="<?php echo BASE_DIR ?>?c=File&m=add">
<fieldset id="file-form">
  <legend>Fichier</legend>
    <div class="input text">
     <label for="group">groupe :</label><select id="group" name="group">
     <?php foreach ($groups as $group){?>
        <option value="<?php echo $group->getId();?>"><?php echo $group->getName();?></option>
        <?php }?>

    </select>
    </div>
    <div class="input text">
     <label for="file-name">Nom du fichier :</label><input type="text" name="file-name" id="file-name">
    </div>
    <div class="input text">
      <input id="file_upload" name="file_upload" type="file" />
        <a href="javascript:$('#file_upload').uploadifyUpload();">Upload Files</a>
    </div>
    <div class="input text">
      <input type="submit" name="valid" value="Valider">
      <input type="reset" name="reset" value="Vider">
    </div>
</fieldset>
</form>
