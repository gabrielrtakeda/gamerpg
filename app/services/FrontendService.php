<?php

namespace Services;

class FrontendService
{
    private $tag;
    private $css = array();
    private $js = array();

    public function __construct(\Phalcon\Tag $tag)
    {
        $this->tag = $tag;
    }

    public function setStylesheet($css)
    {
        $this->css[] = $css;
        return $this;
    }

    public function getStylesheets()
    {
        return $this->css;
    }

    public function renderStylesheetTags()
    {
        $tags = '';
        foreach ($this->css as $key => $css) {
            $tags .= $this->tag->stylesheetLink($css);
        }
        return $tags;
    }

    public function setScript($js)
    {
        $this->js[] = $js;
        return $this;
    }

    public function getScripts()
    {
        return $this->js;
    }

    public function renderScriptTags()
    {
        $tags = '';
        foreach ($this->js as $js) {
            $tags .= $this->tag->javascriptInclude($js);
        }
        return $tags;
    }
}
