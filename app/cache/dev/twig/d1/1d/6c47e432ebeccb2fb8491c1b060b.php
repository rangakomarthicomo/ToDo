<?php

/* ApplicationTodoBundle:Task:index.html.twig */
class __TwigTemplate_d11d6c47e432ebeccb2fb8491c1b060b extends Twig_Template
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
        // line 195
        echo "    
</body>
  ";
        // line 197
        $this->displayBlock('javascripts', $context, $blocks);
        // line 200
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
                               
               <br/><br/>  <label style=\"font-weight: bold;font-size: 32px;font-family: cursive;padding-left: 15px;\">Task List. </label>     <br/>
    <table  class=\"table-striped\" cellspacing=\"15\" cellpadding = \"10\" style=\"width:800px;font-size:17px;padding-left:60px;\">
        
            <tr>
                <th style=\"font-weight:bold;padding-left: 15px;\">Id</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Name</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Comments</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Allocated Days</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Createddate</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Updateddate</th>
                <th style=\"font-weight:bold;padding-left: 15px;\">Actions</th>
            </tr>
       
       
        ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 112
            echo "            <tr>
                <td style=\"padding-left: 15px;\"><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td style=\"padding-left: 15px;\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "comments"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "allocateddays"), "html", null, true);
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 117
            if ($this->getAttribute($this->getContext($context, "entity"), "createddate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createddate"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"padding-left: 15px;\">";
            // line 118
            if ($this->getAttribute($this->getContext($context, "entity"), "updateddate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updateddate"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"padding-left: 15px;\">
                <ul>
                    <li>
                        <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 131
        echo "       
    </table>
<br/>
        <ul>
        <li>
            <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("task_new");
        echo "\">
               <label style=\"font-size:17px;padding-left:15px;\"> Create a new entry</label>
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

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        // line 198
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Task:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  331 => 198,  328 => 197,  265 => 136,  258 => 131,  246 => 125,  240 => 122,  231 => 118,  225 => 117,  221 => 116,  217 => 115,  213 => 114,  207 => 113,  204 => 112,  200 => 111,  157 => 71,  146 => 63,  135 => 55,  113 => 42,  106 => 40,  94 => 33,  89 => 30,  86 => 28,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 5,  47 => 4,  41 => 200,  39 => 197,  35 => 195,  33 => 28,  29 => 26,  27 => 4,  22 => 1,);
    }
}
