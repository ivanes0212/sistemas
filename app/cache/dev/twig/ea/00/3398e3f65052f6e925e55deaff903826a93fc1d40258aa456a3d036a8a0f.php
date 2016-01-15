<?php

/* uniSistemasBundle:sistemas:index.html.twig */
class __TwigTemplate_ea003398e3f65052f6e925e55deaff903826a93fc1d40258aa456a3d036a8a0f extends Twig_Template
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
        echo "    <center><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/imagenes/ordenador.png"), "html", null, true);
        echo "\"width=200px height=200px></center>
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:sistemas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
