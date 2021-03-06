<?php

namespace Gregwar\RST\LaTeX\Directives;

use Gregwar\RST\Parser;
use Gregwar\RST\Directive;

use Gregwar\RST\Nodes\RawNode;

/**
 * Adds a stylesheet to a document, example:
 *
 * .. stylesheet:: style.css
 */
class Stylesheet extends Directive
{
    public function getName()
    {
        return 'stylesheet';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options)
    {
    }
}
