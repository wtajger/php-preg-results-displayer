<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Example 1 page</title>
</head>
<body>
<?php
include_once '../src/Wtajger/Page/PageDisplayer.php';

$displayer = new Wtajger\Page\PageDisplayer();
echo "<pre>"; var_dump($displayer); echo "</pre>";
$displayer->hello();
// Bez autoladowania
//
//
// Run from main directory
// php -S localhost:8080 -t examples
// 
// Display in the browser 
// localhost:8080/example.php
?>
</body>
</html>