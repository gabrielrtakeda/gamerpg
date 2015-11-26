<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->frontend->setStylesheet('css/index/index.css');
        $this->frontend->setScript('js/controllers/index.js');
    }

}

