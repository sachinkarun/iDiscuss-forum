<?php

session_start();
echo"logging you out pleasewait...";
session_destroy();
header("location: /forum");

?>