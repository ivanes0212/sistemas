<?php

/* ::base.html.twig */
class __TwigTemplate_15473660e1f1a3139323ae08c6dc712fb44577b18e5e01b0de537ba99725c34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
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
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"cabecera\"
        ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 25
        echo "        </div>
        <div id=\"cuerpo\">
        ";
        // line 27
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 30
        echo "    </div>
    <div id=\"pie\">
        ";
        // line 32
        $this->displayBlock('pie', $context, $blocks);
        // line 41
        echo "</div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisistemas/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "            <h1><font color=\"#CBCBFD\" size=\"30\">SISTEMAS IVAN</font></h1>
             <h3>
                    
                    <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sistemas");
        echo "\">Inicio</a></li>
        <li id=\"nav-1\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("hardware");
        echo "\">Hardware</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("software");
        echo "\">Software</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("maquinasvirtuales");
        echo "\">Maquinas Virtuales</a></li>
                    </ul>
                </h3>
        ";
    }

    // line 27
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 28
        echo "        
        ";
    }

    // line 32
    public function block_pie($context, array $blocks = array())
    {
        // line 33
        echo "         <h6><font color=\"#CBCBFD\">
                    CONTACTO -> ivanesfc@hotmail.com
                    <br>
                    SITIO WEB -> ivan-sistemas.com
                    <br>
                    CENTRO -> uni Eibar-Ermua
                    </font></h6>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  118 => 32,  113 => 28,  110 => 27,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  84 => 14,  81 => 13,  74 => 7,  71 => 6,  65 => 5,  58 => 41,  56 => 32,  52 => 30,  50 => 27,  46 => 25,  44 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,  45 => 7,  42 => 6,  37 => 9,  35 => 6,  32 => 5,  29 => 4,  31 => 5,  28 => 4,);
    }
}
