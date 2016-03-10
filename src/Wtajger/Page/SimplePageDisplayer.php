<?php
namespace Wtajger\Page;

/** HTML Page with title */
class SimplePageDisplayer implements IPageDisplayer
{
    protected $htmlStart;
    protected $htmlEnd;
    protected $pageTitle;
    
    protected function initHtmlStart() 
    {
        $this->htmlStart =<<<HEREDOC
<html>
<head>
<title>{$this->pageTitle}</title>
<meta charset="UTF-8">
</head>
<body>
HEREDOC;
    }

    protected function initHtmlEnd() 
    {
        $this->htmlEnd =<<<HEREDOC
</body>
</html>
HEREDOC;
    }

    public function __construct($pageTitle = null) 
    {
        if ($pageTitle === null) {
            $this->pageTitle = "Page Title";
        } else {
            $this->pageTitle = $pageTitle;
        }
        $this->initHtmlStart();
        $this->initHtmlEnd();
    }
    
    public function hello() 
    {
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
