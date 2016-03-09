<?php
namespace Wtajger\Page;

class PageDisplayer
{
    protected $htmlStart;
    protected $htmlEnd;
    
    protected function initHtmlStart() {
        $pageTitle = "Page Title";
        $this->htmlStart =<<<HEREDOC
<html>
<head>
<title>$pageTitle</title>
<meta charset="UTF-8">
</head>
<body>
HEREDOC;
    }

    protected function initHtmlEnd() {
        $this->htmlEnd =<<<HEREDOC
</body>
</html>
HEREDOC;
    }

    public function __construct() {
        $this->initHtmlStart();
        $this->initHtmlEnd();
    }
    
    public function hello() {
        echo "Hello world";
    }
    
    public function displayHtmlStart()
    {
        echo $this->htmlStart;
    }
    
    public function displayHtmlEnd()
    {
        echo $this->htmlEnd;
    }
}
