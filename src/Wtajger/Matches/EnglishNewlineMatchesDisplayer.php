<?php
namespace Wtajger\Matches;

/** Displays matches found in the text
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