<?php

/* base.html.twig */
class __TwigTemplate_ed5716d23878371dc1bee40920a6f2fcc87be75422b239aa4770c42c3e5201e7 extends Twig_Template
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
        $__internal_254cc257b42b6e1e827ad8c83c3bb2aaec4ba9650fa024a08f921d076ce779d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254cc257b42b6e1e827ad8c83c3bb2aaec4ba9650fa024a08f921d076ce779d3->enter($__internal_254cc257b42b6e1e827ad8c83c3bb2aaec4ba9650fa024a08f921d076ce779d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_254cc257b42b6e1e827ad8c83c3bb2aaec4ba9650fa024a08f921d076ce779d3->leave($__internal_254cc257b42b6e1e827ad8c83c3bb2aaec4ba9650fa024a08f921d076ce779d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c22bdce88abcfaf0d00fe1ff61a9d1d3486626e8fabab5bdb5efdf10c94e8c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22bdce88abcfaf0d00fe1ff61a9d1d3486626e8fabab5bdb5efdf10c94e8c78->enter($__internal_c22bdce88abcfaf0d00fe1ff61a9d1d3486626e8fabab5bdb5efdf10c94e8c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c22bdce88abcfaf0d00fe1ff61a9d1d3486626e8fabab5bdb5efdf10c94e8c78->leave($__internal_c22bdce88abcfaf0d00fe1ff61a9d1d3486626e8fabab5bdb5efdf10c94e8c78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b593f29d9fb02b1f7bb6e4ff514b5aa20eed85c1b19632584049081e6becfb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b593f29d9fb02b1f7bb6e4ff514b5aa20eed85c1b19632584049081e6becfb07->enter($__internal_b593f29d9fb02b1f7bb6e4ff514b5aa20eed85c1b19632584049081e6becfb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b593f29d9fb02b1f7bb6e4ff514b5aa20eed85c1b19632584049081e6becfb07->leave($__internal_b593f29d9fb02b1f7bb6e4ff514b5aa20eed85c1b19632584049081e6becfb07_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6b049799e1a0b2c1947042ca44c643c8d18c9f68f4382048b783fafe4ff0843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b049799e1a0b2c1947042ca44c643c8d18c9f68f4382048b783fafe4ff0843->enter($__internal_b6b049799e1a0b2c1947042ca44c643c8d18c9f68f4382048b783fafe4ff0843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6b049799e1a0b2c1947042ca44c643c8d18c9f68f4382048b783fafe4ff0843->leave($__internal_b6b049799e1a0b2c1947042ca44c643c8d18c9f68f4382048b783fafe4ff0843_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d0e9292e182c54cc2a3f09afea572a133ed9a05a03306970a16930b83103c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0e9292e182c54cc2a3f09afea572a133ed9a05a03306970a16930b83103c99->enter($__internal_3d0e9292e182c54cc2a3f09afea572a133ed9a05a03306970a16930b83103c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d0e9292e182c54cc2a3f09afea572a133ed9a05a03306970a16930b83103c99->leave($__internal_3d0e9292e182c54cc2a3f09afea572a133ed9a05a03306970a16930b83103c99_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/GSB_Symfony_Propre/app/Resources/views/base.html.twig");
    }
}
