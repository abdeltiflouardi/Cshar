<a href="<?php echo BASE_DIR ?>">Home</a> | 
<a href="<?php echo BASE_DIR ?>?c=user">User</a> | 
<a href="<?php echo BASE_DIR ?>?c=Group">Group</a> |
<a href="<?php echo BASE_DIR ?>?c=Country">Country</a>|

<?php
if (Security::getInstance()->isConnected()):
?>
<a href="<?php echo BASE_DIR ?>?c=user&a=logout">Se déconnecter</a>
<?php
endif;
?>
