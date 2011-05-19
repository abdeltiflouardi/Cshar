<?php
set_include_path(
	'lib'.PATH_SEPARATOR.
	get_include_path());
function loader($class) {
	$class = str_replace('\\', '/', $class);
	require_once $class . '.php';
	//echo $class.'<br />';
}

spl_autoload_register('loader');
