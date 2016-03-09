<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Example 1 page</title>
</head>
<body>
<?php
//include_once '../src/Wtajger/Page/PageDisplayer.php';
include_once '../vendor/autoload.php';

$displayer = new Wtajger\Page\PageDisplayer();
echo "<pre>"; var_dump($displayer); echo "</pre>";
$displayer->hello();
// In the root directory
// php composer.phar install
// Loading composer repositories with package information
// Installing dependencies (including require-dev)
// Nothing to install or update
// Generating autoload files
//
//
// Run from main directory
// php -S localhost:8080 -t examples
// 
// Display in the browser 
// localhost:8080/example1.php
?>
</body>
</html>