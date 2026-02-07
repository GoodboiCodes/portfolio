
<?php
$script = trim($_SERVER['SCRIPT_NAME'], '/');
$first = $script !== '' ? strtok($script, '/') : '';
if ($first && strpos($first, '.') === false) {
	$BASE_URL = '/' . $first;
} else {
	$BASE_URL = '';
}

?>