<?php

/* base.html.twig */
class __TwigTemplate_f3273d91994c2b59d1471a4ab4f965345c5136bd720b9cca987b52d01197752b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f663fb83286348d4ee3528a40c07b50e3fb71e77f68b8fc78c614eea65ad026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f663fb83286348d4ee3528a40c07b50e3fb71e77f68b8fc78c614eea65ad026->enter($__internal_9f663fb83286348d4ee3528a40c07b50e3fb71e77f68b8fc78c614eea65ad026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
    \t<p>
        \t";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
        </p>
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_9f663fb83286348d4ee3528a40c07b50e3fb71e77f68b8fc78c614eea65ad026->leave($__internal_9f663fb83286348d4ee3528a40c07b50e3fb71e77f68b8fc78c614eea65ad026_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b488008353f5cbcd06034ee750c7b593a29875004357495d009e2f2e96638de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b488008353f5cbcd06034ee750c7b593a29875004357495d009e2f2e96638de->enter($__internal_8b488008353f5cbcd06034ee750c7b593a29875004357495d009e2f2e96638de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b488008353f5cbcd06034ee750c7b593a29875004357495d009e2f2e96638de->leave($__internal_8b488008353f5cbcd06034ee750c7b593a29875004357495d009e2f2e96638de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6025ddb1feae5ccf38387d17bad7346acf878ff4d6b3c82eb4090caf38ed86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6025ddb1feae5ccf38387d17bad7346acf878ff4d6b3c82eb4090caf38ed86c->enter($__internal_c6025ddb1feae5ccf38387d17bad7346acf878ff4d6b3c82eb4090caf38ed86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6025ddb1feae5ccf38387d17bad7346acf878ff4d6b3c82eb4090caf38ed86c->leave($__internal_c6025ddb1feae5ccf38387d17bad7346acf878ff4d6b3c82eb4090caf38ed86c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f4ad37a9950c86e6286387bf09147c3acc4dcdb3eff57b2591d54140217e1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4ad37a9950c86e6286387bf09147c3acc4dcdb3eff57b2591d54140217e1cf->enter($__internal_6f4ad37a9950c86e6286387bf09147c3acc4dcdb3eff57b2591d54140217e1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f4ad37a9950c86e6286387bf09147c3acc4dcdb3eff57b2591d54140217e1cf->leave($__internal_6f4ad37a9950c86e6286387bf09147c3acc4dcdb3eff57b2591d54140217e1cf_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9287f2463be5774a044cda0c5eb3eb8d1ec15825cfbfc3f8e1aa59bff73d7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9287f2463be5774a044cda0c5eb3eb8d1ec15825cfbfc3f8e1aa59bff73d7c63->enter($__internal_9287f2463be5774a044cda0c5eb3eb8d1ec15825cfbfc3f8e1aa59bff73d7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9287f2463be5774a044cda0c5eb3eb8d1ec15825cfbfc3f8e1aa59bff73d7c63->leave($__internal_9287f2463be5774a044cda0c5eb3eb8d1ec15825cfbfc3f8e1aa59bff73d7c63_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  83 => 10,  72 => 6,  60 => 5,  51 => 14,  49 => 13,  45 => 11,  43 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    \t<p>
        \t{% block body %}{% endblock %}

        </p>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\my_project\\templates\\base.html.twig");
    }
}
