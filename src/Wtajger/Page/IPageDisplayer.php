<?php
namespace Wtajger\Page;

/** Displays start and the end of HTML page*/
interface IPageDisplayer
{
    /** Display the beginning of HTML document from <html> to <body>
     *  
     *  Implies using echo command within function
     */
    public function displayHtmlStart();
    
    /** Display the ending of HTML document: </body> and </html>
     *  
     *  Implies using echo command within function
     */
    public function displayHtmlEnd();
}