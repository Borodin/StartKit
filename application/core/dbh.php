<?php
$DBH = new PDO("mysql:host=localhost;dbname=h56764_db", "h56764_admin", "1234", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);