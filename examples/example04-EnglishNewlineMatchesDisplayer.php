<?php
include_once '../vendor/autoload.php';

$pageDisplayer = new Wtajger\Page\SimplePageDisplayer();
$pageDisplayer->displayHtmlStart();

$matchesDisplayer = new Wtajger\Matches\EnglishNewlineMatchesDisplayer();

$text = "mat, pat, kat, at";
if (preg_match_all('/.a(t)/', $text, $matches, PREG_OFFSET_CAPTURE)) {
    $matchesDisplayer->displayMatches($matches);
}

echo "<hr/>\n";

$text = "hip, hop, home, hoop";
if (preg_match_all('/(o+)(p)/', $text, $matches, PREG_OFFSET_CAPTURE)) {
    $matchesDisplayer->displayMatches($matches, $text);
}

$pageDisplayer->displayHtmlEnd();
// In the root directory
// ..\php-preg-results-displayer>composer install
//
// Run from the root directory
// php -S localhost:8080 -t examples
// 
// Display in the browser 
// localhost:8080/example3.php
?>