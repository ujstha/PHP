<?php

/* edit/index.html.twig */
class __TwigTemplate_804554351be5732c7e192fa1986bdd889bc13138441d072db53c61b0e19ba1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "edit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b8be8fc21a0470e541d1b04a976c3211ab21493b8a0c9ed6c7fda1b0b75e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b8be8fc21a0470e541d1b04a976c3211ab21493b8a0c9ed6c7fda1b0b75e3a->enter($__internal_b9b8be8fc21a0470e541d1b04a976c3211ab21493b8a0c9ed6c7fda1b0b75e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b8be8fc21a0470e541d1b04a976c3211ab21493b8a0c9ed6c7fda1b0b75e3a->leave($__internal_b9b8be8fc21a0470e541d1b04a976c3211ab21493b8a0c9ed6c7fda1b0b75e3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_479cb363169a31c99a52668c904421d39c5395311fa20bc96dd4f2d76601aba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479cb363169a31c99a52668c904421d39c5395311fa20bc96dd4f2d76601aba6->enter($__internal_479cb363169a31c99a52668c904421d39c5395311fa20bc96dd4f2d76601aba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<a href=\"../\">Updated Hello World!</a>
";
        
        $__internal_479cb363169a31c99a52668c904421d39c5395311fa20bc96dd4f2d76601aba6->leave($__internal_479cb363169a31c99a52668c904421d39c5395311fa20bc96dd4f2d76601aba6_prof);

    }

    public function getTemplateName()
    {
        return "edit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<a href=\"../\">Updated Hello World!</a>
{% endblock %}", "edit/index.html.twig", "C:\\my_project\\templates\\edit\\index.html.twig");
    }
}
