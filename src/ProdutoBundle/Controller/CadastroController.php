<?php

namespace ProdutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ProdutoBundle\Entity\Produto;

/**
 * Description of Cadastro Produto
 *
 * @author bruno
 */

class CadastroController extends Controller {
    
    public function indexAction(){
        return $this->render('ProdutoBundle:Cadastro:index.html.twig');
    }
    
    public function inserirAction(Request $request) {
        
        $p = $request->get("produto");
        $qt = $request->get("qt");

        $produto = new Produto();
        $produto->setProduto($p);
        $produto->setQtVenda($qt);

        $em = $this->getDoctrine()->getManager();

        $em->persist($produto);
        $em->flush();
        
        return new Response('ok');
        
    }
    
}
