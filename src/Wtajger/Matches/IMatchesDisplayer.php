<?php
namespace Wtajger\Matches;

/** Displays matches found in the text
 *  
 *  Implies echo 
 *  
 *  @param $matches array of matches returned by preg_match_all
 *  @param $text text in which we search for patterns 
 */
interface IMatchesDisplayer {
    public function displayMatches($matches, $text);
}