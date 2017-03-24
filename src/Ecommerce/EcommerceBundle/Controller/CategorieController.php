<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Categorie:index.html.twig');
    }
}
