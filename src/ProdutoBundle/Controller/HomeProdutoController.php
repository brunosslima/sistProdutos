<?php

namespace ProdutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Home Produto
 *
 * @author bruno
 */

class HomeProdutoController extends Controller {
    
    public function indexAction(){
        return $this->render('ProdutoBundle:Home:index.html.twig');
    }
    
}
