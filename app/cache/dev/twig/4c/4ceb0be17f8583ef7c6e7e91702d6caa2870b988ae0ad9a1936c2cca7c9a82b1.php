<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3005697bc5e22b83f3f69208e03c45636c828d252a39b6ac5de517a21288718d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4877a767d9053bf4aabc4573d3e2620d0daf7d7edf4e476c65a842ac5c93065d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4877a767d9053bf4aabc4573d3e2620d0daf7d7edf4e476c65a842ac5c93065d->enter($__internal_4877a767d9053bf4aabc4573d3e2620d0daf7d7edf4e476c65a842ac5c93065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4877a767d9053bf4aabc4573d3e2620d0daf7d7edf4e476c65a842ac5c93065d->leave($__internal_4877a767d9053bf4aabc4573d3e2620d0daf7d7edf4e476c65a842ac5c93065d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5418f0c5c34a560110f2de45845e4e2a3f89c325d70f9d5881ce979477fbd564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5418f0c5c34a560110f2de45845e4e2a3f89c325d70f9d5881ce979477fbd564->enter($__internal_5418f0c5c34a560110f2de45845e4e2a3f89c325d70f9d5881ce979477fbd564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5418f0c5c34a560110f2de45845e4e2a3f89c325d70f9d5881ce979477fbd564->leave($__internal_5418f0c5c34a560110f2de45845e4e2a3f89c325d70f9d5881ce979477fbd564_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0321d5fe68b193571f0d64854b6eb17b936c6d5c779a8b71f241252251e2447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0321d5fe68b193571f0d64854b6eb17b936c6d5c779a8b71f241252251e2447->enter($__internal_b0321d5fe68b193571f0d64854b6eb17b936c6d5c779a8b71f241252251e2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0321d5fe68b193571f0d64854b6eb17b936c6d5c779a8b71f241252251e2447->leave($__internal_b0321d5fe68b193571f0d64854b6eb17b936c6d5c779a8b71f241252251e2447_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62f6ba36835ac9df8201d52e9fd0236f22af4ff6c60cce66fcdfb74f2b5a708b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f6ba36835ac9df8201d52e9fd0236f22af4ff6c60cce66fcdfb74f2b5a708b->enter($__internal_62f6ba36835ac9df8201d52e9fd0236f22af4ff6c60cce66fcdfb74f2b5a708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62f6ba36835ac9df8201d52e9fd0236f22af4ff6c60cce66fcdfb74f2b5a708b->leave($__internal_62f6ba36835ac9df8201d52e9fd0236f22af4ff6c60cce66fcdfb74f2b5a708b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/GSB_Symfony_Propre/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
