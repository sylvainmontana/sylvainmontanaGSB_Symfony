<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_2b34fcb3d0ba0fa4211c5023cde7b1a785f9d6bcc8e08b81278dda1509fa6cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3def7be1a8b5498cb543fcaf54b14a857649d1e6d556225b943e45ad5177251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3def7be1a8b5498cb543fcaf54b14a857649d1e6d556225b943e45ad5177251e->enter($__internal_3def7be1a8b5498cb543fcaf54b14a857649d1e6d556225b943e45ad5177251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_3def7be1a8b5498cb543fcaf54b14a857649d1e6d556225b943e45ad5177251e->leave($__internal_3def7be1a8b5498cb543fcaf54b14a857649d1e6d556225b943e45ad5177251e_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed7c5f1f9c9de93e35ca8d61bd0dc4db032a6824a601494fc3440414df62b4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7c5f1f9c9de93e35ca8d61bd0dc4db032a6824a601494fc3440414df62b4a0->enter($__internal_ed7c5f1f9c9de93e35ca8d61bd0dc4db032a6824a601494fc3440414df62b4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_ed7c5f1f9c9de93e35ca8d61bd0dc4db032a6824a601494fc3440414df62b4a0->leave($__internal_ed7c5f1f9c9de93e35ca8d61bd0dc4db032a6824a601494fc3440414df62b4a0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_485d249bc71d28666100906bea44b8e352aeedc255c7f3b04cf29db8e95e6a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485d249bc71d28666100906bea44b8e352aeedc255c7f3b04cf29db8e95e6a1b->enter($__internal_485d249bc71d28666100906bea44b8e352aeedc255c7f3b04cf29db8e95e6a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_485d249bc71d28666100906bea44b8e352aeedc255c7f3b04cf29db8e95e6a1b->leave($__internal_485d249bc71d28666100906bea44b8e352aeedc255c7f3b04cf29db8e95e6a1b_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_0f79d6f446e3a82e804a0503a3c9bd17d5354ca87aa96c705f251cb791ba5811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f79d6f446e3a82e804a0503a3c9bd17d5354ca87aa96c705f251cb791ba5811->enter($__internal_0f79d6f446e3a82e804a0503a3c9bd17d5354ca87aa96c705f251cb791ba5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_0f79d6f446e3a82e804a0503a3c9bd17d5354ca87aa96c705f251cb791ba5811->leave($__internal_0f79d6f446e3a82e804a0503a3c9bd17d5354ca87aa96c705f251cb791ba5811_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"{{ asset('bundles/framework/css/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"{{ asset('bundles/framework/images/logo.jpg')}}\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          {% block menu %}
          {% endblock %}
          {% block body %} 
                 {% block bloc1 %}
                 {% endblock %}
          {% endblock %}
    </body>
  </html>

          
          
", "PgGsbFraisBundle::layout.html.twig", "/var/www/html/GSB_Symfony_Propre/src/Pg/GsbFraisBundle/Resources/views/layout.html.twig");
    }
}
