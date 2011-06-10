<head>
    <link href="lib/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="lib/uploadify/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="lib/uploadify/swfobject.js"></script>
<script type="text/javascript" src="lib/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : 'lib/uploadify/uploadify.swf',
    'script'    : 'lib/uploadify/uploadify.php',
    'cancelImg' : 'lib/uploadify/cancel.png',
    'folder'    : 'lib/upload',
    'auto'      : true
  //  'sizeLimit' : 102400
  //  'fileExt'     : '*.jpg;*.gif;*.png;*.xls',
 //   'fileDesc'    : 'All'

  });
});
</script>
</head>
<?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php'; ?>
<p>Ajout d'un nouveau Fichier</p>
<?php include __DIR__ . DS . '_form.php'; ?>
