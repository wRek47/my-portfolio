<?php

session_start();

$base = "/";
define("BASE", "/");

$root = getcwd();
$root = str_replace(DIRECTORY_SEPARATOR, "/", $root);
define("ROOT", $root);

define("LAYOUT", $root . "layout/");
define("PAGES", $root . "pages/");

define("CSS", "media/css/");
define("ECMA", "media/ecma/");
define("IMAGES", "media/images/");

define("PAGE", BASE . "?page=");
define("VOID", "javascript:void();");

define("TAB", "\t");

?>
