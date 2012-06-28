<?php

use Phalcon_Tag as Tag;

class AboutController extends ControllerBase
{
    public function initialize()
    {
        Tag::setTitle('About');
        parent::initialize();

        $this->_bc->add('About', 'about');
    }

    public function indexAction()
    {
    }
}
