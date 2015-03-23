<?php

/* ProdutoBundle:Cadastro:index.html.twig */
class __TwigTemplate_082b846bb7f901d72086115792738d1a3d6171f807cceb132fc24e0de2a5991e extends Twig_Template
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
            'content_js' => array($this, 'block_content_js'),
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
    public function block_content_js($context, array $blocks = array())
    {
        // line 4
        echo "<script>
    \$(document).ready( function(){
        \$('#descricao, #qt').keyup( function(){
            if(\$('#descricao').val() !== \"\" && parseInt(\$('#qt').val(), 10) > parseInt('0', 10)){
                \$('#cadastrar').removeAttr('disabled');
            }
            else if(\$('#descricao').val() == \"\" || \$('#qt').val() == \"\" || parseInt(\$('#qt').val(), 10) == parseInt('0', 10)){
                \$('#cadastrar').attr('disabled', true);
            }
        });
        \$('#qt').click( function(){
            if(parseInt(\$('#qt').val(), 10) > parseInt('0', 10) && \$('#descricao').val() != \"\"){
                \$('#cadastrar').removeAttr('disabled');
            }
        });
        
        \$('#cadastrar').click( function(){
            \$.ajax({
                url: '";
        // line 22
        echo $this->env->getExtension('routing')->getPath("inserir_produto");
        echo "', 
                method: 'POST',
                data: { produto: \$('#descricao').val(), qt: \$('#qt').val() },
                success: function(r){
                    \$('#modal').modal('show');
                    if(r == 'ok'){
                        \$('.modal-title').text(\"Confirmacao de inclusao\");
                        \$('.modal-body > p').text(\"Produto incluido com sucesso!\");
                    }
                    else{
                        \$('.modal-title').text(\"*** Erro ***\");
                        \$('.modal-body > p').text(\"Produto nao foi incluido!\");
                    }
                    \$('#descricao').val(\"\");
                    \$('#qt').val(\"\");
                }
            });
        });
        
        \$('#fechar').click( function(){
            \$('#descricao').focus();
            \$('#cadastrar').attr('disabled', true);
        });
    })
</script>
";
    }

    // line 49
    public function block_content_body($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"container-fluid text-center\">
        <div class=\"row\">
            <div role=\"main\" class=\"col-md-6 col-md-push-3\">
                <div class=\"row\">
                    &nbsp;
                </div>
                <form>
                    <div class=\"form-group\">
                        <div class=\"row text-left\">
                            <label for=\"descricao\" class=\"text-left\">Descrição do Produto</label>
                            <input type=\"text\" class=\"form-control campo\" id=\"descricao\" name=\"descricao\" placeholder=\"Descrição do Produto\" maxlength=\"45\" autofocus>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row text-left\">
                            <label for=\"qt\" class=\"text-left\">Quantidade de venda</label>
                            <input type=\"number\" class=\"form-control campo\" id=\"qt\" name=\"qt\" placeholder=\"Quantidade\" maxlength=\"8\" min=\"1\">
                        </div>
                    </div>
                    <button id=\"cadastrar\" type=\"button\" class=\"btn btn-primary btn-lg active\" disabled>Cadastrar</button>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("produtos");
        echo "\" class=\"btn btn-primary btn-lg active\" role=\"button\">Voltar</a>
                </form>
            </div>
        </div>
    </div>

    <div id=\"modal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\"></h4>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" id=\"fechar\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ProdutoBundle:Cadastro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 70,  93 => 50,  90 => 49,  60 => 22,  40 => 4,  37 => 3,  11 => 1,);
    }
}
