<?php

/* ApplicationTodoBundle:Taskprogress:edit.html.twig */
class __TwigTemplate_1cb82b22fb09877a2e2889f6a6339a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
  <head>
    <title>Todo</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo " </head>
 <body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "    
</body>
  ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "</html>
   



";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    
 <style type=\"text/css\">
<!--
body {
\tbackground-image: url(images/bg.png);
\t
}
-->
 </style>
 <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style9.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/demo.css"), "html", null, true);
        echo "\" />    
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
<!--
.Stile1 {color: #333333}
-->
        </style>
        
        ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "<div id=\"container\">
<header>
    <nav>   
      <div id=\"logo\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("application_todo_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo here\" /></a>      </div>
      
      <div id=\"search-top\">
  <!--- <form method=\"post\" action=\"#\">
  <input type=\"text\" onFocus=\"if(this.value=='Search')this.value='';\" onBlur=\"if(this.value=='')this.value='Search';\" value=\"Search\"  id=\"search-field\"/>
  <input type=\"submit\" value=\"\" id=\"search-btn\"/>
  </form> -->
              <label style=\"color:blue;font-family:verdana;font-size: 16px;padding-left: 30px;\"> welcome ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "username"), "method"), "html", null, true);
        echo "| <a href=\"";
        echo $this->env->getExtension('routing')->getPath("application_todo_logout");
        echo "\" style=\"text-decoration: none;color:red\">Logout</a></label> 
      </div>
      <div id=\"nav_social\"><a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/facebook_32.png"), "html", null, true);
        echo "\" alt=\"Become a fan\" width=\"32\" height=\"32\" /></a><a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/twitter_32.png"), "html", null, true);
        echo "\" alt=\"Follows on Twitter\" /></a><a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/linkedin_32.png"), "html", null, true);
        echo "\" alt=\"Linked in\" /></a><a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/email_32.png"), "html", null, true);
        echo " \" alt=\"Contact\" width=\"32\" height=\"32\" /></a> 
      
      
      
      </div>
  </nav>
  
    </header>

<div class=\"content\">

           <ul class=\"ca-menu\">
                    <li>
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("application_todo_symfonybook");
        echo "\">
                            <span class=\"ca-icon\">B</span>
                            <div class=\"ca-content\">
                                <h2 class=\"ca-main\">Symfony Learing</h2>
                                <h3 class=\"ca-sub\">Symfony Book</h3>
                            </div>
                        </a>                    </li>
                    <li>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
                            <span class=\"ca-icon\">T</span>
                            <div class=\"ca-content\">
                                <h2 class=\"ca-main\">Symfony Pratice</h2>
                                <h3 class=\"ca-sub\">Symfony Task Manager</h3>
                            </div>
                        </a>                    </li>
                    <li>
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("taskprogress");
        echo "\">
                            <span class=\"ca-icon\">P</span>
                            <div class=\"ca-content\">
                                <h2 class=\"ca-main\">Symfony Progress</h2>
                                <h3 class=\"ca-sub\">Symfony Progress sheet</h3>
                            </div>
                        </a>                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"ca-icon\">U</span>
                            <div class=\"ca-content\">
                                <h2 class=\"ca-main\">Symfony Updates</h2>
                                <h3 class=\"ca-sub\">Symfony Updates day to day</h3>
                            </div>
                        </a>                    </li>
                </ul>
  <!--sdiv class=\"abox\">
      <figure>
      <fcapion>


    
 </div> 
            <div style=\"float:right;padding-left:30px;\" class=\"enter2\">tar main --> 
    
    <main>    
       <div class=\"abox\">
      <figure>
      <fcapion>


    
 </div> 
            <div style=\"float:right;padding-left:30px;\" class=\"enter2\">
    <h1>Taskprogress edit</h1>

    ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("taskprogress");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 117
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
   </div>
    </main>
    <!--end main -->
    <!--start middle -->
    <middle>  
        <!-- <label style=\"color:red;font-family:verdana;font-size: 24px;font-weight: bold\">Symfony Book</label><br/><br/> -->
       
    </middle>
</div>
<!--end middle -->
<!--start footer -->
<footer>  
  <div id=\"footer\">
  <div id=\"footerleft\">
      <h2>Imediacreatives</h2>
      <ul>
        <li><a href=\"http://www.imediacreatives.it\">Css3 Kitesurf</a></li>
        <li><a href=\"...\"> Layout Design Gardenfolio</a></li>
        <li><a href=\"...\"> BlueBand</a></li>
      </ul>
    </div>
    <div id=\"footermiddle\">
      <h2>User Comments</h2>
      <ul>
        <li><a href=\"...\">SWF XLM Sldeshow</a></li>
        <li><a href=\"http://www.imediacreatives.it\">Michelangelo</a></li>
        <li><a href=\"...\">Another Templates Principato</a></li>
      </ul>
    </div>
    <div id=\"footerright\">
      <h2>Design & Project</h2>
      <ul>
        <li><a href=\"http://www.imediacreatives.it\">CSS3 Design</a></li>
        <li><a href=\"http://www.imediacreatives.it\">Psd to CSS </a></li>
        <li><a href=\"http://www.imediacreatives.it\">Psd to Html5</a></li>
      </ul>
    </div>
    <details>
