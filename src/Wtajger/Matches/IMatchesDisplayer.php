<?php
namespace Wtajger\Matches;

/** Displays matches found in the text and the text itself
 */
interface IMatchesDisplayer {
    /** Displays matches returned from preg_match_all
     *  
     * @param $matches array of matched return from preg_match_all()
     * @param $text input argument of preg_match_all()
     */
    public function displayMatches($matches, $text);
}