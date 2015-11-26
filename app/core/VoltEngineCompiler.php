<?php
namespace Core;

class VoltEngineCompiler extends \Phalcon\Mvc\View\Engine\Volt\Compiler
{
    protected function _compileSource($source, $something = null)
    {
        $source = str_replace('{{', '<' . '?php $ng = <<<NG' . "\n" . '\x7B\x7B', $source);
        $source = str_replace('}}', '\x7D\x7D' . "\n" . 'NG;' . "\n" . ' echo $ng; ?' . '>', $source);

        $source = str_replace('{[{', '{{', $source);
        $source = str_replace('}]}', '}}', $source);

        return parent::_compileSource($source, $something);
    }
}
