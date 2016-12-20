<?php
/**
 * Created by PhpStorm.
 * User: a08995
 * Date: 20/12/2016
 * Time: 09:51
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PublicController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('public/index.html.twig');
    }

    /**
     * @Route("/json/resp", name="homepage_resp")
     * @Method({"GET"})
     */
    public function homeRespAction(Request $request)
    {
        dump($request->query->get('val'));die;

    }
}