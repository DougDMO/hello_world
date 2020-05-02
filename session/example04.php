<?php

session_id('3ivemmsm5ogotd57imr44m4n51');

require_once "config.php";

session_regenerate_id();

echo session_id();

var_dump($_SESSION);