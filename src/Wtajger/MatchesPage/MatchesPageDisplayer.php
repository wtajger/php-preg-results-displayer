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
  
    /** Constructor injects instances IMatchesDisplayer and IPageDisplayer
     *  
     *  @param $imd object that implements IMatchesDisplayer
     *  @param $ipd object that implements IPageDisplayer
     */
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
