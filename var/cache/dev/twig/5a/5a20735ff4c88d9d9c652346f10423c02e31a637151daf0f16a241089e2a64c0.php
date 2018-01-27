<?php

/* index.html.twig */
class __TwigTemplate_9f9495da2c4734fe72437a0a3812626762d3584848c20848c1d9baee4954f011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_88f8c790e066b403fe3f07ebf9fad0dabee0068c309c99ed36e87448728235c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f8c790e066b403fe3f07ebf9fad0dabee0068c309c99ed36e87448728235c9->enter($__internal_88f8c790e066b403fe3f07ebf9fad0dabee0068c309c99ed36e87448728235c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f8c790e066b403fe3f07ebf9fad0dabee0068c309c99ed36e87448728235c9->leave($__internal_88f8c790e066b403fe3f07ebf9fad0dabee0068c309c99ed36e87448728235c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f8dd7404aaec7d6bff3273fe7834c176976617748b4009fb1d16ec7244a459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8dd7404aaec7d6bff3273fe7834c176976617748b4009fb1d16ec7244a459a->enter($__internal_5f8dd7404aaec7d6bff3273fe7834c176976617748b4009fb1d16ec7244a459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<a href=\"/edit\">Hello World!</a>
";
        
        $__internal_5f8dd7404aaec7d6bff3273fe7834c176976617748b4009fb1d16ec7244a459a->leave($__internal_5f8dd7404aaec7d6bff3273fe7834c176976617748b4009fb1d16ec7244a459a_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
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
\t<a href=\"/edit\">Hello World!</a>
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\index.html.twig");
    }
}
