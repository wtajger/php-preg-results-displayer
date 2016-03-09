<?php
include_once '../vendor/autoload.php';

$displayer = new Wtajger\Page\PageDisplayer();
$displayer->displayHtmlStart();
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
</body>
</html>