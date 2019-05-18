<?php

session_id('n37a4p5f97lbvqn9hb8o0b0srh');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>