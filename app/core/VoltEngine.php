<?php
namespace Core;

use Core\VoltEngineCompiler;

class VoltEngine extends \Phalcon\Mvc\View\Engine\Volt
{
    public function getCompiler()
    {
        if (empty($this->_compiler))
        {
            $this->_compiler = new VoltEngineCompiler($this->getView());
            $this->_compiler->setOptions($this->getOptions());
            $this->_compiler->setDI($this->getDI());
        }

        return $this->_compiler;
    }
}
