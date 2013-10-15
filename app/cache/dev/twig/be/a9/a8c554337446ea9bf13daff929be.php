<?php

/* ApplicationTodoBundle:Login:login.html.twig */
class __TwigTemplate_bea9a8c554337446ea9bf13daff929be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
        <title>Todo</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"description\" content=\"Expand, contract, animate forms with jQuery wihtout leaving the page\" />
        <meta name=\"keywords\" content=\"expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript\"/>
        ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "\t\t
    </head>
    <body>
\t\t<div class=\"wrapper\">
                    
                       
\t\t\t<h1>TODO</h1>
\t\t\t<h2>ToDo <span>Login Form</span> </h2>
                        
                        <center>";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["falshmessage"]) {
            // line 23
            echo "                        
                        <label style=\"color:green;font-family: verdana;font-size: 14px;font-weight: bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "falshmessage"), "html", null, true);
            echo "</label>
                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['falshmessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</center>
                        
                        <center>";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice2"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["falshmessage2"]) {
            // line 29
            echo "                        
                        <label style=\"color:red;font-family: verdana;font-size: 14px;font-weight: bold\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "falshmessage2"), "html", null, true);
            echo "</label>
                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['falshmessage2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</center>
                       
\t\t\t<div class=\"content\">
\t\t\t\t<div id=\"form_wrapper\" class=\"form_wrapper\">
                              
\t\t\t\t\t<form class=\"register\" action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("application_todo_registration");
        echo "\" method=\"post\">
\t\t\t\t\t\t<h3>Register</h3>
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>First Name:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" required=true title=\"please enter firstname\" autofocus />
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>Last Name:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" required=true autofocus />
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>Website:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"http://\" name=\"website\" required=true autofocus />
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>Username:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" required=true/>
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>Email:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" required=true />
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label>Password:</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" required=true/>
\t\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t<div class=\"remember\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t<span>Send me updates</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Register\" />
\t\t\t\t\t\t\t<a href=\"index.html\" rel=\"login\" class=\"linkform\">You have an account already? Log in here</a>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<form class=\"login active\" method=\"post\" action=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("application_todo_logincheck");
        echo "\">
                                            
\t\t\t\t\t\t<h3>Login</h3>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Username:</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" required=true />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Password: <a href=\"forgot_password.html\" rel=\"forgot_password\" class=\"forgot linkform\">Forgot your password?</a></label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" required=true />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t<div class=\"remember\"><input type=\"checkbox\" /><span>Keep me logged in</span></div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Login\"></input>
\t\t\t\t\t\t\t<a href=\"register.html\" rel=\"register\" class=\"linkform\">You don't have an account yet? Register here</a>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<form class=\"forgot_password\">
\t\t\t\t\t\t<h3>Forgot Password</h3>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>Username or Email:</label>
\t\t\t\t\t\t\t<input type=\"text\" />
\t\t\t\t\t\t\t<span class=\"error\">This is an error</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send reminder\"></input>
\t\t\t\t\t\t\t<a href=\"index.html\" rel=\"login\" class=\"linkform\">Suddenly remebered? Log in here</a>
\t\t\t\t\t\t\t<a href=\"register.html\" rel=\"register\" class=\"linkform\">You don't have an account? Register here</a>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t

\t\t<!-- The JavaScript -->
                
                ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
        echo "    </body>
</html>";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"../favicon.ico\" type=\"image/x-icon\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/css/style.css"), "html", null, true);
        echo "\" />
        
        ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "                
                <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/js/cufon-yui.js"), "html", null, true);
        echo " \" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationtodo/js/ChunkFive_400.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tCufon.replace('h1',{ textShadow: '1px 1px #fff'});
\t\t\tCufon.replace('h2',{ textShadow: '1px 1px #fff'});
\t\t\tCufon.replace('h3',{ textShadow: '1px 1px #000'});
\t\t\tCufon.replace('.back');
\t\t</script>
                