<summary>
<p><a href=\"http://www.imediacreatives.it\" target=\"_blank\">Imediacreatives.it</a>
  Copyright &copy; yoursite.com -2011.</p></summary><p></p>
</details>
    </div>
</footer>
<!--end footer -->
</div>
<!--end container -->
<!-- Free template distributed by http://freehtml5templates.com -->
         
    ";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Taskprogress:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 172,  271 => 171,  118 => 44,  134 => 67,  104 => 37,  34 => 63,  311 => 189,  251 => 131,  244 => 126,  232 => 120,  226 => 117,  215 => 117,  198 => 108,  191 => 9,  188 => 8,  249 => 172,  233 => 17,  211 => 111,  206 => 174,  326 => 191,  323 => 190,  310 => 17,  306 => 16,  302 => 15,  291 => 6,  288 => 5,  281 => 190,  234 => 146,  210 => 137,  205 => 110,  194 => 102,  185 => 127,  181 => 126,  155 => 115,  77 => 55,  23 => 2,  315 => 196,  255 => 140,  248 => 136,  223 => 120,  216 => 140,  202 => 109,  195 => 104,  148 => 63,  137 => 69,  267 => 166,  161 => 81,  150 => 65,  110 => 42,  261 => 164,  197 => 104,  190 => 129,  114 => 42,  90 => 27,  70 => 17,  331 => 198,  328 => 197,  265 => 136,  231 => 118,  225 => 15,  213 => 114,  207 => 128,  200 => 106,  146 => 63,  113 => 42,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 190,  312 => 195,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 193,  278 => 86,  268 => 85,  264 => 165,  258 => 163,  252 => 80,  247 => 146,  241 => 77,  229 => 16,  220 => 141,  214 => 6,  177 => 65,  169 => 60,  140 => 57,  132 => 51,  128 => 49,  107 => 40,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 131,  238 => 140,  235 => 74,  230 => 145,  227 => 81,  224 => 71,  221 => 116,  219 => 113,  217 => 115,  208 => 113,  204 => 127,  179 => 69,  159 => 71,  143 => 56,  135 => 83,  119 => 42,  102 => 32,  71 => 16,  67 => 29,  63 => 28,  59 => 26,  28 => 3,  87 => 28,  201 => 109,  196 => 90,  183 => 94,  171 => 122,  166 => 120,  163 => 62,  158 => 71,  156 => 66,  151 => 65,  142 => 72,  138 => 54,  136 => 55,  121 => 46,  117 => 44,  105 => 40,  91 => 30,  62 => 14,  49 => 4,  38 => 33,  25 => 5,  93 => 28,  88 => 63,  78 => 18,  46 => 7,  44 => 12,  31 => 28,  26 => 3,  94 => 32,  89 => 30,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  21 => 1,  24 => 2,  19 => 1,  79 => 20,  72 => 16,  69 => 15,  47 => 23,  40 => 67,  37 => 169,  22 => 1,  246 => 171,  157 => 71,  145 => 46,  139 => 57,  131 => 52,  123 => 47,  120 => 40,  115 => 42,  111 => 42,  108 => 40,  101 => 71,  98 => 35,  96 => 33,  83 => 25,  74 => 18,  66 => 16,  55 => 7,  52 => 6,  50 => 24,  43 => 174,  41 => 171,  35 => 30,  32 => 27,  29 => 6,  209 => 112,  203 => 78,  199 => 132,  193 => 102,  189 => 71,  187 => 84,  182 => 66,  176 => 124,  173 => 65,  168 => 72,  164 => 59,  162 => 73,  154 => 79,  149 => 51,  147 => 63,  144 => 107,  141 => 48,  133 => 55,  130 => 41,  125 => 94,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 32,  99 => 35,  95 => 33,  92 => 21,  86 => 37,  82 => 22,  80 => 19,  73 => 16,  64 => 17,  60 => 6,  57 => 42,  54 => 5,  51 => 4,  48 => 4,  45 => 17,  42 => 202,  39 => 189,  36 => 5,  33 => 28,  30 => 8,);
    }
}
