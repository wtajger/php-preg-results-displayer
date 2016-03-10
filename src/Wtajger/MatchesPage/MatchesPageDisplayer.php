<?php
namespace Wtajger\MatchesPage;

use Wtajger\Matches\IMatchesDisplayer;
use Wtajger\Page\IPageDisplayer;

/** Displays page and matches
 *  
 *  Contains the instance of IMatchesDisplayer and 
 *  the instance of IPageDisplayer.
 *  Implements their interface by executing the methods of the instances.
 */
class MatchesPageDisplayer implements IMatchesDisplayer, IPageDisplayer
{
    protected $matchesDisplayer;
    protected $pageDisplayer;
  
    public function __construct(IMatchesDisplayer $imd, IPageDisplayer $ipd)
    {
        $this->matchesDisplayer = $imd;
        $this->pageDisplayer = $ipd;
    }
    
    public function displayMatches($matches, $text = null) 
    {
        $this->matchesDisplayer->displayMatches($matches, $text);
    }
        
    public function displayHtmlStart() 
    {
        $this->pageDisplayer->displayHtmlStart();
    }
    
    public function displayHtmlEnd() 
    {
        $this->pageDisplayer->displayHtmlEnd();
    }
}
/*
displayHtmlStart();

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
*/