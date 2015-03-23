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

class EstatisticaController extends Controller {
    
    public function indexAction(){
        return $this->render('ProdutoBundle:Estatisticas:index.html.twig');
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
    
    public function busca_produtoAction(Request $request) {

        $p = $request->get("produto");
        
        $repository = $this->getDoctrine()
        ->getRepository('ProdutoBundle:Produto');

        $query = $repository->createQueryBuilder('p')
                ->select('p.produto, p.id')
                ->where('p.produto like :nome ')
                ->setParameter('nome', '%'.$p.'%')
                ->orderBy('p.produto', 'ASC')
                ->getQuery();

        $products = $query->getResult();
        
        return new Response($this->geraLi($products, 'produto'));        
    }
    
    public function busca_codigoAction(Request $request) {

        $p = $request->get("codigo");
        
        $repository = $this->getDoctrine()
        ->getRepository('ProdutoBundle:Produto');

        $query = $repository->createQueryBuilder('p')
                ->select('p.id')
                ->where('p.id like :id ')
                ->setParameter('id', '%'.$p.'%')
                ->orderBy('p.id', 'ASC')
                ->getQuery();

        $products = $query->getResult();
        
        return new Response($this->geraLi($products, 'id'));        
    }
    
    private function geraLi($dados, $tipo) {
        $html = "";
        foreach ($dados as $pr=>$val){
            $html .= "<a href='#' class='list-consulta list-group-item' id='".$val['id']."'>".$val[$tipo]."</a>";
        }
        return $html;
    }
    
    public function estatistica_produtoAction(Request $request) {
        $valor = $request->get("valor");
        
        if($request->get("tipo") == 'codigo'){
            $codigo = $request->get("codigo");
            return new Response($this->estatistica_por_codigo($codigo, $valor));
        }
        else{
            $produto = $request->get("produto");
            return new Response($this->estatistica_por_produto($produto, $valor));
        }
        
    }
    
    private function estatistica_por_codigo($codigo, $valor) {
        $repository = $this->getDoctrine()
        ->getRepository('ProdutoBundle:Produto');

        $query = $repository->createQueryBuilder('p')
                ->select('p.produto, p.qtVenda')
                ->where('p.id = :codigo')
                ->setParameter('codigo', $codigo)
                ->getQuery();

        $produtos = $query->getResult();

        if(sizeof($produtos) > 0){
            return $this->retorna_estatistica($produtos, $valor);
        }
        
    }
    
    private function estatistica_por_produto($produto, $valor) {
        $repository = $this->getDoctrine()
        ->getRepository('ProdutoBundle:Produto');

        $query = $repository->createQueryBuilder('p')
                ->select('p.produto, p.qtVenda')
                ->where('p.produto = :nome ')
                ->setParameter('nome', $produto)
                ->getQuery();

        $produtos = $query->getResult();

        if(sizeof($produtos) > 0){
            return $this->retorna_estatistica($produtos, $valor);
        }
        
    }
    
    private function retorna_estatistica($dados, $valor) {
        $p  = $dados[0]['produto'];
        $qt = $dados[0]['qtVenda'];
        $total_vendas_mes = $this->total_vendas_mes();
        $mix = ($qt / $total_vendas_mes);
        $estatistica = ($mix * $valor);
        
        return "A estatistica do produto ".$p." para o proximo mês será: ".round($estatistica, 2)."%";
        
    }
    
    private function total_vendas_mes() {
        $repository = $this->getDoctrine()
        ->getRepository('ProdutoBundle:Produto');

        $query = $repository->createQueryBuilder('p')
                ->select('sum(p.qtVenda) as soma')
                ->getQuery();

        $produtos = $query->getResult();
        return $produtos[0]['soma'];
    }
    
}
