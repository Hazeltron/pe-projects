<?php 
// function showErrors() {
// 	ini_set('display_errors', 1);
// 	ini_set('displayy_startup_errors', 1);
// 	error_reporting(E_ALL);
// }
	
// showErrors(); 1

function getFile($path){
	return dirname(__FILE__) . '/' . $path;
}