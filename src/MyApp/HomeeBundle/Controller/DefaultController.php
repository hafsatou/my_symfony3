<?php

namespace MyApp\HomeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MyAppHomee/Default/index.html.twig');
    }
}
