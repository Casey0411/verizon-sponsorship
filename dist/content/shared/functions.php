<?php
/**
 * Global functions
 */

function bodyClass($name) {
	$className = 'page--';
	$className = $className . strtolower(preg_replace('#[ -]+#', '-', $name));
	echo $className;
}
