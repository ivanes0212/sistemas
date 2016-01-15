<?php

/* uniSistemasBundle:sistemas:crear.html.twig */
class __TwigTemplate_070c09f28b4bb66a36e70ad3c6796bc888d18897eab3d3d00cf74e1a5f27fc70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniSistemasBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"texto\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("hardware_new");
        echo "\">
                Añadir nuevo hardware
                <br>
                
    
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("software_new");
        echo "\">
                Añadir nuevo software
            </a>
        
                <br>
   
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("maquinasvirtuales_new");
        echo "\">
                Añadir nueva maquina virtual
            </a>
                <br>
                </div>
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:sistemas:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  42 => 11,  34 => 6,  31 => 5,  28 => 4,);
    }
}
