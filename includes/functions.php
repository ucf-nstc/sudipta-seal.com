<?php

function getPageTitle() {
	if (!$_GET['page']) {
		return 'Home';
	} else {
		return $_GET['page'];
	} 
}

?>