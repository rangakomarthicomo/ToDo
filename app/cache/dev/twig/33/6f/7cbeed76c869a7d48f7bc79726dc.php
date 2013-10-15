<?php

/* ApplicationTodoBundle:Taskprogress:show.html.twig */
class __TwigTemplate_336f7cbeed76c869a7d48f7bc79726dc extends Twig_Template
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
        // line 184
        echo "    
</body>
  ";
        // line 186
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
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
                 <br/><br/>              
                <label style=\"font-weight: bold;font-size: 32px;font-family: cursive;padding-left: 15px;\">Task </label>     <br/>

       <table  class=\"table-striped\" cellspacing=\"15\" cellpadding = \"10\" style=\"width:800px;font-size:17px;padding-left:60px;\">

        <tbody>
            <tr>
                <th style=\"font-weight: bold;font-size: 16px;padding-left: 15px;\">Id</th>
                <td>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                 <th style=\"font-weight: bold;font-size: 16px;padding-left: 15px;\">Task</th>
                <td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "task"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"font-weight: bold;font-size: 16px;padding-left: 15px;\">Estimateddays</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "estimateddays"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th style=\"font-weight: bold;font-size: 16px;padding-left: 15px;\">Completeddays</th>
                <td>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "completeddays"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table><br/><br/>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("taskprogress");
        echo "\" style=\"font-weight: bold;font-size: 15px;padding-left: 15px;\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taskprogress_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" style=\"font-weight: bold;font-size: 15px;padding-left: 15px;\">
            Edit
        </a>
    </li>
    <li>";
        // line 132
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

    // line 186
    public function block_javascripts($context, array $blocks = array())
    {
        // line 187
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Taskprogress:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  301 => 187,  298 => 186,  242 => 132,  235 => 128,  227 => 123,  217 => 116,  210 => 112,  203 => 108,  196 => 104,  160 => 71,  149 => 63,  138 => 55,  116 => 42,  109 => 40,  97 => 33,  92 => 30,  89 => 28,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  53 => 5,  50 => 4,  41 => 189,  39 => 186,  35 => 184,  33 => 28,  29 => 26,  27 => 4,  22 => 1,);
    }
}
