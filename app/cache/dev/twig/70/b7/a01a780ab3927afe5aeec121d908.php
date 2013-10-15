<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_70b7a01a780ab3927afe5aeec121d908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  353 => 121,  351 => 120,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  303 => 106,  300 => 105,  297 => 104,  263 => 95,  212 => 78,  174 => 65,  84 => 29,  127 => 28,  58 => 14,  301 => 187,  242 => 132,  160 => 71,  97 => 41,  76 => 17,  53 => 11,  274 => 97,  271 => 171,  118 => 44,  134 => 67,  104 => 32,  34 => 5,  311 => 189,  251 => 131,  244 => 126,  232 => 120,  226 => 117,  215 => 117,  198 => 108,  191 => 9,  188 => 8,  249 => 172,  233 => 17,  211 => 111,  206 => 174,  326 => 191,  323 => 190,  310 => 17,  306 => 107,  302 => 15,  291 => 102,  288 => 101,  281 => 190,  234 => 146,  210 => 112,  205 => 110,  194 => 102,  185 => 74,  181 => 126,  155 => 115,  77 => 55,  23 => 2,  315 => 110,  255 => 93,  248 => 136,  223 => 120,  216 => 140,  202 => 77,  195 => 104,  148 => 63,  137 => 69,  267 => 166,  161 => 63,  150 => 65,  110 => 22,  261 => 164,  197 => 104,  190 => 76,  114 => 42,  90 => 32,  70 => 17,  331 => 198,  328 => 197,  265 => 96,  231 => 83,  225 => 15,  213 => 114,  207 => 128,  200 => 106,  146 => 63,  113 => 42,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 118,  337 => 103,  322 => 101,  314 => 190,  312 => 109,  309 => 108,  305 => 95,  298 => 186,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 165,  258 => 94,  252 => 80,  247 => 146,  241 => 77,  229 => 16,  220 => 141,  214 => 6,  177 => 65,  169 => 60,  140 => 57,  132 => 51,  128 => 49,  107 => 40,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 92,  240 => 131,  238 => 140,  235 => 85,  230 => 145,  227 => 123,  224 => 81,  221 => 116,  219 => 113,  217 => 116,  208 => 113,  204 => 127,  179 => 69,  159 => 71,  143 => 51,  135 => 62,  119 => 40,  102 => 17,  71 => 16,  67 => 29,  63 => 19,  59 => 16,  28 => 3,  87 => 28,  201 => 109,  196 => 104,  183 => 94,  171 => 122,  166 => 120,  163 => 62,  158 => 79,  156 => 62,  151 => 65,  142 => 72,  138 => 55,  136 => 48,  121 => 46,  117 => 39,  105 => 18,  91 => 30,  62 => 14,  49 => 14,  38 => 7,  25 => 35,  93 => 28,  88 => 25,  78 => 26,  46 => 13,  44 => 9,  31 => 4,  26 => 9,  94 => 34,  89 => 28,  85 => 24,  75 => 19,  68 => 15,  56 => 11,  27 => 3,  21 => 1,  24 => 2,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 6,  37 => 5,  22 => 1,  246 => 171,  157 => 71,  145 => 52,  139 => 49,  131 => 45,  123 => 59,  120 => 20,  115 => 42,  111 => 42,  108 => 19,  101 => 31,  98 => 30,  96 => 33,  83 => 25,  74 => 27,  66 => 16,  55 => 13,  52 => 12,  50 => 4,  43 => 7,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 112,  203 => 108,  199 => 132,  193 => 102,  189 => 71,  187 => 75,  182 => 66,  176 => 124,  173 => 65,  168 => 72,  164 => 59,  162 => 73,  154 => 79,  149 => 63,  147 => 63,  144 => 107,  141 => 48,  133 => 55,  130 => 41,  125 => 42,  122 => 41,  116 => 42,  112 => 36,  109 => 35,  106 => 45,  103 => 32,  99 => 35,  95 => 33,  92 => 27,  86 => 37,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 5,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 186,  36 => 5,  33 => 4,  30 => 3,);
    }
}
