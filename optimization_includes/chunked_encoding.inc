<?php 
	if (ob_get_level() == 0) ob_start();
	ob_flush();
	flush();
?>