<?php

/* ApplicationTodoBundle:Task:days.html.twig */
class __TwigTemplate_15ce38d24c8d26c7a807aa4a844980e7 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "days"));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 2
            echo "
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "day"), "allocateddays"), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "ApplicationTodoBundle:Task:days.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  26 => 3,  23 => 2,  19 => 1,);
    }
}
