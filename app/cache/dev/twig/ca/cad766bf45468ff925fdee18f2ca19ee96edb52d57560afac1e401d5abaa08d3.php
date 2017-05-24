<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9af9134ea05fbe67187ae0834b1ec259140f9a22b7fd74fd16301f44c7da8849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81693bf49b14829c185c1058aa46d76b9de767dd858327471f683c444e549940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81693bf49b14829c185c1058aa46d76b9de767dd858327471f683c444e549940->enter($__internal_81693bf49b14829c185c1058aa46d76b9de767dd858327471f683c444e549940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81693bf49b14829c185c1058aa46d76b9de767dd858327471f683c444e549940->leave($__internal_81693bf49b14829c185c1058aa46d76b9de767dd858327471f683c444e549940_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ab16d7318337769af98674b9673dbcad42e12639bbe13485d06886adde0d5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab16d7318337769af98674b9673dbcad42e12639bbe13485d06886adde0d5fb->enter($__internal_8ab16d7318337769af98674b9673dbcad42e12639bbe13485d06886adde0d5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ab16d7318337769af98674b9673dbcad42e12639bbe13485d06886adde0d5fb->leave($__internal_8ab16d7318337769af98674b9673dbcad42e12639bbe13485d06886adde0d5fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_617c5eefc44f3d6faa8f881336c92079afca81ec854cbe941ec9134553582cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617c5eefc44f3d6faa8f881336c92079afca81ec854cbe941ec9134553582cba->enter($__internal_617c5eefc44f3d6faa8f881336c92079afca81ec854cbe941ec9134553582cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_617c5eefc44f3d6faa8f881336c92079afca81ec854cbe941ec9134553582cba->leave($__internal_617c5eefc44f3d6faa8f881336c92079afca81ec854cbe941ec9134553582cba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39190fc45d5e0ce442e80b81de0f139162cd8a13da444610ac9e100254989140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39190fc45d5e0ce442e80b81de0f139162cd8a13da444610ac9e100254989140->enter($__internal_39190fc45d5e0ce442e80b81de0f139162cd8a13da444610ac9e100254989140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_39190fc45d5e0ce442e80b81de0f139162cd8a13da444610ac9e100254989140->leave($__internal_39190fc45d5e0ce442e80b81de0f139162cd8a13da444610ac9e100254989140_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/GSB_Symfony_Propre/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
