<?php
if (isset($_GET['set'])) {
	$cookie_set = $_GET['set'];
	setcookie('css_style', $cookie_set, time() + 31536000);
}

if ($_SERVER['HTTP_REFERER'] && !stristr($_SERVER['HTTP_REFERER'], 'presentation')) {
	$referred = $_SERVER['HTTP_REFERER'];
	header("Location: $referred");
}
else {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	header("Location: $url");
}
