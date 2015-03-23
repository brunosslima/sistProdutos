<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // produtos
        if ($pathinfo === '/produtos') {
            return array (  '_controller' => 'ProdutoBundle\\Controller\\HomeProdutoController::indexAction',  '_route' => 'produtos',);
        }

        if (0 === strpos($pathinfo, '/cadastro')) {
            // cadastro
            if ($pathinfo === '/cadastro') {
                return array (  '_controller' => 'ProdutoBundle\\Controller\\CadastroController::indexAction',  '_route' => 'cadastro',);
            }

            // inserir_produto
            if ($pathinfo === '/cadastro/inserir_produto') {
                return array (  '_controller' => 'ProdutoBundle\\Controller\\CadastroController::inserirAction',  '_route' => 'inserir_produto',);
            }

        }

        if (0 === strpos($pathinfo, '/estatisticas')) {
            // estatisticas
            if ($pathinfo === '/estatisticas') {
                return array (  '_controller' => 'ProdutoBundle\\Controller\\EstatisticaController::indexAction',  '_route' => 'estatisticas',);
            }

            if (0 === strpos($pathinfo, '/estatisticas/busca_')) {
                // busca_codigo
                if ($pathinfo === '/estatisticas/busca_codigo') {
                    return array (  '_controller' => 'ProdutoBundle\\Controller\\EstatisticaController::busca_codigoAction',  '_route' => 'busca_codigo',);
                }

                // busca_produto
                if ($pathinfo === '/estatisticas/busca_produto') {
                    return array (  '_controller' => 'ProdutoBundle\\Controller\\EstatisticaController::busca_produtoAction',  '_route' => 'busca_produto',);
                }

            }

            // estatistica_produto
            if ($pathinfo === '/estatisticas/estatistica_produto') {
                return array (  '_controller' => 'ProdutoBundle\\Controller\\EstatisticaController::estatistica_produtoAction',  '_route' => 'estatistica_produto',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
