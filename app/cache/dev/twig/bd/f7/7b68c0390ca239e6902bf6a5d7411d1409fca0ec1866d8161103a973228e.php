<?php

/* ProdutoBundle::layout.html.twig */
class __TwigTemplate_bdf77b68c0390ca239e6902bf6a5d7411d1409fca0ec1866d8161103a973228e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_js' => array($this, 'block_content_js'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/produtos/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/produtos/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/produtos/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 9
        $this->displayBlock('content_js', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div class=\"container\">
            <header class=\"row\">
                <div class=\"block\">
                    <div class=\"container-fluid text-center\">
                        <div class=\"img-circle\"><img src=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/produtos/images/logo.png"), "html", null, true);
        echo " />
                        </div>
                    </div>
                    <div class=\"container-fluid text-center\">
                        <hr />
                    </div>
                </div>
            </header>
            <div class=\"row\">
                <div role=\"main\" class=\"col-md-6 col-md-push-3\">
                    <div class=\"block\">
                        ";
        // line 27
        $this->displayBlock('content_body', $context, $blocks);
        // line 28
        echo "                    </div>
                </div>
            </div>
            <br>
            <footer class=\"row\">
                <div class=\"block\">
                    <div class=\"container-fluid text-center\">
                        <hr />
                        <span class=\"h6\">Informações do rodape</span>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Cadastro de Produto!";
    }

    // line 9
    public function block_content_js($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProdutoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  95 => 9,  89 => 5,  70 => 28,  68 => 27,  54 => 16,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
