<?php

/* uniSistemasBundle:hardware:buscarHardware.html.twig */
class __TwigTemplate_24af50a6eab483a68fdd37dbf459123edb7de510d5c8584b1bdfa3617b5a14b0 extends Twig_Template
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "
<script type=\"text/javascript\">
function submitform(obj) {
document.forms[\"selectCats\"].submit();
}
</script>

";
        // line 13
        echo "<br>Buscar categoria:
<form id=\"selectCats\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("hardware_responder_hardware");
        echo "\" method=\"POST\">
    
   <select name=\"nombre\" onChange=\"submitform(this)\">
       <option value=\"Todas\">Todas</option> 
       
       ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombre"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombre"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>  
    
    
   
    
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:hardware:buscarHardware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  118 => 32,  113 => 28,  110 => 27,  90 => 18,  84 => 38,  81 => 13,  65 => 5,  58 => 20,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 21,  71 => 31,  67 => 27,  63 => 26,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 33,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 15,  38 => 6,  93 => 28,  88 => 6,  78 => 35,  26 => 6,  87 => 34,  46 => 15,  21 => 2,  94 => 39,  89 => 20,  85 => 25,  75 => 28,  68 => 22,  56 => 32,  27 => 4,  44 => 13,  31 => 4,  25 => 3,  28 => 3,  24 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 10,  40 => 8,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 20,  96 => 31,  83 => 25,  74 => 31,  66 => 24,  55 => 15,  52 => 19,  50 => 27,  43 => 8,  41 => 8,  35 => 7,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 28,  92 => 43,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 16,  60 => 23,  57 => 20,  54 => 12,  51 => 17,  48 => 8,  45 => 14,  42 => 13,  39 => 11,  36 => 9,  33 => 5,  30 => 5,);
    }
}
