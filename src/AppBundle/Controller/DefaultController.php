<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/customers", name="customers")
     */
    public function customersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/customers.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }
    /**
     * @Route("/orders", name="orders")
     */
    public function ordersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/orders.html.twig');
    }
    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/privacy.html.twig');
    }

}
