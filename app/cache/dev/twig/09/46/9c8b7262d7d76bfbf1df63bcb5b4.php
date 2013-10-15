<?php

/* ApplicationTodoBundle:Home:home.html.twig */
class __TwigTemplate_09469c8b7262d7d76bfbf1df63bcb5b4 extends Twig_Template
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
      <div id=\"logo\"><a href=\"#\"><img src=\"";
        // line 33
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
     <h1>Symfony Communication. </h1>
      </fcaption><a href=\"#\"></a><a href=\"#\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/bror.jpg"), "html", null, true);
        echo "\" alt=\"I love graphic\" width=\"289\" height=\"175\" /></a></figure>
      </div>
    <div class=\"abox\">
      <figure>
      <fcapion>
      <h1>Symfony Enhancements... </h1>
      </fcaption>
      <a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/nat.jpg"), "html", null, true);
        echo "\" alt=\"I love graphic\" width=\"287\" height=\"176\" /></a>      </figure>
    </div>
    <div class=\"abox\">
      <figure>
      <fcapion>
     <h1>Symfony Feedbacks...</h1>
      </fcaption><a href=\"#\"></a><a href=\"#\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/nas.jpg"), "html", null, true);
        echo "\" alt=\"I love graphic\" width=\"289\" height=\"178\" /></a></figure>
      </div>   
    </main>
    <!--end main -->
    <!--start middle -->
    <middle>    
      <div class=\"enter\"><P >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non diam in neque blandit commodo. Quisque lobortis sollicitudin nisl pulvinar condimentum. Sed est diam, hendrerit id dignissim vel, adipiscing interdum elit. Vivamus a laoreet eros. Pellentesque sollicitudin pretium fermentum.<br></P>
        <div class=\"imgteaser\">
<a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/p1.png"), "html", null, true);
        echo "\" alt=\"Todo el Todo\" width=\"413\" height=\"220\" /><span class=\"desc\">
\t<strong>TODO 2011 - Lorem Ipsum quntum</strong>
\t\tBlandit turpis patria euismod at iaceo appellatio, demoveo esse.</span></a></div><div class=\"btn\"> <a href=\"#\">Read More...</a></div>
      </div>\t
      <div class=\"section_slogan\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/quote-right.png"), "html", null, true);
        echo "\" alt=\"images\" /><span class=\"cursive\"> The inspiration is the desire by extension, do you think is right? </span><img src=\"images/quote-left.png\" alt=\"images\" /></div>
      <div class=\"middle_box\"><h1><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/fav.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> <a href=\"#\">Resources</a></h1>
      <ol>
        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem Ipsum quntum</ol>
      <ol>
        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem ipsum dolor sit amet</ol>
      <ol>
        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Integer vehicula laoreet purus ac tincidunt</ol>
     <ol> <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> distinctly portfolio suite grande architectural five-star.</ol>
      </div>
      <div class=\"middle_box\"><h1><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/fav.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> <a href=\"#\">Blogs</a></h1>
        <p><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Recent Post</p>
        <ol>
        <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem Ipsum quntum
        </ol>
      <ol>
        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem ipsum dolor sit amet
      </ol>
      <ol> <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> distinctly portfolio suite grande architectural five-star.</ol>
      </div>
      <div class=\"middle_box\">
        <h1><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/fav.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> <a href=\"#\">Design </a></h1>
        <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem Ipsum quntum</ol>
      <ol>
        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Lorem ipsum dolor sit amet</ol>
      <ol>
        <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> Integer vehicula laoreet purus ac tincidunt</ol>
     <ol> <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/images/dialog-ok.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" /> distinctly portfolio suite grande architectural five-star.</ol>
      </div>
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
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 193
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

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        // line 191
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 191,  323 => 190,  310 => 17,  306 => 16,  302 => 15,  291 => 6,  288 => 5,  283 => 193,  281 => 190,  234 => 146,  230 => 145,  225 => 143,  220 => 141,  216 => 140,  210 => 137,  205 => 135,  199 => 132,  194 => 130,  190 => 129,  185 => 127,  181 => 126,  176 => 124,  171 => 122,  166 => 120,  162 => 119,  155 => 115,  144 => 107,  135 => 101,  125 => 94,  99 => 71,  88 => 63,  77 => 55,  55 => 42,  48 => 40,  38 => 33,  29 => 26,  27 => 5,  21 => 1,);
    }
}
