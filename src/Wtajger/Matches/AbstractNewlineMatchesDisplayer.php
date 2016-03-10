<?php
namespace Wtajger\Matches;

/** Displays matches found in the text 
 *  
 *  Defines the display in the form of new lines
 */
abstract class AbstractNewlineMatchesDisplayer extends AbstractMatchesDisplayer 
{    
    public function displayMatches($matches, $text = null) 
    {
        if ($text !== null) {
            echo $this->inputStringText . ": \"" . htmlentities($text) . "\"<br/>\n";
        }
        echo $this->patternMatchText . "<br/>\n";
        foreach ($matches[0] as $m) {
            echo $this->offsetText . $m[1] . ': "' . htmlentities($m[0]) .'"' . "<br/>\n";
        }
        if (count($matches > 1)) {
            for($i = 1; $i < count($matches); $i++) {
                echo $this->subpatternMatchText . " {$i}<br/>\n";
                foreach ($matches[$i] as $m) {
                    echo $this->offsetText . $m[1] . ': "' . htmlentities($m[0]) .'"' . "<br/>\n";
                }
            }
        }
    }
}