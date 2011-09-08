<?php

if(!isset($_FILES)) {
	die("Du musst auch eine .CUE Datei ausw&auml;hlen");
}

if($_FILES['upload']['name'] == "") {
	die("Du musst auch eine .CUE Datei ausw&auml;hlen");
}

?>