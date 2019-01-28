<?php

namespace HafsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Hafsa/Default/index.html.twig');
    }
}
