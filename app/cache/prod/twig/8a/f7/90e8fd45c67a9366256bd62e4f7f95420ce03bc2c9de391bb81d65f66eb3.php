<?php

/* ProdutoBundle:Home:index.html.twig */
class __TwigTemplate_8af790e8fd45c67a9366256bd62e4f7f95420ce03bc2c9de391bb81d65f66eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProdutoBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProdutoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid text-center\">
        <div class=\"row\">
            <div role=\"main\" class=\"col-md-6 col-md-push-3\">
                <div class=\"row\">
                    &nbsp;
                </div>
                <div class=\"row\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cadastro");
        echo "\" class=\"btn btn-primary btn-lg btn-block active\" role=\"button\">Cadastrar Produto</a>
                </div>
                <div class=\"row\">
                    &nbsp;
                </div>
                <div class=\"row\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("estatisticas");
        echo "\" class=\"btn btn-primary btn-lg btn-block active\" role=\"button\">Estatisticas dos Produtos</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ProdutoBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
