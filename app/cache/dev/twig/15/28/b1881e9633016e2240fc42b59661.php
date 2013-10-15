<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_1528b1881e9633016e2240fc42b59661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  127 => 28,  58 => 17,  301 => 187,  242 => 132,  160 => 71,  97 => 41,  76 => 17,  53 => 11,  274 => 172,  271 => 171,  118 => 44,  134 => 67,  104 => 37,  34 => 63,  311 => 189,  251 => 131,  244 => 126,  232 => 120,  226 => 117,  215 => 117,  198 => 108,  191 => 9,  188 => 8,  249 => 172,  233 => 17,  211 => 111,  206 => 174,  326 => 191,  323 => 190,  310 => 17,  306 => 16,  302 => 15,  291 => 6,  288 => 5,  281 => 190,  234 => 146,  210 => 112,  205 => 110,  194 => 102,  185 => 127,  181 => 126,  155 => 115,  77 => 55,  23 => 2,  315 => 196,  255 => 140,  248 => 136,  223 => 120,  216 => 140,  202 => 109,  195 => 104,  148 => 63,  137 => 69,  267 => 166,  161 => 81,  150 => 65,  110 => 22,  261 => 164,  197 => 104,  190 => 129,  114 => 42,  90 => 32,  70 => 17,  331 => 198,  328 => 197,  265 => 136,  231 => 118,  225 => 15,  213 => 114,  207 => 128,  200 => 106,  146 => 63,  113 => 42,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 190,  312 => 195,  309 => 97,  305 => 95,  298 => 186,  294 => 90,  285 => 89,  283 => 193,  278 => 86,  268 => 85,  264 => 165,  258 => 163,  252 => 80,  247 => 146,  241 => 77,  229 => 16,  220 => 141,  214 => 6,  177 => 65,  169 => 60,  140 => 57,  132 => 51,  128 => 49,  107 => 40,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 131,  238 => 140,  235 => 128,  230 => 145,  227 => 123,  224 => 71,  221 => 116,  219 => 113,  217 => 116,  208 => 113,  204 => 127,  179 => 69,  159 => 71,  143 => 56,  135 => 62,  119 => 42,  102 => 17,  71 => 16,  67 => 29,  63 => 19,  59 => 13,  28 => 3,  87 => 28,  201 => 109,  196 => 104,  183 => 94,  171 => 122,  166 => 120,  163 => 62,  158 => 79,  156 => 66,  151 => 65,  142 => 72,  138 => 55,  136 => 55,  121 => 46,  117 => 19,  105 => 18,  91 => 30,  62 => 14,  49 => 10,  38 => 33,  25 => 35,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  44 => 12,  31 => 3,  26 => 9,  94 => 34,  89 => 28,  85 => 32,  75 => 17,  68 => 15,  56 => 11,  27 => 4,  21 => 1,  24 => 2,  19 => 1,  79 => 20,  72 => 16,  69 => 15,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 171,  157 => 71,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 42,  111 => 42,  108 => 19,  101 => 43,  98 => 35,  96 => 33,  83 => 25,  74 => 27,  66 => 16,  55 => 7,  52 => 14,  50 => 4,  43 => 11,  41 => 10,  35 => 184,  32 => 27,  29 => 26,  209 => 112,  203 => 108,  199 => 132,  193 => 102,  189 => 71,  187 => 84,  182 => 66,  176 => 124,  173 => 65,  168 => 72,  164 => 59,  162 => 73,  154 => 79,  149 => 63,  147 => 63,  144 => 107,  141 => 48,  133 => 55,  130 => 41,  125 => 94,  122 => 43,  116 => 42,  112 => 42,  109 => 40,  106 => 45,  103 => 32,  99 => 35,  95 => 33,  92 => 30,  86 => 37,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 6,  57 => 42,  54 => 5,  51 => 4,  48 => 9,  45 => 8,  42 => 7,  39 => 186,  36 => 5,  33 => 4,  30 => 3,);
    }
}
