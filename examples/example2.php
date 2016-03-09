<?php
include_once '../vendor/autoload.php';

$displayer = new Wtajger\Page\SimplePageDisplayer();
$displayer->displayHtmlStart();
echo "Inny tekst<br/>\n";
$displayer->hello();
$displayer->displayHtmlEnd();
// In the root directory
// ..\php-preg-results-displayer>composer install
//
// Run from main directory
// php -S localhost:8080 -t examples
// 
// Display in the browser 
// localhost:8080/example2.php
?>