<?php

/* ApplicationTodoBundle:SymfonyBook:index.html.twig */
class __TwigTemplate_20bd34ea9e58f7df1ad8554b65da3c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo " </head>
  
<body>
<!--start container -->
<div id=\"container\">
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
     <h1>Symfony Book. </h1>
     
      </div> 
            <div style=\"float:right\" class=\"enter2\">
                <br/><br/>
               
                       
        <ol>
            <li><a href=\"http://symfony.com/doc/current/book/http_fundamentals.html\" style=\"text-decoration: none;color:#575656;font-size: 19px;font-weight: bold;padding-left:30px;\">1. Symfony2 and HTTP Fundamentals</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/from_flat_php_to_symfony2.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">2.  Symfony2 versus Flat PHP</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/installation.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">3. Installing and Configuring Symfony</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/page_creation.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">4. Creating Pages in Symfony2</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/controller.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">5. Controller</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/routing.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">6. Routing</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/templating.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">7. Creating and using Templates</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/doctrine.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">8. Databases and Doctrine</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/propel.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">9. Databases and Propel</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/testing.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">10. Testing</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/validation.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">11. Validation</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/forms.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">12. Forms</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/security.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">13. Security</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/http_cache.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">14. HTTP Cache</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/translation.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">15. Translations</a></li>
            <li><a href=\"http://symfony.com/doc/current/book/service_container.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">16. Service Container</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/performance.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">17. Performance</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/internals.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">18. Internals</a></li> 
            <li><a href=\"http://symfony.com/doc/current/book/stable_api.html\" style=\"text-decoration: none;font-size:19px;color:#575656;font-weight: bold;padding-left:30px;\">19. The Symfony2 Stable API</a></li>
        </ol>      
            
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
  </body>
  ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
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

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:SymfonyBook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 172,  246 => 171,  233 => 17,  229 => 16,  225 => 15,  214 => 6,  211 => 5,  206 => 174,  204 => 171,  101 => 71,  90 => 63,  79 => 55,  57 => 42,  50 => 40,  38 => 33,  29 => 26,  27 => 5,  21 => 1,);
    }
}
