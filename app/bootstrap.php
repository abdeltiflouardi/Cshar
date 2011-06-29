<?php
// Directory Separator
define ('DS', DIRECTORY_SEPARATOR);

// Directory Root
define ('DR', dirname(__DIR__) . DS);

// Directory Library
define ('DL', DR . 'lib' . DS);

// Application Directory
define ('AD', DR . 'app' . DS);

include DL . 'AutoLoader.php';

?>
