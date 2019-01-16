<?php

namespace Scrumpy\HtmlToProseMirror\Marks;

class Mark
{
    public $type = 'mark';

    protected $DOMNode;

    function __construct($DOMNode)
    {
        $this->DOMNode = $DOMNode;
    }

    public function matching()
    {
        return false;
    }

    public function data()
    {
        return [];
    }
}
