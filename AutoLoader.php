<?php
set_include_path(
	'lib'.PATH_SEPARATOR.
	get_include_path());

function loader($class) {
	$class = str_replace('\\', '/', $class);
	require_once $class . '.php';
}

spl_autoload_register('loader');