\t\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\t//the form wrapper (includes all forms)
\t\t\t\tvar \$form_wrapper\t= \$('#form_wrapper'),
\t\t\t\t\t//the current form is the one with class active
\t\t\t\t\t\$currentForm\t= \$form_wrapper.children('form.active'),
\t\t\t\t\t//the change form links
\t\t\t\t\t\$linkform\t\t= \$form_wrapper.find('.linkform');
\t\t\t\t\t\t
\t\t\t\t//get width and height of each form and store them for later\t\t\t\t\t\t
\t\t\t\t\$form_wrapper.children('form').each(function(i){
\t\t\t\t\tvar \$theForm\t= \$(this);
\t\t\t\t\t//solve the inline display none problem when using fadeIn fadeOut
\t\t\t\t\tif(!\$theForm.hasClass('active'))
\t\t\t\t\t\t\$theForm.hide();
\t\t\t\t\t\$theForm.data({
\t\t\t\t\t\twidth\t: \$theForm.width(),
\t\t\t\t\t\theight\t: \$theForm.height()
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t//set width and height of wrapper (same of current form)
\t\t\t\tsetWrapperWidth();
\t\t\t\t
\t\t\t\t/*
\t\t\t\tclicking a link (change form event) in the form
\t\t\t\tmakes the current form hide.
\t\t\t\tThe wrapper animates its width and height to the 
\t\t\t\twidth and height of the new current form.
\t\t\t\tAfter the animation, the new form is shown
\t\t\t\t*/
\t\t\t\t\$linkform.bind('click',function(e){
\t\t\t\t\tvar \$link\t= \$(this);
\t\t\t\t\tvar target\t= \$link.attr('rel');
\t\t\t\t\t\$currentForm.fadeOut(400,function(){
\t\t\t\t\t\t//remove class active from current form
\t\t\t\t\t\t\$currentForm.removeClass('active');
\t\t\t\t\t\t//new current form
\t\t\t\t\t\t\$currentForm= \$form_wrapper.children('form.'+target);
\t\t\t\t\t\t//animate the wrapper
\t\t\t\t\t\t\$form_wrapper.stop()
\t\t\t\t\t\t\t\t\t .animate({
\t\t\t\t\t\t\t\t\t\twidth\t: \$currentForm.data('width') + 'px',
\t\t\t\t\t\t\t\t\t\theight\t: \$currentForm.data('height') + 'px'
\t\t\t\t\t\t\t\t\t },500,function(){
\t\t\t\t\t\t\t\t\t\t//new form gets class active
\t\t\t\t\t\t\t\t\t\t\$currentForm.addClass('active');
\t\t\t\t\t\t\t\t\t\t//show the new form
\t\t\t\t\t\t\t\t\t\t\$currentForm.fadeIn(400);
\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t});
\t\t\t\t\te.preventDefault();
\t\t\t\t});
\t\t\t\t
\t\t\t\tfunction setWrapperWidth(){
\t\t\t\t\t\$form_wrapper.css({
\t\t\t\t\t\twidth\t: \$currentForm.data('width') + 'px',
\t\t\t\t\t\theight\t: \$currentForm.data('height') + 'px'
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t/*
\t\t\t\tfor the demo we disabled the submit buttons
\t\t\t\tif you submit the form, you need to check the 
\t\t\t\twhich form was submited, and give the class active 
\t\t\t\tto the form you want to show
\t\t\t\t*/
\t\t\t\t
\t\t\t});
        </script>
                
                ";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 129,  207 => 128,  204 => 127,  201 => 126,  194 => 10,  191 => 9,  188 => 8,  183 => 210,  181 => 126,  135 => 83,  86 => 37,  79 => 32,  70 => 30,  67 => 29,  63 => 28,  59 => 26,  50 => 24,  47 => 23,  43 => 22,  32 => 13,  30 => 8,  21 => 1,);
    }
}
