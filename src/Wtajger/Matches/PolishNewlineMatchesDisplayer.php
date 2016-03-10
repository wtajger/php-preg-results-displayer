<?php
namespace Wtajger\Matches;

/** Displays matches found in the text
 */
class PolishNewlineMatchesDisplayer extends AbstractNewlineMatchesDisplayer 
{
    public function __construct()
    {
        $this->setInputStringText("Łańcuch");
        $this->setOffsetText("&nbsp;offset=");
        $this->setPatternMatchText("Dopasowania pełnego wzorca");
        $this->setSubpatternMatchText("Dopasowania podwzorca");
    }
}