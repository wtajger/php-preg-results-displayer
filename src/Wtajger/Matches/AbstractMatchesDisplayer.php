<?php
namespace Wtajger\Matches;

/** Displays found matches and searched text 
 *  
 *  Defines the text messages displayed for the results
 */
abstract class AbstractMatchesDisplayer implements IMatchesDisplayer {
    protected $inputStringText; /**< message before searched text */
    protected $offsetText; /**< message before offset text */
    protected $patternMatchText; /**< message before full pattern matches */
    protected $subpatternMatchText; /**< message before subpattern matches */
    
    protected function setInputStringText($text) 
    {
        $this->inputStringText = $text;
    }
    
    protected function setOffsetText($text) 
    {
        $this->offsetText = $text;
    }
    
    protected function setPatternMatchText($text) 
    {
        $this->patternMatchText = $text;
    }
    
    protected function setSubpatternMatchText($text) 
    {
        $this->subpatternMatchText = $text;
    }
    
    /** Echoes found matches and searched text
     *  
     * @param $matches array of matches returned by preg_match_all
     * @param $text text in which we search for patterns
     */
    abstract public function displayMatches($matches, $text);
}
