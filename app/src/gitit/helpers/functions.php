<?php
/*
 * A place for helpful functions
 */

function my_print_r($value)
{
	echo '<p>'.gettype($value).'</p>';
	echo '<pre>'.print_r($value, true).'</pre>';
}