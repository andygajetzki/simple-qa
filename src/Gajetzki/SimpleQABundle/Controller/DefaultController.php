<?php

namespace Gajetzki\SimpleQABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        // get list of questions
        $questions = $this->getDoctrine()->getRepository('GajetzkiSimpleQABundle:Question')->findAll();
        return array('questions'=>$questions);
    }
}
