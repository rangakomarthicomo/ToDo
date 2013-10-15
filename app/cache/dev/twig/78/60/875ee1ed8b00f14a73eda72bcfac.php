<?php

/* ApplicationTodoBundle:Taskprogress:new.html.twig */
class __TwigTemplate_7860875ee1ed8b00f14a73eda72bcfac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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
        echo "        
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        
        
 </head>
 <body>
";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "    
</body>


</html>
";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style9.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/demo.css"), "html", null, true);
        echo "\" />    
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
<!--
.Stile1 {color: #333333}
-->
        </style>
        
        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "  <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
  <script>
   \$(document).ready(function(){
       
\t\t\$('.task').change(function(){
                    
                       var taskvalue = document.getElementById('application_todobundle_taskprogress_task').value;
\t\t\t\$.ajax({
\t\t\t\ttype : \"POST\",
\t\t\t\turl : \"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("application_todo_days");
        echo "\",
                                data: {taskid:taskvalue },
\t\t\t\tdataType : \"html\",
\t\t\t\tsuccess: function(data) {
                            
                                 var id = parseInt(data);
                                \$('#application_todobundle_taskprogress_estimateddays').val(id);
\t\t\t\t},
\t\t\t\terror : function() {
                                    
\t\t\t\t\talert(\"Sorry, The requested property could not be found.\");
\t\t\t\t}
\t\t\t});
\t\t});
\t});
       
 </script>

         
    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "<div id=\"container\">
<header>
    <nav>   
      <div id=\"logo\"><a href=\"";
        // line 66
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
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "username"), "method"), "html", null, true);
        echo "| <a href=\"";
        echo $this->env->getExtension('routing')->getPath("application_todo_logout");
        echo "\" style=\"text-decoration: none;color:red\">Logout</a></label> 
      </div>
      <div id=\"nav_social\"><a href=\"#\"><img src=\"";
        // line 75
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
        // line 88
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
        // line 96
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
        // line 104
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
            <div style=\"float:right;padding-left:30px;\" class=\"enter2\">
              
    <h1>Taskprogress creation</h1>

    ";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("taskprogress");
        echo "\">
            Back to the list
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

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Taskprogress:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  239 => 138,  232 => 134,  199 => 104,  188 => 96,  177 => 88,  155 => 75,  148 => 73,  136 => 66,  131 => 63,  128 => 61,  104 => 37,  93 => 28,  90 => 27,  78 => 18,  73 => 16,  69 => 15,  65 => 14,  54 => 5,  51 => 4,  42 => 194,  40 => 61,  34 => 57,  32 => 27,  29 => 26,  27 => 4,  22 => 1,);
    }
}
