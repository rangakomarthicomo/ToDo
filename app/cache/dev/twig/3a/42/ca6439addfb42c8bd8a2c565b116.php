<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_3a42ca6439addfb42c8bd8a2c565b116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  20 => 1,  100 => 36,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 317,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  256 => 96,  81 => 30,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 156,  367 => 155,  361 => 146,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  307 => 128,  296 => 121,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  222 => 83,  184 => 63,  178 => 66,  175 => 65,  172 => 64,  152 => 46,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  170 => 56,  165 => 60,  153 => 56,  363 => 153,  357 => 123,  353 => 149,  351 => 141,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  303 => 122,  300 => 121,  297 => 276,  263 => 95,  212 => 78,  174 => 65,  84 => 27,  127 => 35,  58 => 14,  301 => 187,  242 => 132,  160 => 71,  97 => 41,  76 => 27,  53 => 11,  274 => 110,  271 => 171,  118 => 49,  134 => 54,  104 => 37,  34 => 4,  311 => 189,  251 => 131,  244 => 136,  232 => 88,  226 => 84,  215 => 117,  198 => 108,  191 => 67,  188 => 90,  249 => 172,  233 => 87,  211 => 111,  206 => 174,  326 => 138,  323 => 128,  310 => 17,  306 => 107,  302 => 125,  291 => 102,  288 => 118,  281 => 114,  234 => 146,  210 => 77,  205 => 110,  194 => 70,  185 => 66,  181 => 65,  155 => 47,  77 => 25,  23 => 2,  315 => 125,  255 => 101,  248 => 94,  223 => 120,  216 => 79,  202 => 77,  195 => 104,  148 => 63,  137 => 69,  267 => 101,  161 => 63,  150 => 55,  110 => 38,  261 => 164,  197 => 71,  190 => 76,  114 => 42,  90 => 27,  70 => 26,  331 => 140,  328 => 139,  265 => 105,  231 => 83,  225 => 15,  213 => 78,  207 => 75,  200 => 72,  146 => 63,  113 => 40,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 190,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 165,  258 => 94,  252 => 80,  247 => 146,  241 => 90,  229 => 85,  220 => 81,  214 => 6,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 17,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 131,  238 => 140,  235 => 89,  230 => 145,  227 => 86,  224 => 81,  221 => 116,  219 => 113,  217 => 116,  208 => 76,  204 => 127,  179 => 69,  159 => 71,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 18,  63 => 21,  59 => 17,  28 => 3,  87 => 33,  201 => 109,  196 => 92,  183 => 94,  171 => 122,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 72,  138 => 55,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 16,  49 => 12,  38 => 6,  25 => 35,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 11,  31 => 5,  26 => 3,  94 => 38,  89 => 35,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  27 => 7,  21 => 2,  24 => 2,  19 => 1,  79 => 29,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 71,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 19,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 112,  203 => 73,  199 => 93,  193 => 102,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 63,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 39,  109 => 47,  106 => 51,  103 => 32,  99 => 31,  95 => 34,  92 => 31,  86 => 37,  82 => 26,  80 => 32,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 13,  39 => 10,  36 => 9,  33 => 9,  30 => 7,);
    }
}
