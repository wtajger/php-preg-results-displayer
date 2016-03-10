<?php
namespace Wtajger\Matches;

/** Displays matches found in the text and the text itself
 */
interface IMatchesDisplayer {
    public function displayMatches($matches, $text);
}