<?php
include_once '../vendor/autoload.php';

$pageDisplayer = new Wtajger\Page\SimplePageDisplayer();
$matchesDisplayer = new Wtajger\Matches\PolishNewlineMatchesDisplayer();
$mpDisplayer = new Wtajger\MatchesPage\MatchesPageDisplayer($matchesDisplayer, $pageDisplayer);

$mpDisplayer->displayHtmlStart();

$text = "mat, pat, kat, at";
if (preg_match_all('/.a(t)/', $text, $matches, PREG_OFFSET_CAPTURE)) {
    $mpDisplayer->displayMatches($matches);
}

echo "<hr/>\n";

$text = "hip, hop, home, hoop";
if (preg_match_all('/(o+)(p)/', $text, $matches, PREG_OFFSET_CAPTURE)) {
    $mpDisplayer->displayMatches($matches, $text);
}

$mpDisplayer->displayHtmlEnd();

// In the root directory
// ..\php-preg-results-displayer>composer install
//
// Run from the root directory
// php -S localhost:8080 -t examples
// 
// Display in the browser 
// localhost:8080/example4.php
?>