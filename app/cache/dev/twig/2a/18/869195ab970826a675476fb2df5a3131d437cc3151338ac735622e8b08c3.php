<?php

/* uniSistemasBundle::layout.html.twig */
class __TwigTemplate_2a18869195ab970826a675476fb2df5a3131d437cc3151338ac735622e8b08c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    
   ";
        // line 6
        $this->displayBlock('central', $context, $blocks);
        // line 9
        echo "
";
    }

    // line 6
    public function block_central($context, array $blocks = array())
    {
        // line 7
        echo "       
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  37 => 9,  35 => 6,  32 => 5,  29 => 4,  31 => 5,  28 => 4,);
    }
}
