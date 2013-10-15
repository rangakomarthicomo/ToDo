<?php

/* ApplicationTodoBundle:Taskprogress:index.html.twig */
class __TwigTemplate_b3dfd10a193e10b56b2e0a3294a7cabe extends Twig_Template
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
        echo "<!DOCTYPE html>
  <head>
    <title>Todo</title>
    ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo " </head>
 <body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "    
</body>
  ";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo "</html>
   

";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <!DOCTYPE
 <style type=\"text/css\">
<!--
body {
\tbackground-image: url(images/bg.png);
\t
}
-->
 </style>
 <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style9.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/demo.css"), "html", null, true);
        echo "\" />    
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <style type=\"text/css\">
<!--
.Stile1 {color: #333333}
-->
        </style>
        
        ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "<div id=\"container\">
<header>
    <nav>   
      <div id=\"logo\"><a href=\"";
        // line 33
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
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "username"), "method"), "html", null, true);
        echo "| <a href=\"";
        echo $this->env->getExtension('routing')->getPath("application_todo_logout");
        echo "\" style=\"text-decoration: none;color:red\">Logout</a></label> 
      </div>
      <div id=\"nav_social\"><a href=\"#\"><img src=\"";
        // line 42
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
        // line 55
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
        // line 63
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
        // line 71
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
  <!--star main --> 
    
    <main>    
       <div class=\"abox\">
      <figure>
      <fcapion>
     
     </div> 
            <div style=\"float:right\" class=\"enter2\" >
   <br/><br/>  <label style=\"font-weight: bold;font-size: 32px;font-family: cursive;padding-left: 15px;\">Task Progress </label>     <br/>
    <table  class=\"table-striped\" cellspacing=\"15\" cellpadding = \"10\" style=\"width:800px;font-size:17px;padding-left:60px;\">
        <thead>
            <tr>
                <th style=\"font-weight:bold;padding-left: 15px;\">Id</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Task</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Estimateddays</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Completeddays</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 109
            echo "            <tr>
                <td style=\"padding-left: 15px;\"><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taskprogress_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                 <td style=\"padding-left: 15px;\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "task"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "estimateddays"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "completeddays"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">
                <ul>
                    <li>
                        <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taskprogress_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taskprogress_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("taskprogress_new");
        echo "\">
                 <label style=\"font-size:17px;padding-left:15px;\"> Create a new entry </label>
            </a>
        </li>
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

    // line 189
    public function block_javascripts($context, array $blocks = array())
    {
        // line 190
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Taskprogress:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  314 => 190,  311 => 189,  251 => 131,  244 => 126,  232 => 120,  226 => 117,  219 => 113,  215 => 112,  211 => 111,  205 => 110,  202 => 109,  198 => 108,  158 => 71,  147 => 63,  136 => 55,  114 => 42,  107 => 40,  95 => 33,  90 => 30,  87 => 28,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  51 => 5,  48 => 4,  41 => 192,  39 => 189,  35 => 187,  33 => 28,  29 => 26,  27 => 4,  22 => 1,);
    }
}
