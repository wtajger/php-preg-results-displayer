<?php
namespace Wtajger\Page;

interface IPageDisplayer
{
    /** Display the beginning of HTML document from <html> to <body>
     */
    public function displayHtmlStart();
    
    /** Display the ending of HTML document: </body> and </html>
     */
    public function displayHtmlEnd();
}