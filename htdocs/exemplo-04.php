<?php
$id = $_SERVER["HTTP_ACCEPT"];
$id3 = $_SERVER["HTTP_ACCEPT_ENCODING"];
$id4 = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$id5 = $_SERVER["HTTP_CONNECTION"];
$id6 = $_SERVER["HTTP_HOST"];
echo $id . "<br>" . $id3 . "<br>" . $id4 . "<br>" . $id5 . "<br>" . $id6;
?>