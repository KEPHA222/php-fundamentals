<?php

session_start();

session_destroy();
header('Location: /php-crash/01_output.php');