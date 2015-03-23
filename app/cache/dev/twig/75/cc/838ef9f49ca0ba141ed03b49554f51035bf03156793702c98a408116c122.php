<?php

/* ProdutoBundle:Estatisticas:index.html.twig */
class __TwigTemplate_75cc838ef9f49ca0ba141ed03b49554f51035bf03156793702c98a408116c122 extends Twig_Template
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
        \$('#busca-codigo').keyup( function(){
            var digitado = \$(this).val();
            if(digitado != \"\"){
                \$.ajax({
                    url: '";
        // line 10
        echo $this->env->getExtension('routing')->getPath("busca_codigo");
        echo "',
                    method: 'POST',
                    data: {codigo: digitado},
                    success: function(r){
                        \$('#resultado-codigo').html(r);
                    }
                });
            }
            else{
                \$('#resultado-codigo').html(\"\");
            }
        });
        \$('#busca-nome').keyup( function(){
            var digitado = \$(this).val();
            if(digitado != \"\"){
                \$.ajax({
                    url: '";
        // line 26
        echo $this->env->getExtension('routing')->getPath("busca_produto");
        echo "',
                    method: 'POST',
                    data: {produto: digitado},
                    success: function(r){
                        \$('#resultado-nome').html(r);
                    }
                });
            }
            else{
                \$('#resultado-nome').html(\"\");
            }
        });
        /*
        \$('#busca-nome').blur( function(){
            \$(this).val(\"\");
            \$('#resultado-nome').html(\"\");
        });
        \$('#busca-codigo').blur( function(){
            \$(this).val(\"\");
            \$('#resultado-codigo').html(\"\");
        });
        */
        \$('.list-cons-codigo').on(\"click\", \"a\", function(){
            \$('#busca-codigo').val(\$(this).text());
            \$('#resultado-codigo').html(\"\");
        });
        \$('.list-cons-nome').on(\"click\", \"a\", function(){
            \$('#busca-nome').val(\$(this).text());
            \$('#resultado-nome').html(\"\");
        });
        
        \$('#btn-codigo').click(function(){
            \$('#modal-valor-estatistica').modal('show');
            \$('#tipo').val('codigo');
        });
        \$('#btn-nome').click(function(){
            \$('#modal-valor-estatistica').modal('show');
            \$('#tipo').val('produto');
        });
        
        \$('#btn-valor').click( function(){
            var tipo = \$('#tipo').val();
            if(tipo == 'codigo'){
                \$.ajax({
                    url: '";
        // line 70
        echo $this->env->getExtension('routing')->getPath("estatistica_produto");
        echo "',
                    method: \"POST\",
                    data: {codigo: \$('#busca-codigo').val(), tipo: tipo, valor: \$('#valor-proximo-mes').val()},
                    success: function(r){
                        \$('#modal-valor-estatistica').modal('hide');
                        \$('#valor-proximo-mes').val(\"\");
                        \$('#texto-estatistica').text(r);
                        \$('#modal-valor-proximo-mes').modal('show');
                        \$('#busca-codigo').val(\"\");
                    }
                });
            }
            else{
                \$.ajax({
                    url: '";
        // line 84
        echo $this->env->getExtension('routing')->getPath("estatistica_produto");
        echo "',
                    method: \"POST\",
                    data: {produto: \$('#busca-nome').val(), tipo: tipo, valor: \$('#valor-proximo-mes').val()},
                    success: function(r){
                        \$('#modal-valor-estatistica').modal('hide');
                        \$('#valor-proximo-mes').val(\"\");
                        \$('#texto-estatistica').text(r);
                        \$('#modal-valor-proximo-mes').modal('show');
                        \$('#busca-nome').val(\"\");
                    }
                });
            }
            
        });
    })
</script>
";
    }

    // line 102
    public function block_content_body($context, array $blocks = array())
    {
        // line 103
        echo "    <div class=\"container-fluid text-center\">
        <div class=\"row\">
            <div role=\"main\" class=\"col-md-6 col-md-push-3\">
                <div class=\"row\">
                    <p>Faca uma busca por codigo ou nome.</p>
                </div>
                <form>
                    <div class=\"form-group\">
                        <div class=\"row text-left\">
                            <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                              <input type=\"text\" id=\"busca-codigo\" class=\"form-control\" autofocus placeholder=\"Busca por codigo...\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\" id=\"btn-codigo\">OK</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class=\"row text-left\">
                            <div class=\"col-lg-12\">
                                <div class=\"list-cons-codigo list-group\" id=\"resultado-codigo\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row text-left\">
                            <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                              <input type=\"text\" id=\"busca-nome\" class=\"form-control\" placeholder=\"Busca por nome...\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\" id=\"btn-nome\">OK</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class=\"row text-left\">
                            <div class=\"col-lg-12\">
                                <div class=\"list-cons-nome list-group\" id=\"resultado-nome\"></div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 144
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
    <div id=\"modal-valor-estatistica\" class=\"modal fade\">
        <input type=\"hidden\" id=\"tipo\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Valor da estatistica</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Entre com valor para o próximo mês:</p>
                    <div class=\"input-group\">
                      <input type=\"number\" id=\"valor-proximo-mes\" class=\"form-control\" placeholder=\"Digite aqui...\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-primary\" type=\"button\" id=\"btn-valor\">OK</button>
                    <button type=\"button\" id=\"fechar\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"modal-valor-proximo-mes\" class=\"modal fade\">
        <input type=\"hidden\" id=\"tipo\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">Valor da estatistica</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"texto-estatistica\"></p>
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
        return "ProdutoBundle:Estatisticas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 144,  155 => 103,  152 => 102,  131 => 84,  114 => 70,  67 => 26,  48 => 10,  40 => 4,  37 => 3,  11 => 1,);
    }
}
