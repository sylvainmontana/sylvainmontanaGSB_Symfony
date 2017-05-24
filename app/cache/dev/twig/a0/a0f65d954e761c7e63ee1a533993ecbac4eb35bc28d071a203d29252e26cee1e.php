<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_66955beffaa9f301c404b400831e8bc4ca0c2fb9efe00b096fc0b6c0c1985357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de25e7965f8a9e77bc821152ef07d57f2dafaa63502422214ec2d723d3a4da6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de25e7965f8a9e77bc821152ef07d57f2dafaa63502422214ec2d723d3a4da6b->enter($__internal_de25e7965f8a9e77bc821152ef07d57f2dafaa63502422214ec2d723d3a4da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de25e7965f8a9e77bc821152ef07d57f2dafaa63502422214ec2d723d3a4da6b->leave($__internal_de25e7965f8a9e77bc821152ef07d57f2dafaa63502422214ec2d723d3a4da6b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3c9a43149425ada1008a71f94bad11d9246f8b6bf0e1a0bb2cf3422b151d225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c9a43149425ada1008a71f94bad11d9246f8b6bf0e1a0bb2cf3422b151d225->enter($__internal_c3c9a43149425ada1008a71f94bad11d9246f8b6bf0e1a0bb2cf3422b151d225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_c3c9a43149425ada1008a71f94bad11d9246f8b6bf0e1a0bb2cf3422b151d225->leave($__internal_c3c9a43149425ada1008a71f94bad11d9246f8b6bf0e1a0bb2cf3422b151d225_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_f6918f71f8de8bb4c35c1022f40c148c563f7e0c71407279304cb408b21dc9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6918f71f8de8bb4c35c1022f40c148c563f7e0c71407279304cb408b21dc9ae->enter($__internal_f6918f71f8de8bb4c35c1022f40c148c563f7e0c71407279304cb408b21dc9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_f6918f71f8de8bb4c35c1022f40c148c563f7e0c71407279304cb408b21dc9ae->leave($__internal_f6918f71f8de8bb4c35c1022f40c148c563f7e0c71407279304cb408b21dc9ae_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block body %}
 {% block bloc1 %} 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      {%if(message is defined )%}
            <div class =\"erreur\">
            <ul>{{message}}</ul></div>
      {%endif%}
<form method=\"POST\" action=\"{{path('pg_gsb_frais_validerconnexion')}}\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    {% endblock %}    
    {% endblock%}
     ", "PgGsbFraisBundle:Home:connexion.html.twig", "/var/www/html/GSB_Symfony_Propre/src/Pg/GsbFraisBundle/Resources/views/Home/connexion.html.twig");
    }
}
