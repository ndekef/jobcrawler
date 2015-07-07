<?php

namespace MyBotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontEndController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBotBundle:FrontEnd:index.html.twig');
    }
}
