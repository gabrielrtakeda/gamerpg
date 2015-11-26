<?php

class GameController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->frontend->setStylesheet('css/game/index.css');
        $this->frontend->setStylesheet('css/game/field.css');
        $this->frontend->setStylesheet('css/game/actions.css');
        $this->frontend->setStylesheet('css/game/characters/mage.css');
        $this->frontend->setScript('js/controllers/game.js');
        $this->frontend->setScript('js/directives/mage.js');
        $this->frontend->setScript('js/factories/area.js');
        $this->frontend->setScript('js/factories/attackable.js');
        $this->frontend->setScript('js/factories/walkable.js');
        $this->frontend->setScript('js/config/characters/mageConfig.js');
    }

}

