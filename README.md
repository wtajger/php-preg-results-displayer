# php-preg-results-displayer
Displays results of preg_match_all

###To acquire 
```javascript
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/wtajger/php-preg-results-displayer.git"
    }
  ],
  "require": {
    "wtajger/php-preg-results-displayer": "dev-master"
  }
}
```

###Example use 

Script (example/example4.php)
```php
?php
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
```
should produce page with text

```
Full pattern matches
 offset=0: "mat"
 offset=5: "pat"
 offset=10: "kat"
 offset=14: " at"
Matches of the subpattern # 1
 offset=2: "t"
 offset=7: "t"
 offset=12: "t"
 offset=16: "t"
Searched text: "hip, hop, home, hoop"
Full pattern matches
 offset=6: "op"
 offset=17: "oop"
Matches of the subpattern # 1
 offset=6: "o"
 offset=17: "oo"
Matches of the subpattern # 2
 offset=7: "p"
 offset=19: "p"
```