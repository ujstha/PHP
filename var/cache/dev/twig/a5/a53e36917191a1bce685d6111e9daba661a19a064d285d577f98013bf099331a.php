<?php

/* change/index.html.twig */
class __TwigTemplate_09f517f79fc9bd10510915fc45501d98a3482e56112e6fa22851eb58ea510cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "change/index.html.twig", 1);
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
        $__internal_8e2d5f36ddf9691a1e80c6befbdaf9d84280ffe2678fe05b204b347bc75b8a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2d5f36ddf9691a1e80c6befbdaf9d84280ffe2678fe05b204b347bc75b8a1d->enter($__internal_8e2d5f36ddf9691a1e80c6befbdaf9d84280ffe2678fe05b204b347bc75b8a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "change/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2d5f36ddf9691a1e80c6befbdaf9d84280ffe2678fe05b204b347bc75b8a1d->leave($__internal_8e2d5f36ddf9691a1e80c6befbdaf9d84280ffe2678fe05b204b347bc75b8a1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc1138529f8633bdf0a5f6da1c2d759d58a2bbb63bcb40f727ea87e5d6c2d786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1138529f8633bdf0a5f6da1c2d759d58a2bbb63bcb40f727ea87e5d6c2d786->enter($__internal_fc1138529f8633bdf0a5f6da1c2d759d58a2bbb63bcb40f727ea87e5d6c2d786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<a href=\"/change/edit\">Hello World!</a>
";
        
        $__internal_fc1138529f8633bdf0a5f6da1c2d759d58a2bbb63bcb40f727ea87e5d6c2d786->leave($__internal_fc1138529f8633bdf0a5f6da1c2d759d58a2bbb63bcb40f727ea87e5d6c2d786_prof);

    }

    public function getTemplateName()
    {
        return "change/index.html.twig";
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
\t<a href=\"/change/edit\">Hello World!</a>
{% endblock %}", "change/index.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\change\\index.html.twig");
    }
}
