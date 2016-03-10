<?php
namespace Wtajger\Matches;

/** Displays found matches and searched text
 *  
 *  Sets english text messages 
 */
class EnglishNewlineMatchesDisplayer extends AbstractNewlineMatchesDisplayer 
{
    public function __construct()
    {
        $this->setInputStringText("Searched text");
        $this->setOffsetText("&nbsp;offset=");
        $this->setPatternMatchText("Full pattern matches");
        $this->setSubpatternMatchText("Matches of the subpattern #");
    }
}